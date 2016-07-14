<?php

//session_start(); //comentar esta linea si no se trabaja con sesiones
//require_once (__DIR__) . '/funciones/sessionControl.php';

ini_set('default_charset', 'utf8');

date_default_timezone_set("America/Argentina/Buenos_Aires");

/*
  @Maximiliano
 */

$localhost = true; //define si se esta trabajando a modo local o no

$proyecto = "CUIDEMOS EL AGUA";

if (!$localhost) {

    switch ($_SERVER['HTTP_HOST']) {
        case "cuidemoselagua.com.ar":
            define("URL_TOTAL", "http://cuidemoselagua.com.ar/");
            break;
        case "www.cuidemoselagua.com.ar":
            define("URL_TOTAL", "http://www.cuidemoselagua.com.ar/");
            break;
    }

    define("DB_USER", "cuidemos_col_use");
    define("DB_PASS", "Col_pass_16");
    define("DB_HOST", "localhost");
    define("DB_SELECTED", "cuidemos_col_wall");


} else {

    define("URL_TOTAL", "http://localhost/colgate_v3/");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_HOST", "localhost");
    define("DB_SELECTED", "colgate_v3");
}

$geo = false;

if($geo)
{
    $goo_analy = array(
        'codigo_area' => 'UA-61383693-4'
    );
    
    $omni = array(
        'codigo_country' => 'CPARAll,CPARPromo',
        'path_promotion' => URL_TOTAL,
        'country' => 'Argentina',
        'language' => 'Spanish',
        'name_promotion' => 'Cuidemos el agua'
    );
}else{
    $goo_analy = array(
        'codigo_area' => 'UA-61383693-4'
    );
    
    $omni = array(
        'codigo_country' => 'CPARAll,CPARPromo',
        'path_promotion' => URL_TOTAL,
        'country' => 'Argentina',
        'language' => 'Spanish',
        'name_promotion' => 'Cuidemos el agua'
    );
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
