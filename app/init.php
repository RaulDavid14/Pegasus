<?php
spl_autoload_register(function($lib){
    require_once 'lib/' . $lib . '.php';
});
   
    echo "<h1>HELLO WORLD!!!</h1>";
?>