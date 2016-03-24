<?php

if ( isset($_POST['nombre']) ){

	$categoria 	= mysql_real_escape_string($_POST['categoria']);
	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$contacto  	= mysql_real_escape_string($_POST['contacto']);
	$correo  	= mysql_real_escape_string($_POST['correo']);
	$rfc  		= mysql_real_escape_string($_POST['rfc']);

	if ( mysql_query("INSERT INTO clientes SET fecha='".date("Y-m-d")."',categoria='".$categoria."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',contacto='".$contacto."',email='".$correo."',rfc='".$rfc."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-4">
								<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Direccion</th>
					<th>Correo</th>
					<th width="200">Telefono</th>
					<th width="140"></th>
				</tr>
			</thead>
			<tbody border=1>

				<tr>
					<td>columna 1</td>
					<td>columna 2</td>
					<td>columna 3</td>
					<td>columna 4</td>
					<td>
						<a href="admin.php?m=clientesVer" style="border-radius" class="btn btn-sm btn-success btn-default"> <i class="fa fa-search"></i> </a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
						<div class="col-md-8">
							<div class="table-responsive" >
		<table class="table table-striped b-t b-light">
			<thead>
					<th>Date</th>
					<th>Invoice</th>
					<th>Model</th>
					<th width="140"></th>
				</tr>
			</thead>
			<tbody border=1>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>
					</td>
				</tr>
			</tbody>
		</table>
						</div>
						
					</div>
					<div class="row">
						
					</div>
				</form>
			</div>
		</section>