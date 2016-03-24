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
				<i class="fa fa-plus icon"></i> Agregar Factura
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-9">
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3">
							<div class="form-group">
								<label class="col-lg-3 control-label">Fecha </label>
								<div class="col-lg-9"><input type="date" name="fecha" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre de Cliente</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Concepto</label>
								<div class="col-lg-9"><input type="text" name="concepto" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-lg-5 control-label"># Factura</label>
								<div class="col-lg-7"><input type="text" name="factura" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-lg-3 control-label">Subtotal</label>
								<div class="col-lg-9"><input type="text" name="cantidad" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-lg-3 control-label">Iva</label>
								<div class="col-lg-9"><input type="text" name="cantidad" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-lg-3 control-label">Total</label>
								<div class="col-lg-9"><input type="text" name="cantidad" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=facturas" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
