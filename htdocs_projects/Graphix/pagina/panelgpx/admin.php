<?php
@session_start();

if ( !isset($_SESSION['userId']) ){
	header("Location: index.php");
	die;
}

include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* pagina web */
		case "sliders":
			$paginaPHP = "php/sliders.php";
		break;
		case "slidersAgregar":
			$paginaPHP = "php/slidersAgregar.php";
		break;

		case "galeria":
			$paginaPHP = "php/galeria.php";
		break;
		case "galeriaAgregar":
			$paginaPHP = "php/galeriaAgregar.php";
		break;
		case "galeriaEditar":
			$paginaPHP = "php/galeriaEditar.php";
		break;


		/* usuarios */
		case "usuarios":
			$paginaPHP = "php/usuarios.php";
		break;
		case "usuariosAgregar":
			$paginaPHP = "php/usuariosAgregar.php";
			break;
		case "usuariosEditar":
			$paginaPHP = "php/usuariosEditar.php";
		break;

	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";

/* 
pendientes: 
	* falta paginador clientes.php
	
	para ustedes
		acomodar forma clientesAgregar.php y clientesEditar.php
		poner fecha actual desde el php

*/
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>FORBIDDEN 403</title>
<meta name="description" content="Forbidden 403 Nuevo Laredo" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/font.css" type="text/css" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="css/magicsuggest-min.css" >
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker-bs3.css" />
<link rel="stylesheet" type="text/css" href="css/dropzone.css">

<script src="js/app.v1.js"></script>
<script src="js/dropzone.js"></script>
<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
<style type="text/css">
	.bg-f403{
		background:rgb(247, 61, 80);
		color:white;
	}
</style>
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" href="admin.php"> <i class="fa fa-home"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">Graphix</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li><a class="btn btn-link" href="admin.php"> <i class="fa fa-home"></i> </a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar_default.jpg"> </span> <?php echo $_SESSION['userNm']; ?><b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>
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

	<!-- Bootstrap -->
	<!-- App -->
	<script src="js/app.plugin.js"></script>
	<script src="js/magicsuggest-min.js"></script>

	<!-- daterangepicker -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/2.9.0/moment.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker.js"></script>

<script type="text/javascript">
	$(function(){
		$("div#dropzone").dropzone({ url: "php/upload.php" });

		$('input[name="daterange"]').daterangepicker({
        	format: 'YYYY-MM-DD',
        	locale: {
            	applyLabel: 'Buscar',
        	    cancelLabel: 'Cancelar',
    	        fromLabel: 'De',
	            toLabel: 'A',
            	customRangeLabel: 'Custom',
        	    daysOfWeek: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vie','Sa'],
    	        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        	}
    	});
    	$('#daterange').on('apply.daterangepicker', function(ev, picker) {
  			$("#reportesForm").submit();
		});
	});
</script>
</body>
</html>