<?php

if ( isset($_POST['nombre']) ){

	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$correo  	= mysql_real_escape_string($_POST['correo']);
	$privilegio = mysql_real_escape_string($_POST['privilegio']);

	if ( mysql_query("INSERT INTO clientes SET fecha='".date("Y-m-d")."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',email='".$correo."'") ){
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
					<a href="admin.php?m=administrativo" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Usuario
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6 pull-left" >
							<div class="form-group">
								<label class="col-lg-2 control-label">Direcci&oacute;n</label>
								<div class="col-lg-9"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-3 control-label">Tel&eacute;fono</label>
										<div class="col-lg-9"><input type="text" name="telefono" class="form-control" placeholder=""></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group"> 
										<label class="col-lg-3 control-label">Privilegios</label> 
											<div class=" col-lg-9"> 
												<select data-required="true" class="form-control " name="privilegio" id="privilegio"> 
													<option value="">Elige una opcion</option> 
													<option value="1">Administrador</option> 
													<option value="2">Gerente</option>
													<option value="3">Mesero</option> 
												</select>
											</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-3 control-label">Correo</label>
										<div class="col-lg-9"><input type="text" name="correo" class="form-control" placeholder=""></div>
									</div>
								</div>
							</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="row">
						<div class=" col-md-4 ">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre Usuario</label>
								<div class="col-lg-9"><input type="text" name="userName" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class=" col-md-4 ">
							<div class="form-group">
								<label class="col-lg-3 control-label">Contraseña</label>
								<div class="col-lg-9"><input type="password" name="pass1" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="form-group">
								<label class="col-lg-3 control-label">Repetir Contraseña</label>
								<div class="col-lg-9"><input type="password" name="pass2" class="form-control" placeholder=""></div>
							</div>
						</div>
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
