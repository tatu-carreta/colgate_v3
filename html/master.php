<?php
require_once (__DIR__) . '/../php/config.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cuidemos el agua con Colgate</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <link rel="shortcut icon" href="favicon.ico">
        <!-- CSS -->
        <link href="<?php echo PATH_CSS; ?>styles.css" rel="stylesheet" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>

        <script src="<?php echo PATH_JS ?>jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
            var PATH_CONTROLLER = '<?php echo PATH_CONTROLLER ?>';
            var PATH_HOME = '<?php echo PATH_HOME ?>';
        </script> 

        <!-- anclas -->
        <script type="text/javascript">
            $(function () {
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>

        <!-- Botón UP -->
        <script>
            $(window).scroll(function () {
                if ($(this).scrollTop() > 500) {
                    $('.scrollUp').fadeIn();
                } else {
                    $('.scrollUp').fadeOut();
                }
            });
            $(document).ready(function () {
                $('.scrollUp').click(function () {
                    $("html, body").animate({scrollTop: 0}, 600);
                    return false;
                });
            })
        </script>    
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#participa" class="participa"><span>Participá y contanos cómo cuidás el agua</span></a></li>
                        <li><a href="#tips" class="tips"><span>Eco Tips</span></a></li>
                        <li><a href="#bases" class="bases"><span>Bases y condiciones</span></a></li>
                    </ul>
                </nav>
                <div class="ahorra"><span>Ahorrá agua</span></div>
            
                <!-- <nav class="menuResponsive">
                    <ul>
                        <li><a href="#registro" class="reg"><span>¡Registrate!</span></a></li>
                        <li><a href="#productos" class="prod"><span>Productos</span></a></li>
                        <li><a href="#bases" class="bases"><span>Bases y condiciones</span></a></li>
                    </ul>
                </nav> -->
            </div>
        </header>

<?php
require_once (__DIR__) . '/home.php';
require_once (__DIR__) . '/participa.php';
require_once (__DIR__) . '/consejos.php';
require_once (__DIR__) . '/bases.php';
?>

        <!-- FOOTER -->
        <footer>
            <p class="copyright"> © 2016 <a href="http://www.colgatepalmolive.com.ar" target="_blank">Colgate-Palmolive Company</a>. Todos los derechos reservados. Usted está viendo la página de Argentina. <br>Vea nuestras <a href="http://www.colgate.com.ar/app/Colgate/AR/Corp/LegalPrivacy.cvsp" target="_blank">Políticas de Privacidad</a>. </p> 
            <p class="brand"> <a href="http://www.colgatepalmolive.com.ar" target="_blank"></a> </p>
        </footer>

        <div class="contentUp"><a href="#" class="scrollUp"></a></div>

        <div id="divLoading">
            <img width="48" height="48" src="<?php echo PATH_IMAGES; ?>loading.gif">
            <p>Espere un momento por favor.</p>
        </div>

        <script>
            $(document).ready(function () {
                $('#masBases').hide();
                // $('.globoProd').hide();
            });
        </script>

        <script src="<?php echo PATH_JS ?>jqFuncs.js"></script>
        <script src="<?php echo PATH_JS ?>jquery.easing.1.3.js"></script>
    </body>
</html>
