<?php
require_once (__DIR__) . '/../php/config.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <link rel="shortcut icon" href="favicon.ico">
        <!-- CSS -->
        <link href="<?php echo PATH_CSS; ?>styleProductos.css" rel="stylesheet" media="screen">
        <link href="<?php echo PATH_CSS; ?>styles.css" rel="stylesheet" media="screen">
        <link href="<?php echo PATH_CSS; ?>jquery.jscrollpane.css" rel="stylesheet" media="all" />
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300,300italic,500italic,700,700italic,900' rel='stylesheet' type='text/css'>

        <!-- owl carousel para responsive -->
        <link rel="stylesheet" href="<?php echo PATH_CSS; ?>owl.carousel.css">
        <link rel="stylesheet" href="<?php echo PATH_CSS; ?>owl.theme.css">
        <link rel="stylesheet" href="<?php echo PATH_CSS; ?>owl.transitions.css">

        <script src="<?php echo PATH_JS ?>jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
            var PATH_CONTROLLER = '<?php echo PATH_CONTROLLER ?>';
            var PATH_HOME = '<?php echo PATH_HOME ?>';
        </script> 
        <script src="<?php echo PATH_JS ?>jquery.flexslider.js"></script>
        <script>
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 3000,
                    animationDuration: 500,
                });
            });
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

        <!-- Include Owl Carousel -->
        <script src="<?php echo PATH_JS ?>owl.carousel.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    autoPlay: false, //Set AutoPlay to 3 seconds
                    nav:true,
                    items: 3,
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [768, 2],
                    itemsMobile: [479, 1]
                });
            });
        </script>
        
    </head>
    <body>
        <header>
            <div class="logoTop"><img src="<?php echo PATH_IMAGES; ?>logo-colgate-plax2.png" alt="Colgate Plax"></div>
            <nav class="menuPc">
                <ul>
                    <li><a href="#registro" class="reg"><span>¡Registrate!</span></a></li>
                    <li><a href="#productos" class="prod"><span>Productos</span></a></li>
                    <li><a href="#bases" class="bases"><span>Bases y condiciones</span></a></li>
                </ul>
            </nav>
            <nav class="menuResponsive">
                <ul>
                    <li><a href="#registro" class="reg"><span>¡Registrate!</span></a></li>
                    <li><a href="#productos" class="prod"><span>Productos</span></a></li>
                    <li><a href="#bases" class="bases"><span>Bases y condiciones</span></a></li>
                </ul>
            </nav>
        </header>

<?php
require_once (__DIR__) . '/home.php';
require_once (__DIR__) . '/registro.php';
require_once (__DIR__) . '/productos.php';
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
        <!-- the jScrollPane script -->
        <script src="<?php echo PATH_JS ?>jquery.mousewheel.js"></script>
        <script src="<?php echo PATH_JS ?>jquery.contentcarousel.js"></script>
        <script type="text/javascript">
            $('#ca-container').contentcarousel();
        </script>
        
    </body>
</html>
