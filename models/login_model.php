<?php
    include_once "../config/conexion.php";

    class Login_model
    {
        private $oConexion;

        public function __construct()
        {
            $this->oConexion = Conexion::crearConexion('localhost', 'root', '', 'personal');
        }
    }
?>