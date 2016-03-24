<?php

if ( isset($_GET['m']) ){
  switch ($_GET['m']) {
    case "publicacion":
      $paginaPHP = "php/publicacion.php";
    break;
    case "perfil":
      $paginaPHP = "php/perfil.php";
    break;
    case "categorias":
      if ( isset($_GET['id']) ){
        $paginaPHP = "php/categoriasId.php";
      } else {
        $paginaPHP = "php/categorias.php";  
      }
    break;
    case "favoritos":
      $paginaPHP = "php/favoritos.php";
    break;
    case "configuracion":
      #$paginaPHP = "php/configuracionUsuario.php";
      $paginaPHP = "php/configuracionNegocio.php";
    break;

    case "registro":
      $paginaPHP = "php/registro.php";
    break;
  }
} else {
  $paginaPHP = "php/index.php";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>CHECKCITY</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style type="text/css">

.navbar-default{
	background:#EC2557;
}
.navbar-default .navbar-toggle .icon-bar{
	background: white;
}
.navbar-brand{
	color:white;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
	color:#EC2557;	
}
.navbar-default .navbar-nav>li>a{
	color:white;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a{
	background: white;
}
</style>
</head>
<body>

	<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png" style="height:30px;width:225px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          	<ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg">
	          	<li>
	          		<div class="col-md-12">
		          		<form method="get" action="">
		          			<div class="form-group">
		          				<input type="text" class="form-control" data-action="grow" placeholder="Buscar">
		          			</div>
		          		</form>
		          	</div>
	          	</li>
	            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
	            <li><a href="index.php?m=categorias"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Categorias</a></li>
	            <li><a href="index.php?m=favoritos"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos</a></li>
	            <li><a href="index.php?m=configuracion"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configuraci&oacute;n</a></li>
          	</ul>

          	<form class="navbar-form navbar-right hidden-xs">
	            <div class="form-group">
	              <input type="text" placeholder="Buscar..." class="form-control">
	            </div>
	            <button type="submit" class="btn btn-default">Buscar</button>
          	</form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    	<br><br><br><br>
      <div class="row">
        <div class="hidden-xs col-sm-3 col-md-3">
          <ul class="list-group">
            <a href="index.php" class="list-group-item"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio </a>
            <a href="index.php?m=categorias" class="list-group-item"> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Categorias </a>
            <a href="index.php?m=favoritos" class="list-group-item"> <span class="badge">14</span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos </a>
            <a href="index.php?m=configuracion" class="list-group-item"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configuraci&oacute;n </a>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-6">
          <?php include $paginaPHP; ?>
        </div>
      <div class="hidden-xs hidden-sm col-md-3"></div>
    </div>
  </div>

</body>
</html>