<?php

function validarEnviarRegistro() {
    $ok = false;
    $text = "";
    if (!isset($_POST['nomyape']) || ($_POST['nomyape'] == "")) {
        $text = "Problema en el Nombre y Apellido.";
    } elseif (!isset($_POST['dni']) || ($_POST['dni'] == "") || (!is_numeric($_POST['dni'])) || (!in_array(strlen($_POST['dni']), [7,8] ))) {
        $text = "Problema en el DNI.";
    } elseif (!isset($_POST['domicilio']) || ($_POST['domicilio'] == "")) {
        $text = "Problema en el Domicilio.";
    } elseif (!isset($_POST['cdpost']) || ($_POST['cdpost'] == "") /*|| (!is_numeric($_POST['cdpost']))*/) {
        $text = "Problema en el Código Postal.";
    } elseif (!isset($_POST['ciudad']) || ($_POST['ciudad'] == "")) {
        $text = "Problema en la Ciudad.";
    } elseif (!isset($_POST['prov']) || ($_POST['prov'] == "")) {
        $text = "Problema en la Provincia.";
    } elseif (!isset($_POST['codTel']) || ($_POST['codTel'] == "") || (!is_numeric($_POST['codTel']))) {
        $text = "Problema en la Característica del Teléfono.";
    } elseif (!isset($_POST['numTel']) || ($_POST['numTel'] == "") || (!is_numeric($_POST['codTel']))) {
        $text = "Problema en el Número del Teléfono.";
    } elseif (!isset($_POST['correo']) || ($_POST['correo'] == "") || (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))) {
        $text = "Problema en el Correo electrónico.";
    } elseif (!isset($_POST['comentarios']) || (trim($_POST['comentarios']) == "")) {
        $text = "Problema en el Comentario.";
    } else {
        if (isset($_POST['prods']) && (is_array($_POST['prods']))) {
            $prodOk = true;
            foreach ($_POST['prods'] as $prod) {
                if (($prod != "") && ((!is_numeric($prod)) || (strlen($prod) != 13))) {
                    $prodOk = false;
                    $text = "Problema en el/los EAN ingresados. Deben contener 13 dígitos.";
                    break;
                }
            }
            if ($prodOk) {
                $ok = true;
            }
        } else {
            $text = "Problema en el/los EAN ingresados.";
        }
        //    $ok = true;
    }

    $data = array(
        'estado' => $ok,
        'texto' => $text
    );

    return $data;
}
