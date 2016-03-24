<?php 
# http://livedemo00.template-help.com/wt_53534
/*
Username: zecagvpu
Password: 463rYbtZ0f
Control Panel URL: https://xwdz12.dailyrazor.com:8443
*/

if ( isset($_GET['m']) ){
    switch ($_GET['m']) {
        # nosotros
        case "nosotros":
            $paginPHP = "php/nosotros.php";
            $titulo   = "Nosotros | ";
        break;

        # nuestras ediciones
        case "impresa":
            $paginPHP = "php/impresa.php";
            $titulo   = "Edicion Impresa | ";
        break;
        case "online":
            $paginPHP = "php/online.php";
            $titulo   = "Edicion En l&iacute;nea | ";
        break;

        # acceso
        case "acceso":
            $paginPHP = "php/acceso.php";
            $titulo   = "Acceso a Clientes | ";
        break;

        # tarifa
        case "sicer":
            $paginPHP = "php/sicer.php";
            $titulo   = "SICER | ";
        break;

        # contacto
        case "contacto":
            $paginPHP = "php/contacto.php";
            $titulo   = "Contacto | ";
        break;
    }
} else {
    $paginPHP = "php/index.php";
    $titulo   = "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title><?php echo $titulo; ?> Consultas Aduanales De Nuevo Laredo S.A. de C.V.</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta name="description" content="Es una empresa dedicada a la venta y reproduccion de TARIFAS ARANCELARIAS, con el fin de responder a las necesidades en materia de comercio exterior e información aduanera.">
<meta name="keywords" content="consultas aduanales nuevo laredo edicion impresa online tarifa">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="/css/bootstrap.css" >
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/camera.css">
<link rel="stylesheet" href="/css/search-form.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<!--JS-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.mobilemenu.js"></script>
<script src="/js/jquery.equalheights.js"></script> 
<script src="/js/camera.js"></script>
<script src="/js/sForm.js"></script> 
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="/js/jquery.touchSwipe.min.js"></script>
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script>
<script>
$(window).load(function() {
    $(function() {
        $('#foo1').carouFredSel({
            auto: false,
            responsive: true,
            width: '100%',
            scroll: 1,
            pagination  : "#foo2_pag",
            items: {
                height: 'auto',
                width:370,
                visible: {
                    min: 1,
                    max: 1
                }
            },
            mousewheel: true,
            swipe: {
                onMouse: true,
                onTouch: true
            }
        });
    });                     
});
</script>


<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/js/wow.js"></script>
<script src="/js/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.http://livedemo00.template-help.com/wt_53534/js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
<style type="text/css">
    .m-t{
        margin-top:10px;
    }
    strong.especial{
        color: #ffffff;
        text-transform: uppercase;
        font: bold 30px/1em 'Roboto Condensed', "Helvetica Neue", Helvetica, Arial, sans-serif;
        display: block;
        margin-bottom: 5px;
    }
    .boxespecial{
        background: #191919;
        padding: 37px 0 34px 0px;
        overflow: hidden;
    }
</style>
</head>
<body>
<!--header-->
<header class="indent clearfix">
    <div class="follow-box">
    <div class="container"> 
        <div class="row">
            <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 text-left">
                <a href="/index.php"><img src="/img/logo.png" alt="logo" style="width:250px;"></a>
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg text-center">
                <a href="/index.php"><img src="/img/logo.png" alt="logo" style="width:250px;"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 m-t text-right">
                <i class="fa fa-map-marker"></i> Nuevo Laredo, Tamps. INDEPENDENCIA #3335 Sector Centro<br>
                <i class="fa fa-envelope"></i><a href="#"> marthaeva@consultasaduanales.com.mx</a><br>
                <i class="fa fa-phone"></i> TEL: (867) 712-34-48
                <i class="fa fa-phone"></i>(867) 196-35-27
            </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix hidden-xs">
                <li class="<?php if (!isset($_GET['m'])) echo 'active'; ?>"><a href="/index.php">Inicio</a></li>
                <li class="<?php if (@$_GET['m'] == "nosotros") echo 'active'; ?>"><a href="index.php?m=nosotros">Nosotros</a></li>
                <li class="sub-menu"><a href="#">Nuestras Ediciones</a><span></span>
                    <ul class="submenu">
                        <li class="<?php if (@$_GET['m'] == "impresa") echo 'active'; ?>"><a href="index.php?m=impresa">Tarifa Impresa</a></li>
                        <li class="<?php if (@$_GET['m'] == "online") echo 'active'; ?>"><a href="index.php?m=online">Tarifa En Lin&eacute;a</a></li>
                    </ul>
                </li>
                <li class="<?php if (@$_GET['m'] == "acceso") echo 'active'; ?>"><a href="index.php?m=sicer">Acceso a Clientes</a></li>
                <li class="sub-menu"><a href="#">Tarifa</a><span></span>
                    <ul class="submenu">
                        <li class="<?php if (@$_GET['m'] == "sicer") echo 'active'; ?>"><a href="index.php?m=sicer">SICER</a></li>
                        <li><a href="http://24.173.218.108/consultasaduanales/login.aspx" target="_blank">Enlace SLAM</a></li>
                    </ul>
                </li>
                <li class="<?php if (@$_GET['m'] == "contacto") echo 'active'; ?>"><a href="index.php?m=contacto">Contacto</a></li>
            </ul>

            <div class="col-xs-12 hidden-sm hidden-md hidden-lg text-left">
                <select onchange="window.top.location=this.value" class="form-control">
                        <option>Menu</option>
                        <option value="/index.php" <?php if (!isset($_GET['m'])) echo 'selected'; ?>>Inicio</option>
                        <option value="index.php?m=nosotros" <?php if (@$_GET['m'] == "nosotros") echo 'selected'; ?>>Nosotros</option>
                        <optgroup label="Nuestras Ediciones">
                            <option value="index.php?m=impresa" <?php if (@$_GET['m'] == "impresa") echo 'selected'; ?>> &nbsp;&nbsp;&gt; Tarifa Impresa</option>
                            <option value="index.php?m=online" <?php if (@$_GET['m'] == "online") echo 'selected'; ?>> &nbsp;&nbsp;&gt; Tarifa En Lin&eacute;a</option>
                         </optgroup>
                        <option value="index.php?m=sicer" <?php if (@$_GET['m'] == "sicer") echo 'selected'; ?>>Acceso a Clientes</option>
                        <optgroup label="Tarifa">
                            <option value="index.php?m=sicer" <?php if (@$_GET['m'] == "sicer") echo 'selected'; ?>> &nbsp;&nbsp;&gt; SICER</option>
                            <option value="http://24.173.218.108/consultasaduanales/login.aspx"> &nbsp;&nbsp;&gt; Enlace SLAM</option>
                        </optgroup>
                        <option value="index.php?m=contacto" <?php if (@$_GET['m'] == "contacto") echo 'selected'; ?>>Contacto</option>
                </select>
            </div>
            
        </div>
    </nav>
</header>
<?php
if (!isset($_GET['m'])){
?>
    <div class="slider">  
        <div class="camera_wrap">
            <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture1.jpg"><div class="camera-caption fadeIn"><p class="title">LEY DEL IMPUESTO GENERAL DE IMPORTACION Y EXPORTACION <br>Ley de los Impuestos Generales de Importación y de Exportación u otra <br>disposición u ordenamiento que la establezca o altere.</p></div></div>
            <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture2.jpg"><div class="camera-caption fadeIn"><p class="title">NOTAS LEGALES Y EXPLICATIVAS <br>Se presenta el tratamiento arancelario aplicable a la importacion de mercancias al Amparo <br>de los tratados y convenios comerciales suscritos por Mexico en el Exterior.</p></div></div>
            <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture3.jpg"><div class="camera-caption fadeIn"><p class="title">COMPENDIO DE COMERCIO EXTERIOR <br> Abreviaturas e índice temático Ley aduanera Reglamento de la ley aduanera Ley federal de derechos (artículos relacionados) <br>Reglas de carácter general en materia de comercio exterior Anexo glosario de definiciones y acrónimos de reglas de carácter general en materia de comercio exterior para 2012.</p></div></div>
        </div>
    </div>
<?php
}
?>

<!--content-->
<div class="content <?php if (isset($_GET['m'])) echo "indent"; ?>">
    <?php include $paginPHP; ?>
    <br><br>
</div>

<!--footer-->
<footer>
    <div class="tools-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Manejo de Ediciones Impresas</p>
                        <ul class="list1-1">
                            <li><a href="#"></a>Ley del Impuesto General de Importacion</li>
                            <li><a href="#"></a>Notas Explicativas</li>
                            <li><a href="#"></a>Compendio de Comercio Exterior</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Direcci&oacute;n y Contacto</p>
                        <p>INDEPENDENCIA #3335 <br> SECTOR CENTRO <br>TELS: (867) 712-34-48 <br>(867) 196-35-27 <br>Departamento de Ventas:<br><a href="#">marthaeva@consultasaduanales.com.mx</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                    <div class="indent maxheight3">
                        <p class="title">CONSULTAS ADUANALES DE NUEVO LAREDO, S.A. DE C.V.</p>
                        <p class="text-center">
                            <br>
                            <a href="http://nuevolaredo.f403.mx" target="_blank">Desarrollo por F403 Nuevo Laredo</a>
                        </p>
                    </div>
                </div>
                <div class="hidden-lg hidden-md col-sm-12 col-xs-21 ">
                    <br>
                    <h4 style="color:white;"> CONSULTAS ADUANALES DE NUEVO LAREDO, S.A. DE C.V.</h4>
                    <a href="http://nuevolaredo.f403.mx" target="_blank" style="color:white;">Desarrollo por F403 Nuevo Laredo</a>
                </div>
            </div>
        </div>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/superfish.js"></script>
</body>
</html>