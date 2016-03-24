<?php
@session_start();

#if ( !isset($_SESSION['userId']) ){
#	header("Location: index.php");
#	die;
#}

#include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* clientes */
		case "clientes":
			$paginaPHP = "php/clientes.php";
		break;
		case "resultados":
			/*$paginaPHP = "php/consulta.php";*/
			$paginaPHP = "php/imagenes.php";
		break;
		case "consulta":
			$paginaPHP = "php/consulta.php";
		break;
	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>MEDIA GRID |</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="css/dropzone.css" rel="stylesheet">
<link href="css/fonts/fontawesome-webfont.ttf">
<link href="css/fonts/lcweb-media.ttf">
<link href="css/fonts/font-awesome.woff">
<link href="css/fonts/lcweb-media.woff ">
<link href="css/fonts/font-awesome.ttf">
<link href="css/fonts/fontawesome-webfont.ttf">
<style>
#btn-up{
	background-color: #65BD77;
}
</style>




<!--Summernote [ OPTIONAL ]-->
	<link href="css/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="js/fuelux.css" type="text/css">
<script src="js/app.v1.js"></script>

<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">



			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">Media Grid</a>

				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar_default.jpg"> </span> admin <b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>

				<div class="row wrapper">
			      <div class="col-xs-12">
			        <div class="input-group">
			          <input type="text" class="input-sm form-control" placeholder="Buscar">
			          <br>
			          <span class="input-group-btn"> 
			            <button class="btn btn-sm btn-default" type="button" href="#"> <i class="fa fa-search"></i> </button>
			        </span>
			        <span>
			            <button  id="btn-up" class="btn btn-sm btn-default" id="btn-1" href="#btn-1" data-toggle="class:btn-success"> 
			      		<i class="fa fa-upload text"></i> <span class="text">&nbsp; Upload</span> 
			      		<i class="fa fa-check text-active"></i> <span class="text-active">&nbsp; Success</span> 
			      	</button>
			          </span>
			        </div>
			      </div> 
			    </div> 
		</header>
		<section>
			<section class="hbox stretch">
				<section id="content">
					<section class="vbox">
						<!--<header class="header bg-white b-b b-light"> <p>Layout with black color</p> </header>-->
						<section class="scrollable wrapper w-f">
							<?php include $paginaPHP; ?>
						</section>
						<footer class="footer bg-white b-t b-light text-right">
							<p><a href="http://nuevolaredo.f403.mx">F403.MX Nuevo Laredo</a></p>
						</footer>
					</section>
					<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
				</section>
			</section>
		</section>
	</section>
	

	<!--Dropzone [ OPTIONAL ]-->
	<script src="js/dropzone.min.js"></script>
	<!--Summernote [ OPTIONAL ]-->
	<script src="js/summernote.min.js"></script>
	<!--<script src="js/app.v1.js"></script>-->
	<script src="js/fuelux.js"></script>
	<script src="js/parsley.min.js"></script>
	<!--<script src="js/app.plugin.js"></script>-->
</body>
</html>