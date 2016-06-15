<?php

require_once (__DIR__) . '/../php/config.php';

$seccion = $_POST['section'];

switch ($seccion) {

    case "registro":
        require_once (__DIR__) . '/../php/funciones/funcionesConector.php';
        require_once (__DIR__) . '/../admin/registro.php';
        break;
    default :
        
        if ($localhost) {
            header("Location: " . PATH_HOME);
        } else {
            header("Location: " . PATH_HOME);
        }

//echo "entro por no section";
        break;
}