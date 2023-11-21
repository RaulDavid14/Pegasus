<?php
date_default_timezone_set('America/Mexico_City');
ini_set('max_execution_time',2400);

class Conexion
{
	public function crearConexion($sServidor = null, $sUsuario = null, $sPassword = null, $sBase = null)
	{
		try
		{
            return new mysqli($sServidor, $sUsuario, $sPassword, $sBase);
		}
		catch(Exception $error)
		{
            return null;
		}
	}	
}
?>