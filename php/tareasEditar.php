<?php
$id = sqli($_GET['id']);

if ( isset($_POST['tarea']) ){

	$estado 	= mysql_real_escape_string($_POST['estado']);
	$asignar 	= mysql_real_escape_string($_POST['asignar']);
	$tarea   	= mysql_real_escape_string($_POST['tarea']);

	if ($estado == "Finalizado"){
		$sql = ",fechafinal='".date("Y/m/d")."'";
	} else {
		$sql = "";
	}
	if ( mysql_query("UPDATE tareas SET idasignado='".$asignar."',tarea='".$tarea."',estado='".$estado."'".$sql." WHERE idtareas='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Tarea editada correctamente.
		</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM tareas WHERE idtareas='".$id."' LIMIT 1"));
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-plus icon"></i> Editar Tarea
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Estado</label>
								<div class="col-lg-10">
									<select class="form-control" name="estado">
										<option <?php if ($data->estado == "Pendiente") echo "selected"; ?>>Pendiente</option>
										<option <?php if ($data->estado == "Finalizado") echo "selected"; ?>>Finalizado</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tarea</label>
								<div class="col-lg-10">
									<textarea name="tarea" class="form-control" style="height:200px;"><?php echo $data->tarea; ?></textarea>
								</div>
							</div>							
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Asignar a</label>
								<div class="col-lg-10">
									<select class="form-control" name="asignar">
<?php
								$tareas = mysql_query("SELECT * FROM usuarios ORDER BY nombre ASC");
								while($t = mysql_fetch_object($tareas)){
									if ($t->id == $data->idasignado)
										echo "<option value='".$t->id."' selected>".$t->nombre."</option>";
									else 
										echo "<option value='".$t->id."'>".$t->nombre."</option>";
								}
?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="line line-solid line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=tareas" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>