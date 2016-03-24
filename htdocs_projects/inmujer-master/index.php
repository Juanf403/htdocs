
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
              <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a href="#"><i class="fa fa-twitter"></i></a></li>
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
<div class="row">
  <div class="slider-wrapper">
    <div id="camera_wrap">
      <div data-src="images/slider1.jpg">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="holder">
              <div class="grid_12">
                <span class="first">Imparte Inmujer platicas en Hospitales</span>
                <span class="second">sobre la NOM46</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div data-src="images/slider2.jpg">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <span class="first">Avanza Proyecto de Transversalidad</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-src="images/slider3.jpg">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <span class="first">Nuevo Laredo destaca</span>
                <span class="second">en perspectiva de Genero</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-src="images/slider4.jpg">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <span class="first">Asociacion Nuestras Manos realizara</span>
                <span class="second">convenio de colaboracion con Inmujer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="wrapper1">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="box1-wrapper1">
            <div class="row">
              <div class="grid_4">
                <div class="box1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                  <img src="images/asesorias.jpg" alt=""/>
                  <div class="content content__inset1 maxheight">
                    <h4>
                      <a href="#">ASESORÍA<span class="light">LEGAL</span></a>
                    </h4>
                    <p>Promover el acceso a la justicia y salvaguardar la integridad y los derechos de las mujeres víctimas de violencia, asi como de sus hijos e hijas.</p>
                  </div>
                </div>
              </div>

              <div class="grid_4">
                <div class="box1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <img src="images/transversalidad.jpg" alt=""/>
                  <div class="content content__inset2 maxheight">
                    <h4>
                      <a href="#">TRANSVERSALIDAD<span class="light"></span></a>
                    </h4>
                    <p>Es la estrategia mediante la cual se pretende incorporar la perspectiva de género en las diversas instancias y ordenes de gobierno, mediante talleres, cursos y pláticas de sensibilización.</p>
                  </div>
                </div>
              </div>

              <div class="grid_4">
                <div class="box1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <img src="images/terapia.jpg" alt=""/>
                  <div class="content content__inset3 maxheight">
                    <h4>
                      <a href="#">TERAPIA<br><span>PSICOLOGICA</span></a>
                    </h4>
                    <p>Empoderar a las mujeres victimas de violencia para que tomen conciencia de su situación real y de los recursos personales disponibles, con el fin de potenciar su asertividad en la toma de decisiones, para que lleven una vida plena y productiva en todos los ámbitos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2>Noticias</h2>
          </div>
          

              <div class="grid_12">
                <a class="btn-big wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" href="noticias.php">Ver Mas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper3">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h5>Editoriales</h5>
          </div>
          <div class="box3-wrapper1">
            <div class="row">
              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                  <img src="images/Yuriria.png" alt=""/>
                  <h3>
                    <a href="#">Yuriria Sierra</a>
                  </h3>
                  <p>15/09/2014 - Algunas historias de gays</p>
                  <p>08/09/2014 - Hipotéticamente es Hillary</p>
                </div>
              </div>

              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <img src="images/DeniseDresser.jpg" alt=""/>
                  <h3>
                    <a href="#">Denise Dresser</a>
                  </h3>
                  <p>22/06/2015 - Elección Alka-Seltzer </p>
                  <p>03/09/2014 - Pintándonos solas</p>
                </div>
              </div>

              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <img src="images/LydiaCacho.jpg" alt=""/>
                  <h3>
                    <a href="#">Lydia Cacho</a>
                  </h3>
                  <p>13/05/2014 - Desde la cima del poder</p>
                  <p>15/04/2014 - Prostitución del PRI</p>
                  <p>15/04/2014 - Nuevas castas mexicanas</p>
                  <p>15/04/2014 - La mujer que vendía mujeres</p>
                </div>
              </div>

              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <img src="images/guadalupe.jpg" alt=""/>
                  <h3>
                    <a href="#">Guadalupe Loaeza</a>
                  </h3>
                  <p>08/07/2015 - Carta a un genio</p>
                  <p>01/07/2015 - Mis Díaz</p>
                  <p>19/06/2015 - El destape de Sofía</p>
                  <p>08/06/2015 - Voto, luego existo</p>
                  <p>25/11/2014 - Para Diego</p>
                  <p>03/09/2014 - Hijos de político</p>
                  <p>15/04/2014 - La Doña y el poeta</p>
                  <p>15/04/2014 - Las mujeres de Paz</p>
                </div>
              </div>
            </div>
            <div class="grid_12">
                <a class="btn-big wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" href="editoriales.php">Ver Mas</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper4">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2>Providing the best of care</h2>
          </div>
          <div class="row">
            <div class="list1-wrapper1">
              <div class="grid_4">
                <ul class="list1">
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <a href="#">Lorem ipsum</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">Dolor sit amet</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a href="#">Conse ctetur</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#">Adipisicing</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="#">Elit sed do eiusmod</a>
                  </li>
                </ul>
              </div>
              <div class="grid_4">
                <ul class="list1">
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <a href="#">Tempor</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">Incididunt ut</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a href="#">Labore</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#">Et dolore magna</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="#">Ut enim</a>
                  </li>
                </ul>
              </div>
              <div class="grid_4">
                <ul class="list1">
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <a href="#">Ad minim veniam</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">Quis nostrud</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a href="#">Exercitation</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#">Ullamco laboris nisi</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="#">Ut aliqu</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>


<!--========================================================
                          FOOTER
=========================================================-->


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