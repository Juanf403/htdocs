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
				<i class="fa fa-plus icon"></i> Agregar Alumnos
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
				<div class="row">
					<section class="panel panel-default" >
  						<div class="panel-body">
  							<div class="row">
  								<div class="col-lg-8 col-md-8">
  									<div class="form-group">
										<label class="col-lg-3 control-label">Nombre(s)</label>
										<div class="col-lg-9">
											<select class="form-control">
												<option>Kinder</option>
												<option>Secundaria</option>
												<option>Preparatoria</option>
											</select>
										</div>
									</div>
  								</div>
  								<div class="col-lg-4 col-md-4">
  									<div class="form-group">
										<label class="col-lg-3 control-label">Periodo</label>
										<div class="col-lg-9"><input type="text" name="categoria" class="form-control" placeholder="Periodo"></div>
									</div>
  								</div>
  							</div>
  						</div>
					</section>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<section class="panel panel-default" >
  						<div class="panel-body">
  							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-3 control-label">Nombre(s):</label>
										<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder="Nombre(s)"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-3 control-label">Apellido Paterno:</label>
										<div class="col-lg-9"><input type="text" name="ApellidoPaterno" class="form-control" placeholder="Apellido Paterno"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-3 control-label">Apellido Materno:</label>
										<div class="col-lg-9"><input type="text" name="ApellidoMaterno" class="form-control" placeholder="Apellido Materno"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
									  <label class="col-sm-3 control-label">Sexo:</label>

									  <div class="col-sm-9">
									    <label class="checkbox-inline">
									    	<input id="inlineCheckbox1" type="checkbox" value="option1">Masculino</label> 
									    	<label class="checkbox-inline">
									    	<input id="inlineCheckbox2" type="checkbox" value="option2">Femenino</label> 
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-3 control-label">Telefono:</label>
										<div class="col-lg-9"><input type="text" name="Telefono" class="form-control" placeholder="Telefono"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-3 control-label">Direccion:</label>
										<div class="col-lg-9"><input type="text" name="Direccion" class="form-control" placeholder="Direccion"></div>
									</div>
								</div>
							</div>
  						</div>
  					</section>
					</div>
					<div class="col-lg-4">
						<section class="panel panel-default" >
  							<div class="panel-body">
  								<div style="width:80%;height:287px;">
  									<input type="file">
  								</div>					
  							</div>
  						</section>
					
				</div>						
					
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
