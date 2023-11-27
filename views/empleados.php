<?php
    include_once "../includes/navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../src/css/altaEmpleado.css">
    <script src="../src/js/funciones.js"></script>
    <script src="../src/js/altaEmpleado.js"></script>
    
    <title>Empleados</title>
</head>
<body>

<div id="Opciones"> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    
  <div class="container-fluid">
      <div class="col-3 col-sm-8 col-lg-4">
        <button id="idvalidar" type="button" onclick="showModal()" class="btn btn-outline-success ml-4 col-md-5">Alta de usuario</button>
      </div>
      <div class="d-flex" role="search">
        <input id="idSearchUser" class="form-control me-2" type="search" placeholder="ID empleado" aria-label="Search">
        <button  class="btn btn-outline-primary"  >Buscar</button>
      </div>
    </div>
  
  </nav>    
</div>

<!-- MODAL DE FORMULARIO DE ALTA DE EMPLEADOS -->
<div id="miModal" class="modal">
    <div class="modal-content">
      <div class="text-right">
        <span onclick="showModal()" style="float:right; cursor:pointer;" class="">&times;</span>
      </div>
        <form>
            <div class="row">
             <div class="col-3 col-sm-2 col-lg-4 mt-2">
                <label for="inptIdPriNom" class="col-form-label col-form-label-sm ml-2"><b><span class="text-danger">*</span>Primer nombre</b></label>
              <input id="inptIdPriNom" name="inptIdPriNom" type="text" class="form-control form-control-sm mt-n1" required onkeyup="hacer_mayuscula(this);" required>
            </div>

            <div class="col-3 col-sm-2 col-lg-4 mt-2">
              <label for="inptIdSegNom" class="col-form-label col-form-label-sm ml-2"><b><span class="text-danger">*</span>Segundo nombre</b></label>
              <input id="inptIdSegNom" name="inptIdSegNom" type="text" class="form-control form-control-sm mt-n1" onkeyup="hacer_mayuscula(this);" required>
            </div>

            <div class="col-3 col-sm-6 col-lg-4 mt-2">
              <label for="inptIdTerNom" class="col-form-label col-form-label-sm ml-2"><b><span class="text-danger">*</span>Tercer nombre</b></label>
              <input id="inptIdTerNom" name="inptConTerNom" type="text" class="form-control form-control-sm mt-n1" onkeyup="hacer_mayuscula(this);" required>
            </div>

            <div class="col-3 col-sm-4 col-lg-4 mt-2">
              <label for="inptIdApePat" class="col-form-label col-form-label-sm ml-2"><b><span class="text-danger">*</span>Apellido paterno</b></label>
              <input id="inptIdApePat" name="inptIdApePat" type="text" class="form-control form-control-sm mt-n1" onkeyup="hacer_mayuscula(this);" required>
            </div>

            <div class="col-3 col-sm-4 col-lg-4 mt-2">
              <label for="inptIdApeMat" class="col-form-label col-form-label-sm ml-2"><span class="text-danger">*</span><b>Apellido materno</b></label>
              <input id="inptIdApeMat" name="inptIdApeMat" type="text" class="form-control form-control-sm mt-n1" onkeyup="hacer_mayuscula(this);" required>
            </div>
            
            <div class="col-3 col-sm-4 col-lg-4 mt-2">
            <label for="inptIdFecNac" class="col-form-label col-form-label-sm ml-2"><span class="text-danger">*</span><b>Fecha de Nacimiento </b></label>
              <input id="inptIdFecNac" name="inptIdFecNac" type="date" class="form-control form-control-sm mt-n1" required>
            </div>

            <div class="col-3 col-sm-4 col-lg-5 mt-2">
              <label for="inptIdRFC" class="col-form-label col-form-label-sm ml-2"><span class="text-danger">*</span><b>RFC</b></label>
              <input id="inptIdApePat" name="inptIdApePat" type="text" class="form-control form-control-sm mt-n1" onkeyup="hacer_mayuscula(this);" required>
            </div>

            <div class="col-3 col-sm-4 col-lg-7 mt-2">
              <label for="inptIdCURP" class="col-form-label col-form-label-sm ml-2"><span class="text-danger">*</span><b>CURP</b></label>
              <input id="inptIdApeMat" name="inptIdApeMat" type="text" class="form-control form-control-sm mt-n1" onkeyup="hacer_mayuscula(this);" required>
            </div>
            
          </div>
        
          <div class="modal-footer text-center mt-4">
              <button type="button" onclick="showModal()" class="btn btn-secondary btn-md" data-dismiss="modal">Cerrar</button>
              <button id="btnCrearPersonal" class="btn btn-primary btn-md">Crear</button>
          </div>
     
              
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
  </tbody>
</table>
</body>
</html>
