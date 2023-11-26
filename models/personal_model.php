<?php
    require_once "../config/conexion.php";

    class Personal
    {
        private $oConexion;
        public function __construct()
        {
            $this->oConexion = Conexion::crearConexion('127.0.0.1', 'root', '', 'personal');
        }

        public function setPersona(
             $sPNombre
            ,$sSNombre
            ,$sTNombre
            ,$sPaterno
            ,$sMaterno
            ,$sRFC
            ,$sCURP
            ,$sFecNacimiento
        )
        {
            try 
            {

                if ($this->oConexion->connect_error)
                die('Conexión fallida' . $this->oConexion->connect_error);

                    $sqlConsulta = 'CALL insertar_persona(?, ?, ?, ?, ?, ?, ?, ?)';

                    $sqlSentencia  = $this->oConexion->prepare($sqlConsulta);
                    $sqlSentencia->bind_param("ssssssss", $sPNombre, $sSNombre, $sTNombre, $sPaterno, $sMaterno, $sRFC, $sCURP, $sFecNacimiento);
                    $bResult = $sqlSentencia->execute();

                    if ($bResult && $sqlSentencia->affected_rows > 0)
                    return true;
                else
                return false;
            }
            catch(Exception $error)
            {
                return false;
            }
        }

    }

?>