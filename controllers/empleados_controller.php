<?php
    require_once "../models/personal_model.php";
/*
    pnombre : sPNombre,
    snombre : sSNombre,
    tnombre : sTNombre,
    paterno : sPaterno,
    materno : sMaterno,
    rfc     : sRFC,
    curp    : sCURP
*/

    function is_valid_data()
    {
        return (
            isset($_POST['pnombre']) &&
            isset($_POST['snombre']) &&
            isset($_POST['tnombre']) &&
            isset($_POST['paterno']) &&
            isset($_POST['materno']) &&
            isset($_POST['']) &&
            isset($_POST['']) &&
            isset($_POST[''])
        );
    }

    $oPersonal_model = new Personal();
    
    if (is_valid_data())
    {

    }

?>