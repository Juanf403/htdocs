<?php

$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$nombre 		= mysql_real_escape_string($_POST['nombre']);
	$email  		= mysql_real_escape_string($_POST['email']);
	$telefono  		= mysql_real_escape_string($_POST['telefono']);
	$direccion  	= mysql_real_escape_string($_POST['direccion']);
	$colonia  		= mysql_real_escape_string($_POST['colonia']);
	$codigopostal  	= mysql_real_escape_string($_POST['codigopostal']);
	$rfc  			= mysql_real_escape_string($_POST['rfc']);

	if ( mysql_query("UPDATE clientes SET nombre='".$nombre."',email='".$email."',telefono='".$telefono."',direccion='".$direccion."',colonia='".$colonia."',codigopostal='".$codigopostal."',rfc='".$rfc."' WHERE idcliente='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM clientes WHERE idcliente='".$id."' LIMIT 1"));

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" value="<?php echo $data->nombre; ?>"></div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">E-mail</label>
								<div class="col-lg-9"><input type="text" name="email" class="form-control" value="<?php echo $data->email; ?>"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Tel&eacute;fono</label>
								<div class="col-lg-9"><input type="text" name="telefono" class="form-control" value="<?php echo $data->telefono; ?>"></div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Direcci&oacute;n</label>
								<div class="col-lg-9"><input type="text" name="direccion" class="form-control" value="<?php echo $data->direccion; ?>"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-md-4">
							<div class="form-group">
								<label class="col-md-2 col-lg-4 control-label">Colonia</label>
								<div class="col-md-10 col-lg-8"><input type="text" name="colonia" class="form-control" value="<?php echo $data->colonia; ?>"></div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">Codigo Postal</label>
								<div class="col-lg-6"><input type="text" maxlength="5" name="codigopostal" class="form-control" value="<?php echo $data->codigopostal; ?>"></div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<div class="form-group">
								<label class="col-lg-3 control-label">RFC</label>
								<div class="col-lg-9"><input type="text" name="rfc" class="form-control" value="<?php echo $data->rfc; ?>"></div>
							</div>
						</div>
					</div>

					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Guardar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
