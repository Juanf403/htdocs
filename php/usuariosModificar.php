	<?php

$id = sqli($_GET['id']);

if ( isset($_POST['password']) ){
	
	if (!empty($_POST['password'])){
		
		$sql = "password='".$password."'";
	} else {
		$sql = "";
	}

	if ($sql != "") {
		if ( mysql_query("UPDATE usuarios SET ".$sql." WHERE id='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Usuario editado correctamente.
		</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}
	}else{
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> No se ingresaron datos.
		</div>';
	}
	

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM usuarios WHERE id='".$id."' LIMIT 1"));
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-plus icon"></i> Editar usuario
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tipo</label>
								<div class="col-lg-10">
									<select name="tipo" class="form-control" readonly>
										<option>Programador</option>
										<option>Administrador</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label"  readonly>Nombre</label>
								<div class="col-lg-10">
									<input type="text" name="nombre" class="form-control" value="<?php echo $data->nombre; ?>" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label" readonly>Correo</label>
								<div class="col-lg-8">
									<input type="text" name="correo" class="form-control" value="<?php echo $data->email; ?>" readonly/>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Contrase&ntilde;a</label>
								<div class="col-lg-8">
									<input type="text" name="password" class="form-control" placeholder="escribir en caso de modificar"/>
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