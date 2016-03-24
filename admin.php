<?php
@session_start();
date_default_timezone_set("America/Mexico_City");

if ( !isset($_SESSION['userId']) ){
	header("Location: index.php");
	die;
}
include 'db.php';

if ( isset($_GET['m']) ){
	switch ($_GET['m']) {

		/* tareas */ 
		case "tareas":
			$paginaPHP = "php/tareas.php";
		break;
		case "tareasAgregar":
			$paginaPHP = "php/tareasAgregar.php";
		break;
		case "tareasEditar":
			$paginaPHP = "php/tareasEditar.php";
		break;

		/* citas */
		case "citas":
			$paginaPHP = "php/citas.php";
		break;
		case "citasAgregar":
			$paginaPHP = "php/citasAgregar.php";
		break;
		case "citasEditar":
			$paginaPHP = "php/citasEditar.php";
		break;

		/* clientes */
		case "clientes":
			$paginaPHP = "php/clientes.php";
		break;
		case "clientesAgregar":
			$paginaPHP = "php/clientesAgregar.php";
		break;
		case "clientesEditar":
			$paginaPHP = "php/clientesEditar.php";
		break;

		/* gastos */ 
		case "gastos":
			$paginaPHP = "php/gastos.php";
		break;
		case "gastosAgregar":
			$paginaPHP = "php/gastosAgregar.php";
		break;
		case "gastosEditar":
			$paginaPHP = "php/gastosEditar.php";
		break;

		/* bocetos */ 
		case "bocetos":
			$paginaPHP = "php/bocetos.php";
		break;
		case "bocetosAgregar":
			$paginaPHP = "php/bocetosAgregar.php";
		break;

		/* cotizaciones */
		case "cotizaciones":
			$paginaPHP = "php/cotizaciones.php";
		break;
		case "cotizacionesAgregar":
			$paginaPHP = "php/cotizacionesAgregar.php";
		break;
		case "cotizacionesEditar":
			$paginaPHP = "php/cotizacionesEditar.php";
		break;

		/* ventas */
		case "ventas":
			$paginaPHP = "php/ventas.php";
		break;
		case "ventasAgregar":
			$paginaPHP = "php/ventasAgregar.php";
		break;
		case "ventasEditar":
			$paginaPHP = "php/ventasEditar.php";
		break;

		/* contratos */
		case "contratos":
			$paginaPHP = "php/contratos.php";
		break;
		case "contratosAgregar":
			$paginaPHP = "php/contratosAgregar.php";
		break;
		case "contratosEditar":
			$paginaPHP = "php/contratosEditar.php";
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
		case "usuariosModificar":
			$paginaPHP = "php/usuariosModificar.php";
		break;

		case "config":
			$paginaPHP = "php/config.php";
		break;
		case "soporteAgregar":
			$paginaPHP ="php/soporteAgregar.php";
		break;
		case "vistaTickets":
			$paginaPHP = "php/vistaTickets.php";
		break;
		case "solicitudesEditar":
			$paginaPHP = "php/solicitudesEditar.php";
			break;
		//Calendario
		case "calendario":
			$paginaPHP = "php/fullcalendar.php";
		break;

		
	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";
$cs  = mysql_num_rows(mysql_query("SELECT * FROM solicitud WHERE StatusPeticion='Pendiente'"));
if ( $_SESSION['userTp'] == "Administrador" ){
	$cT  = mysql_num_rows(mysql_query("SELECT * FROM tareas WHERE estado='Pendiente' ORDER BY idtareas DESC"));
} else {
	$cT  = mysql_num_rows(mysql_query("SELECT * FROM tareas WHERE idasignado='".$_SESSION['userId']."' AND estado='Pendiente' ORDER BY idtareas DESC"));
}
?>

<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>FORBIDDEN 403</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/font.css" type="text/css" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="css/fileinput.css" type="text/css" />
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
<script src="js/fileinput.min.js"></script>
<!--[if lt IE 9]>
<script src="http://flatfull.com/themes/note/js/ie/html5shiv.js"></script>
<script src="http://flatfull.com/themes/note/js/ie/respond.min.js"></script>
<script src="http://flatfull.com/themes/note/js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">F403.MX</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="http://flatfull.com/themes/note/images/avatar_default.jpg"> </span> <?php echo $_SESSION['userNm']; ?> <b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li><a href="admin.php?m=usuariosModificar&id=<?php echo $_SESSION['userId'];?>">Configuracion</a></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>
		</header>
		<section>
			<section class="hbox stretch">
				<!-- .aside -->
				<aside class="bg-black lter aside-md hidden-print hidden-xs" id="nav">
					<section class="vbox">
						<section class="w-f scrollable">
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
								<!-- nav -->
								<nav class="nav-primary hidden-xs">
									<ul class="nav">
										<!--<li> <a href="admin.php?m=citas"> <i class="fa fa-angle-right"></i> <span>Citas</span> </a> </li>-->
										<li> <a href="admin.php?m=tareas"> <i class="fa fa-angle-right"></i> <b class="badge bg-danger pull-right"><?php echo $cT; ?></b><span>Tareas</span> </a> </li>
<?php
									if ( $_SESSION['userTp'] == "Administrador"  || $_SESSION['userTp'] == "Programador"){
?>
										<li> <a href="admin.php?m=bocetos"> <i class="fa fa-angle-right"></i> <span>Bocetos</span> </a> </li>
										<li> <a href="admin.php?m=vistaTickets"> <i class="fa fa-angle-right"></i><span class="badge bg-danger pull-right" id="solicitudes"><?php echo $cs ; ?></span> <span>Tickets</span> </a> </li>
<?php
									}
									if ($_SESSION['userTp']== "Administrador") {
										
									
?>										<li> <a href="admin.php?m=clientes"> <i class="fa fa-angle-right"></i> <span>Clientes</span> </a> </li>

										<li> <a href="admin.php?m=ventas"> <i class="fa fa-angle-right"></i> <span>Ventas</span> </a> </li>

										<li> <a href="admin.php?m=gastos"> <i class="fa fa-angle-right"></i> <span>Gastos</span> </a> </li>

										<li> <a href="admin.php?m=usuarios"> <i class="fa fa-angle-right"></i> <span>Usuarios</span> </a> </li>

										<li> <a href="admin.php?m=calendario"> <i class="fa fa-angle-right"></i> <span>Calendario</span> </a> </li>
							<?php 
							}
							 ?>
										
																				<!--<li> <a href="admin.php?m=contratos"> <i class="fa fa-angle-right"></i> <span>Contratos</span> </a> </li>
										<li class="">
											<a href="#webpage" class=""><i class="fa fa-angle-right icon"></i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Reportes</span> </a>
											<ul class="nav lt" style="display: none;">
												<li> <a href="admin.php?m=blog"> <i class="fa fa-angle-right"></i> <span>Ingresos</span> </a> </li>
											</ul>
										</li>-->
									</ul>
								</nav>
								<!-- / nav -->
							</div>
						</section>
					</section>
				</aside>
				<!-- /.aside -->
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
</body>
</html>