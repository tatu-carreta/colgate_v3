<?php

//session_start(); //comentar esta linea si no se trabaja con sesiones
//require_once (__DIR__) . '/funciones/sessionControl.php';

ini_set('default_charset', 'utf8');

date_default_timezone_set("America/Argentina/Buenos_Aires");

/*
  @Maximiliano
 */

$localhost = true; //define si se esta trabajando a modo local o no

$proyecto = "";

if (!$localhost) {

    switch ($_SERVER['HTTP_HOST']) {
        case "promoplax.com.ar":
            define("URL_TOTAL", "http://promoplax.com.ar/promo/");
            break;
        case "www.promoplax.com.ar":
            define("URL_TOTAL", "http://www.promoplax.com.ar/promo/");
            break;
    }

    define("DB_USER", "promopla_PROUser");
    define("DB_PASS", "Promo_Pass_16");
    define("DB_HOST", "localhost");
    define("DB_SELECTED", "promopla_Promo16");


} else {

    define("URL_TOTAL", "http://localhost/colgate_v3/");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_HOST", "localhost");
    define("DB_SELECTED", "colgate_v3");
}

/*
 * paths para utilizar absoluto y permitir
 * url amigable a traves de .htaccess
 */

define("PATH_HOME", URL_TOTAL);
define("PATH_CSS", URL_TOTAL . "css/");
define("PATH_PHP", URL_TOTAL . "php/");
define("PATH_CONTROLLER", URL_TOTAL . "controller/");
define("PATH_HTML", URL_TOTAL . "html/");
define("PATH_JS", URL_TOTAL . "js/");
define("PATH_ADMIN", URL_TOTAL . "admin/");
define("PATH_IMAGES", URL_TOTAL . "images/");


require_once (__DIR__) . '/funciones/funcionesSeguridad.php';
