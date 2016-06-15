<?php

if (!isset($localhost)) {
    require_once (__DIR__) . '/../php/config.php';
}

require_once (__DIR__) . '/../php/funciones/funcionesRegistro.php';
require_once (__DIR__) . '/../php/funciones/funcionesPhp.php';
require_once (__DIR__) . '/../php/validate/validateRegistro.php';

$infoValidate = validarEnviarRegistro();
//$infoValidate['estado'] = true;
if ($infoValidate['estado']) {

    $nombre = sanearDatos($_POST['nomyape']);
//$nombre = NULL;
    $dni = sanearDatos($_POST['dni']);
    $domicilio = sanearDatos($_POST['domicilio']);
    $codPostal = sanearDatos($_POST['cdpost']);
    $ciudad = sanearDatos($_POST['ciudad']);
    $prov = sanearDatos($_POST['prov']);
    $codTel = sanearDatos($_POST['codTel']);
    $numTel = sanearDatos($_POST['numTel']);
    $telefono = $codTel . " - " . $numTel;
    $correo = sanearDatos($_POST['correo']);

    if (isset($_POST['novedades']) && ($_POST['novedades'] == 'T')) {
        $recibir = 'S';
    } else {
        $recibir = 'N';
    }

    $productos = array();
    foreach ($_POST['prods'] as $prods) {
        if (sanearDatos($prods) != "") {
            array_push($productos, sanearDatos($prods));
        }
    }

    if (count($productos) <= 0) {
        $estadoAgregacion = false;
        $texto = "No ha cargado ningún EAN para registrar.";
    } else {

        $cantidadRegistrados = obtenerCantidadPorDNI($dni);

        $registrar = true;
        $cantidadQuedan = 0;
        if (!$cantidadRegistrados['estado']) {
            $cantidadRegistrados['cantidad'] = 0;
        }

        if (($cantidadRegistrados['cantidad'] + count($productos)) > 10) {
            $registrar = false;
            $cantidadQuedan = (10 - $cantidadRegistrados['cantidad']);
        }

        if ($registrar) {
            $data_registro = array(
                'nomyape' => utf8_encode(utf8_decode($nombre)),
                'dni' => $dni,
                'domicilio' => utf8_encode(utf8_decode($domicilio)),
                'codPostal' => $codPostal,
                'ciudad' => utf8_encode(utf8_decode($ciudad)),
                'provincia' => utf8_encode(utf8_decode($prov)),
                'telefono' => $telefono,
                'correo' => $correo,
                'productos' => $productos,
                'recibir' => $recibir
            );

            $estadoAgregacion = realizarAgregacionRegistro($data_registro);

            if ($estadoAgregacion['estado']) {
                $texto = "Se ha registrado correctamente.";
            } else {
                $texto = "Hubo un error al realizar el registro. Vuelva a intentarlo en unos minutos.";
            }
        } else {
            $estadoAgregacion = false;
            $texto = "No puede registrar tantos productos. Solo le quedan " . $cantidadQuedan . " para los 10 permitidos.";
        }
    }
} else {
    $estadoAgregacion = false;
    $texto = $infoValidate['texto'];
}

$result = array(
    'estado' => $estadoAgregacion,
    'texto' => $texto
);

echo json_encode($result);
