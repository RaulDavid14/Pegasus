<?php
    require_once "../config/conexion.php";

    class Personal
    {
        private $oConexion;
        public function __construct()
        {
            $this->oConexion = Conexion::crearConexion('127.0.0.1', 'root', '', 'personal');
        }

        public function setPersona()
        {

        }

    }

?>