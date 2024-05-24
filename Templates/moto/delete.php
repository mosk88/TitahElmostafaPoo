<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark text-bg-danger text-center d-flex justify-content-center flex-wrap    ">
    <div>
        <form action="" method="post">
            <p><?php echo $moto->getBrand(); ?></p>
            <img src="<?php echo $moto->getImage(); ?>" width="50%" alt="moto">
            <p><?php echo $moto->getModel(); ?></p>
            <p><?php echo $moto->getType(); ?></p>
            <p><?php echo $moto->getPrice() . " € "; ?></p>
            <form action=" http://localhost/TitahElmostafaPoo/index.php/moto/delete/"
                <?php echo ($moto->getId()) ?> method="POST" onsubmit="return confirm('Êtes vous sur de vouloir supprimer ?');">
                <input class="btn btn-danger" type="submit" value="Supprimer">
            </form>

        </form>

    </div>