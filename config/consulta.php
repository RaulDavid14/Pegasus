<?php
require_once("conexion.php");

class Consulta
{
    public static function setConection($sNombreBase)
    {
        $oConexion = new Conexion();
        return $oConexion->crearConexion('localhost', 'root', '', $sNombreBase);
    }

    /*
    public function setMSQLConexion($nOpcion)
    {
        $oConexion = new Conexion();
        switch($nOpcion)
        {
            case 1:
                return $oConexion->crearConexion("localhost", "root", "", "clientes");
        }
    }
    public function searchByID($sFolio)
    {
        $sConsulta = "SELECT * FROM listaclientes WHERE Folio = ". $sFolio;

        $ejecutaConsultaMySQL = $this->setMSQLConexion(1);
    
        $preparar = $ejecutaConsultaMySQL->query($sConsulta);
    
        $sqlFila = $preparar->fetch_all(MYSQLI_ASSOC);
        
        if($sqlFila != null)
        return $sqlFila;
    else
    return null;
}
*/
}
?>