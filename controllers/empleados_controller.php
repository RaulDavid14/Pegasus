<?php
date_default_timezone_set('America/Mexico_City');
require_once "../models/personal_model.php";

    $sFecha = date('Y-m-d H:i:s');

    function is_valid_data()
    {
        return (
            isset($_POST['pnombre']) &&
            isset($_POST['snombre']) &&
            isset($_POST['tnombre']) &&
            isset($_POST['paterno']) &&
            isset($_POST['materno']) &&
            isset($_POST['rfc']) &&
            isset($_POST['curp']) &&
            isset($_POST['fecNac'])
        );
    }

    $oPersonal_model = new Personal();
    
    if (is_valid_data())
    {
        $sDescripcion = "($sFecha) - Respuesta capturada con éxito";
        $arrRespuesta = array ('class' => 'alert alert-succes', 'request' => $sDescripcion);
        echo json_encode($arrRespuesta);
    }
    else
    {
        
    }

?>