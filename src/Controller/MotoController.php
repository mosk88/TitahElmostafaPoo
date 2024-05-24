<?php

namespace Src\Controller;

use Src\Entity\Moto;
use Src\Manager\MotoManager;

class MotoController
{
    private MotoManager $motoManager;
    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }
    // Route: /moto
    public function getAll()
    {
        $motos = $this->motoManager->findAll();

        //Appel de template
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById(int $id)
    {
        //echo "ROUTE: /moto/$id   (getById)";
        $moto = $this->motoManager->findById($id);
        include(__DIR__ . "/../../Templates/moto/details.php");
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        //echo "ROUTE: /moto/$type   (getByType)";
        $motos = $this->motoManager->findByType($type);
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/add/
    public function add()
    {
        //Verif SI form valider ( methode POST )
        //add en BDD
        //redirection index
        //Afficher formulaire
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
        //SI tous les champs sont fournies
        {
            $moto = new Moto(0, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
            $this->motoManager->add($moto);

            include(__DIR__ . "/../../Templates/moto/add.php");
            header('Location: http://localhost/TitahElmostafaPoo/index.php/moto/');
        } else {
            include(__DIR__ . "/../../Templates/moto/add.php");
        }
    }

    // echo "ROUTE: /moto/add   (add)";


    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index

        $moto = $this->motoManager->findById($id);
        if ($moto == false) {
            
            header('Location: http://localhost/TitahElmostafaPoo/index.php/moto/');
          
        }
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            
            {
                if (!empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['type']) && !empty($_POST['price']) && !empty($_POST['image'])) {
                    $moto = new Moto($id, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
                    $this->motoManager->edit($moto);
                    header('Location: http://localhost/TitahElmostafaPoo/index.php/moto/');
                }

                //echo "ROUTE: /moto/edit/$id   (edit)";
            }
        }
        include(__DIR__ . "/../../Templates/moto/edit.php");
    }
    // Route: /pizza/delete/$id
    public function delete($id)
    {
        $moto = $this->motoManager->findById($id);
        if($moto == false){
            header('Location: http://localhost/TitahElmostafaPoo/index.php/moto/');
            
        }
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $moto = $this->motoManager->delete($id);
            header('Location: http://localhost/TitahElmostafaPoo/index.php/moto/');
        }
        include(__DIR__ . "/../../Templates/moto/delete.php");
}
}