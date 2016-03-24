
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
            <h2>Atención Psicológica</h2>
          </div>

          
       <div class="row">
        <div class="grid_12">

            <h2>
           <h2><span>Objetivo:</span></h2></a>
           <h2><span class="light">Empoderar a las mujeres víctimas de violencia para que tomen conciencia de su situación real y de los recursos personales disponibles, con el fin de potenciar su asertividad en la toma de decisiones, para que lleven una vida plena y productiva en todos los ámbitos.</span></h2></a>
           <br>
           <h2><span class="light">- Sesiones de terapia psicológica a cargo de las psicólogas del IMM</span></h2></a>
           <br>
           <h2><span class="light">- Reuniones del grupo de apoyo de mujeres co-dependientes</span></h2></a>
            <br>
           <h2><span class="light">- Reunión del grupo de apoyo de manejo de la ira para hombres con problema de violencia</span></h2></a>
<br>
<br>
           <h2><span class="light">La atención psicológica en el IMM (Instituto Municipal de la Mujer de Nuevo Laredo) es brindada por especialistas y consiste en facilitar a las mujeres que acuden en busca de ayuda la explicación y comprensión de la situación violenta vivida, apoyándolas y apoyarlas a través de procesos psicoterapéuticos en la recuperación de la confianza en sí mismas, trabajando en los sentimientos de estigmatización, culpa, vergüenza e impotencia, así como con el daño emocional de las personas con las que convive diariamente.
</span></h2></a>
<br>
           <h2><span class="light">Este tipo de atención psicológica de las mujeres promueve en las mujeres víctimas de violencia, la toma de conciencia de su situación real y de sus recursos personales disponibles además de los obstáculos que enfrenta para salir de la situación de violencia con la finalidad de potenciar su capacidad asertiva en la toma de decisiones que le permita llevar una vida plena y productiva a nivel, familiar, social y laboral.</span></h2></a>
<br>
           <h2><span>Creación del Grupo Mujeres Co-Dependientes</span></h2></a>
           <h2><span class="light">El grupo de apoyo de Mujeres Co-Dependientes inicia para brindar ayuda y apoyo. La adicción a la codependencia, afecta en gran medida a mujeres que entienden el amor como una necesidad existencial, lo dan todo, lo aguantan todo. No piden, pero esperan mucho.</span></h2></a>
<br>
<h2><span>Creación del Grupo Manejo de la Ira </span></h2></a>
           <h2><span class="light">La ira es un estado emocional que varía en intensidad, yendo de la irritación leve a la furia intensa. Cuando está fuera de control y se vuelve destructiva, puede conducir a diversos problemas, como problemas en el trabajo, en las relaciones personales y en la calidad general de la vida de una persona. El objetivo del Instituto es ayudar a todos los hombres a controlar sus reacciones y vivir en armonía.</span></h2></a>

           

  
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