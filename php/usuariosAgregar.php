<?php
if ( isset($_POST['nombre']) ){

	$tipo = mysql_real_escape_string($_POST['tipo']);
	$nombre = mysql_real_escape_string($_POST['nombre']);
	$correo = mysql_real_escape_string($_POST['correo']);
	$password = mysql_real_escape_string($_POST['password']);

	if ( mysql_query("INSERT INTO usuarios(tipo,nombre,email,password) VALUES ('".$tipo."','".$nombre."','".$correo."','".$password."')") ){
		$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Usuario agregado correctamente.
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
				<i class="fa fa-plus icon"></i> Agregar usuario
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tipo</label>
								<div class="col-lg-10">
									<select name="tipo" class="form-control">
										<option>Programador</option>
										<option>Administrador</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Nombre</label>
								<div class="col-lg-10">
									<input type="text" name="nombre" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Correo</label>
								<div class="col-lg-8">
									<input type="text" name="correo" class="form-control" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Contrase&ntilde;a</label>
								<div class="col-lg-8">
									<input type="text" name="password" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					<div class="line line-solid line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=usuarios" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>