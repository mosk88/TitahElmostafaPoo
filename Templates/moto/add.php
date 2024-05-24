<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-ligh text-center  ">
    <h1 class="mt-5 bg-primary text-center text-white">Moto Add</h1>
    <form class="bg-light d-flex  align-content-center  flex-column w-50 m-auto  " action="" method="post">
        <div class="mb-3  ">
            <label for="brand">Brand</label>
            <input class="form-control" type="text" name="brand" id="brand">

        </div>

        <div class="mb-3">
            <label for="model">Model</label>
            <input class="form-control" type="text" name="model" id="model">
        </div>
        <div class ="mb-3 ">
            <label class="form-label text-center " for="type">Type</label>
            <select class ="form-select" name="type" id="">
                <option value="Roadster">Roadster</option>
                <option value="Sportive">Sportive</option>    
                <option value="Custom">Custom</option>
                <option value="Enduro">Enduro</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price">Prix</label>
            <input class="form-control" type="text" name="price" id="price">
        </div>

        <div class="mb-3">
            <label for="image">Image</label>
            <input class="form-control" type="text" name="image" id="image">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary " type="submit">Add</button>
        </div>

    </form>