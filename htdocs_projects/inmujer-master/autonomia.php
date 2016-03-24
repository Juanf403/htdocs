
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/camera.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/camera.js"></script>
  <script src="js/search.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="js/jquery.mobile.customized.min.js"></script>
  <script src="js/wow.js"></script>
  <script>
    $(document).ready(function () {
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->
  <script>
    $(document).ready(function () {
      $('#camera_wrap').camera({
        loader: true,
        pagination: false,
        minHeight: '',
        thumbnails: false,
        height: '31.70731707317073%',
        caption: true,
        navigation: true,
        fx: 'simpleFade',
        onLoaded: function () {
          $('.slider-wrapper')[0].style.height = 'auto';
        }
      });

      var map;
      function initialize() {
        var mapOptions = {
          zoom: 12,
          scrollwheel: false,
          center: new google.maps.LatLng(40.659383, -73.926059),
          mapTypeControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
          }
        };
        map = new google.maps.Map(document.getElementById('google-map'),
                mapOptions);
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(40.635,-73.926059),
          map: map,
          title:"Maternity Hospital",
          icon: "images/marker.png",
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    });
  </script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
    <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
      <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
    </map>
  </div>
  <![endif]-->
</head>


<body>
<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="info">
          <div class="row">
            <div class="grid_6">
              
                <a href="">
                  <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="grid_6">
              <div class="phone wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <span class="first">Llamanos:</span>
                <address>01-800-Hablalo</address>
                <address>075-UNEVIG</address>
                <address>867-713-52-81</address>
<!--                 <p>Lorem ipsum dolor sit amet conse ctetur<br> adipisicing elit, sed do eiusmod.</p> -->
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_9">
          <nav>
            <ul class="sf-menu">
              <li class="current"><a href="index.php">Inicio</a></li>
              <li><a href="identidad.php">Identidad</a></li>
              <li><a href="transparencia.php">Transparencia</a></li>
              <li><a href="programas.php">Programas</a>
                <ul>
                  <li><a href="atencion.php">Terapia Psicologica</a></li>
                  <li><a href="asesoria.php">Asesoria Legal</a>
                    <li><a href="talleres.php">Talleres</a></li>
                  <li><a href="capacitacion.php">Capacitacion</a></li>
                </ul>
              </li>
                      <li><a href="noticias.php">Noticias</a></li>
                      <li><a href="editoriales.php">Editoriales</a></li>
                      <li><a href="galeria.php">Galeria</a></li>
                      <li><a href="contacto.php">Contacto</a></li>
                      
          </li>    
            </ul>
            <div class="socials">
            <ul class="socials1"> &nbsp;
              <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s"><a href="https://www.facebook.com/Inmujernl?pnref=lhc"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a href="https://twitter.com/Immujernl"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div> 
          </ul>
            <div class="clearfix"></div>
          </nav>
        </div>
        <div class="grid_3">
          <form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            <input type="text" name="s"/>
            <a onclick="document.getElementById('search').submit()">
              <div class="search_icon"></div>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>




<!--========================================================
                          CONTENT
=========================================================-->
<section id="content">

  <div class="wrapper2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2>Nuestra Identidad</h2>
          </div>
          <div class="box2-wrapper1">
            <div class="row">
              <div class="grid_4">
                <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                  <h3 class="h3__inset1">
                    <a href="#">Misión</a>
                  </h3>
                  <p>Diseñar, fomentar y ejecutar las políticas públicas municipales que propicien la igualdad de oportunidades, la no discriminación, la equidad de género, de toma de decisiones y de los beneficios del desarrollo en los ámbitos; familiar, social, cultural, económico y político así como promover el ejercicio pleno de los derechos de las mujeres.</p>
                </div>
              </div>

              <div class="grid_4">
                <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <h3 class="h3__inset2">
                    <a href="#">Visión</a>
                  </h3>
                  <p>Eliminar toda forma de discriminación hacia las mujeres en los ámbitos público, privado y social, para garantizar la igualdad, la equidad y el acceso a los beneficios del desarrollo.</p>
                </div>
              </div>

              <div class="grid_4">
                <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <h3 class="h3__inset3">
                    <a href="#">Objetivo General</a>
                  </h3>
                  <p>Promover y fomentar las condiciones que posibiliten la igualdad de oportunidades, la no discriminación, la equidad, la participación de las mujeres en la toma de decisiones y el ejercicio pleno de los derechos de las mujeres así como erradicar la violencia de genero.</p>
                </div>
              </div>
       
       <div class="row">
        <div class="grid_12">
          <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
    <br>
    <br>
            <h2>
           <a href="#">Valores Institucionales</a>
           <br>
           <br>

           <span class="light">Autonomía </span></h2>
                  </h2>
                  <p>Consiste en el actuar o regirse por uno mismo de acuerdo con principios o normas que hemos elegido libremente y que podemos justificar. Etimológicamente, significa darse una ley a uno mismo. Es autónomo quien se pone limites a si mismo y no el que hace cualquier cosa por si mismo, sin poderla justificar como correcta o adecuada.</p> 
          <br>
          <h2><span class="light"> Transparencia</span></h2>
                  </h2>
                  <p>Entendida como la practica social - guiada por la sinceridad - en la que se responde a la obligación de dar cuenta a la ciudadanía de todos nuestros actos, especialmente del uso del dinero publico y prevenir así los casos de corrupción. </p> 
          <br>
          <h2><span class="light"> Rendición de cuentas</span></h2>
                  </h2>
                  <p>La Rendición de Cuentas, consiste en informar y explicar a los ciudadanos las acciones realizadas por el Instituto, de manera transparente y clara para dar a conocer sus estructuras y funcionamiento, y por consecuencia, ser sujeto de la opinión publica.</p> 
         <br>
         <h2><span class="light"> Eficiencia</span></h2>
                  </h2>
                  <p>Reconocida como la capacidad de disponer los recursos necesarios, para conseguir un objetivo especifico, con el mínimo de recursos posible viable. </p> 
          <br>
          <h2><span class="light"> Etica profesional </span></h2>
                  </h2>
                  <p>Se trata del estudio de la moral y del accionar humano para promover los comportamientos deseables. Es actuar con responsabilidad, siguiendo los requisitos que la ley vigente</p> 
          </div>
        </div>
      </div>

  
</section>



<script src="js/script.js"></script>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body>
</html>