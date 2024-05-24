<?php

namespace Src\Manager;

use Src\Entity\Moto;
use Exception;


class MotoManager extends DataBaseManager
{
    

    
    public function findAll(){
        $query = $this->getConnection()->prepare("SELECT * FROM moto");
        $query->execute([]);

        $results = $query->fetchAll();
       
        $motos = [];
        foreach ($results as $result) {
          $motos[] = Moto ::fromArray($result);
        }

        return $motos;
    }
    public function findById(int $id) : Moto | false
    {

        $query = $this->getConnection()->prepare("SELECT * FROM moto WHERE id = :id");
        $query->execute([":id" => $id]);
        $reponse = $query->fetch();
      
        if($reponse === false){
            return $reponse;}
        return Moto::fromArray($reponse);
    }
    public function findByType($type) 
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto WHERE type = :type");
        $query->execute([":type" => $type]);
        $reponse = $query->fetch();
        if($reponse === false){
            return $reponse;  
            
        }
        return Moto::fromArray($reponse);
    }
    
    public function add(Moto $moto)
    {
        try {
            $query = $this->getConnection()->prepare("INSERT INTO moto (brand, model, type, price, image) VALUES (:brand, :model, :type, :price, :image)");
            $query->execute([
               ":brand" => $moto->getBrand(),
               ":model" => $moto->getModel(),
               ":type" => $moto->getType(),
               ":price" => $moto->getPrice(),
               ":image" => $moto->getImage(),
            ]);
            return true;
        } catch (Exception $e) {
            echo'Error Exception: ', $e->getMessage();
            exit();

        }
        
    }
    public function edit(Moto $moto)
    {
        try {
            $query = $this->getConnection()->prepare("UPDATE moto SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id");
            $query->execute([
               ":id" => $moto->getId(),
               ":brand" => $moto->getBrand(),
               ":model" => $moto->getModel(),
               ":type" => $moto->getType(),
               ":price" => $moto->getPrice(),
               ":image" => $moto->getImage(),

            ]);
            return true;
        } catch (Exception $e) {
            return $e->getmessage();
            exit();
        }
    }
    public function delete(int $id)
    {
        $query = $this->getConnection()->prepare("DELETE FROM moto WHERE id = :id");
        $query->execute([
            ":id" => $id
        ]);
    }
}