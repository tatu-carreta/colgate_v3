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
        <link href="<?php echo PATH_CSS; ?>font-awesome.min.css" rel="stylesheet" media="screen">
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
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo PATH_CSS ?>jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo PATH_JS ?>jquery.fancybox.pack.js"></script>
    </head>
    <body>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		 
		  ga('create', 'UA-73999373-3', 'auto');

		  ga('send', 'pageview');
		 
		</script>
                <script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                    ga('create', '<?php echo $goo_analy['codigo_area'] ?>', 'auto');
                    ga('send', 'pageview');
                </script>
        <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#participa" class="participa"><span>Participá y contanos cómo cuidás el agua</span></a></li>
                    <li><a href="#consejos" class="consejos"><span>Consejos</span></a></li>
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
require_once (__DIR__) . '/comentarios.php';
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
        
        <!-- Dynamic SiteCatalyst code version: H.x. Copyright 1997-2004 Omniture, Inc. More info available at http://www.omniture.com -->
        <script language="JavaScript" type="text/javascript">

        <!--

        var s_account='<?php echo $omni['codigo_country'] ?>,CPAllPromo';

        -->

        </script>

        <script language='JavaScript' src='https://secure.colgate.com/Colgate/Common/s_code_remote_h.js'></script>

        <script language="JavaScript">

        <!--
        _omniture.pageName='<?php echo $omni['path_promotion'] ?>';
        _omniture.server='www.colgate.com';
        _omniture.channel='main';
        _omniture.account='<?php echo $omni['codigo_country'] ?>,CPAllPromo';
        _omniture.prop1='Latin America';
        _omniture.prop2='<?php echo $omni['country'] ?>';
        _omniture.prop3='<?php echo $omni['language'] ?>';
        _omniture.prop4='Promotions';
        _omniture.prop5='Oral Care Promotion';
        _omniture.prop6='Toothpaste Promotion';
        _omniture.prop7='<?php echo $omni['name_promotion'] ?>';
        _omniture.prop8='<?php echo $omni['name_promotion'] ?>';
        _omniture.linkInternalFilter='javascript:,/Colgate';
        _omniture.hier1='Colgate Universal,';
        -->

        </script>

        <script language='JavaScript' src='https://secure.colgate.com/Colgate/Common/s_code_remote_h_post.js'></script>

        <script language="JavaScript">

        <!--

        var s_code=_omniture.t();

        if(s_code) {

        alert("s_code="+s_code);

        document.write(s_code); } //--></script>

        <!-- End SiteCatalyst code version: H.x. -->

        <noscript><img src="http://CPBRAll.112.2o7.net/b/ss/<?php echo $omni['codigo_country'] ?>,CPAllPromo/1/1/H.7--NS/123456?pageName=<?php echo $omni['path_promotion'] ?>" width="1" height="1" border="0" /></noscript>
    </body>
</html>
