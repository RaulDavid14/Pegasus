<?php
    include_once "../includes/navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../src/css/altaEmpleado.css">
    <script src="../src/js/altaEmpleado.js"></script>

    <title>Empleados</title>
</head>
<body>

<div id="Opciones"> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="col-12 col-sm-8 col-lg-4">
        <button id="idvalidar" type="button" onclick="openModal()" class="btn btn-outline-success ml-4 col-md-5">Alta de usuario</button>
      </div>
      <div class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ID empleado" aria-label="Search">
        <button class="btn btn-outline-primary"  >Buscar</button>
      </div>
    </div>
  </nav>    
</div>

<!-- MODAL DE FORMULARIO DE ALTA DE EMPLEADOS -->
<div id="miModal" class="modal">
    <div class="modal-content">
        <span onclick="closeModal()" style="float:right; cursor:pointer;">&times;</span>
        
        <form>
            <div class="mt-2">
                <label for="idPrimerNombre">Primer Nombre</label>    
                <input type="text" id="idPrimerNombre">
                
                <label for="idSegundoNombre">Segundo Nombre</label>
                <input type="text" id="idSegundoNombre" name="idSegundoNombre">
                
                <label for="idTercerNombre">Tercer Nombre</label>
                <input type="email" id="idTercerNombre" name="idTercerNombre">
            </div>

            <div class="mt-2" >
                <label for="idPaterno">Apellido Paterno </label>    
                <input type="text" id="idPaterno">

                <label for="idMaterno">Apellido Materno </label>    
                <input type="text" id="idMaterno">
            </div>
                
            <input type="submit"  value="Enviar">
        </form>
    </div>
</div>
<!-- FIN DE FORMULARIO DE ALTA DE EMPLEADOS -->


<table class="table">
  <thead>
    <tr>
      <th scope="col">Clave empleado </th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Perfil</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>DAVID CORONA JOSE RAUL</td>
      <td>DESARROLLADOR</td>
      <td>
        <button class="btn btn-outline-primary">Ver</button>
        <button class="btn btn-outline-warning">Actualizar</button>
        <button class="btn btn-outline-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>
        <button class="btn btn-outline-primary">Ver</button>
        <button class="btn btn-outline-warning">Actualizar</button>
        <button class="btn btn-outline-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td> Larry the Bird</td>
      <td> CORONEL </td>
      <td>
        <button class="btn btn-outline-primary">Ver</button>
        <button class="btn btn-outline-warning">Actualizar</button>
        <button class="btn btn-outline-danger">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
