<?php
@session_start();

if ( !isset($_SESSION['userId']) ){
	header("Location: index.php");
	die;
}

include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* clientes */
		case "cartera":
			$paginaPHP = "php/cartera.php";
		break;
		case "carteraAgregar":
			$paginaPHP = "php/carteraAgregar.php";
		break;
		case "carteraEditar":
			$paginaPHP = "php/carteraEditar.php";
		break;
		case "grupo":
			$paginaPHP = "php/grupo.php";
		break;
		case "control":
			$paginaPHP = "php/control.php";
		break;
		case "materias":
			$paginaPHP = "php/materias.php";
		break;

		case "sa":
			$paginaPHP = "php/sa.php";
		break;
		case "saAgregar":
			$paginaPHP = "php/saAgregar.php";
		break;
		case "saEditar":
			$paginaPHP = "php/saEditar.php";
		break;
		case "ingresos":
			$paginaPHP = "php/ingresos.php";
		break;
		case "ingresosAgregar":
			$paginaPHP = "php/ingresosAgregar.php";
		break;
		case "ingresosEditar":
			$paginaPHP = "php/ingresosEditar.php";
		break;
		case "cxp":
			$paginaPHP = "php/cxp.php";
		break;
		case "cxpAgregar":
			$paginaPHP = "php/cxpAgregar.php";
		break;
		case "cxpEditar":
			$paginaPHP = "php/cxpEditar.php";
		break;
		case "asist":
			$paginaPHP = "php/asist.php";
		break;
		case "asistAgregar":
			$paginaPHP = "php/asistAgregar.php";
		break;
		case "asistEditar":
			$paginaPHP = "php/asistEditar.php";
		break;
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

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> 
<meta charset="utf-8" />
<title>Anglo Español</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav, anglo, espanol, instituto anglo espanol" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
 <!-- Plugin CSS  -->
 
   <!--  Admin Forms CSS -->
<link rel="stylesheet" type="text/css" href="css/admin-forms.css">
<script src="js/app.v1.js"></script>
<script src="js/listadoAlumnos.js"></script>

<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-blue dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" href="admin.php"> <i class="fa fa-home"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">Anglo Español</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li><a class="btn btn-link" href="admin.php"> <i class="fa fa-home"></i> </a></li>
<?php
			if ($_SESSION['userPv'] != "3"){
?>				<li><a class="btn btn-link" href="admin.php?m= "> <i class="fa fa-users"></i> </a></li>
				<li><a class="btn btn-link" href="admin.php?m=ventas"> <i class="fa fa-usd"></i> </a></li>
				<li><a class="btn btn-link" href="admin.php?m=stock"> <i class="fa fa-file-text"></i> </a></li>
				<li><a class="btn btn-link" href="admin.php?m=usuarios"> <i class="fa fa-plus-square"></i> </a></li>
<?php
			}
?>
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
			<section class="hbox stretch bg">
				<!-- .aside -->
				<aside class="bg-white lter aside-md hidden-print hidden-xs" id="nav">
					<section class="vbox">
						<section class="w-f scrollable"> 
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 540px;">
								<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333" style="overflow: hidden; width: auto; height: 540px;"> <!-- nav --> 
									<nav class="nav-primary hidden-xs"> 
										<ul class="nav"> 
											<li class=""> 
												<a href="admin.php?m=cartera" class="active"> <i class="fa fa-users icon"> <b class="bg-danger"></b> </i> 
													<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="text-active"></i> </span> 
													<span>Cartera de Alumnos</span> 
												</a> 
											</li> 
											<li> 
												<a href="admin.php?m=seguimientoAcademico"> <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> 
													<span class="pull-right"> <i class="text"></i> <i class="fa fa-angle-up text-active"></i> </span> 
													<span>Seg. Academico</span> 
												</a> 
											</li> 
											<li> 
												<a href="admin.php?m=ventas"> <i class="fa fa-usd icon"> <b class="bg-success"></b> </i> 
												<span class="pull-right"> <i class="text"></i> <i class="fa fa-angle-up text-active"></i> </span> 
												<span>Ingresos</span> </a> 
											</li> 
											<li> <a href="admin.php?m=proveedores"> <i class="fa fa-tags icon"> <b class="bg-info"></b> </i> <span>Cuentas x Pagar</span> </a> </li> 
											<li> <a href="admin.php?m=stock"> <i class="fa fa-file-text icon"> <b class="bg-primary"></b> </i> <span>Asist. Academica</span> </a> </li> 
											<li> <a href="admin.php?m=control"> <i class="fa fa-book icon"> <b class="bg-danger"></b> </i> <span>Control Escolar</span> </a> </li> 
											<li> <a href="admin.php?m=usuarios"> <i class="fa fa-plus-square icon"> <b class="bg-warning"></b> </i> <span>Usuarios</span> </a> </li> 
										</ul> 
									</nav> <!-- / nav --> 
								</div>
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
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	
	<script src="js/app.plugin.js"></script>
</body>
</html>