<?php
  date_default_timezone_set('America/Mexico_City');
  $sFecha = date('Y');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../src/js/bootstrap.min.js"></script>
    <script src="../src/js/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/signin.css">
    
    <title>Proyecto Pegasus</title>
</head>
<body class="text-center">
    
<main class="form-signin">
  <div></div>
  
  <form action="inicio.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Bienvenido</h1>
    <img class="mb-4" src="../src/img/sedena.png" alt="" width="120" height="70">

    <div class="form-floating mt-1">
      <input type="number" class="form-control" id="floatingInput" placeholder="Número" required autocomplete="off" pattern="[0-9]+" title="Por favor, ingresa solo números">
      <label for="floatingInput">Número</label>
    </div>

    <div class="form-floating mt-1">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Constraseña</label>
    </div>

    <button class="w-100 btn btn-outline-danger mt-5" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">Derechos reservados  &copy;Pegasus <?php echo $sFecha; ?></p>
  </form>
</main>

</body>
</html>