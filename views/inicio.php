<?php
    include "../includes/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Roles </title>
</head>
<body>
    <form action="" method="post">
        <div class="col-12 col-sm-8 col-lg-4 mt-2">
            <label for="idRole">Role</label>
        </div>
            <input id="idRole" type="text">
        <div class ="col-12 col-sm-8 col-lg-4 mt-2">
            <label for="">Descripcion</label>
        </div>
            <textarea class="mt-3" name="" id="idDescripcion" cols="20" rows="1"></textarea>
        <div>
            <button class="mt-5 btn btn-outline-success ml-3 col-md-3" type="button">Enviar</button>
        </div>
    </form>
</body>
</html>