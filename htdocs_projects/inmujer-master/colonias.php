
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
            <h2>Mujeres en Colonias</h2>
          </div>
          <br>
           <br>

           <h2><span class="light">Es un hecho demostrado que la desigualdad se acentúa con la pobreza.</span></h2>
<br>
            <h2><span class="light">Por ello mediante conferencias, pláticas y talleres de igualdad de género, el Instituto de la Mujer pretende empoderar a las mujeres y modificar arraigados patrones culturales, sociales y políticos.</span></h2>
                  </h2>

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