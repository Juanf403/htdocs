<?php
$id = sqli($_GET['id']);

$data = mysql_fetch_object(mysql_query("SELECT * FROM tareas WHERE idtareas='".$id."' LIMIT 1"));
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-eye icon"></i> Tarea
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Estado</label>
								<div class="col-lg-10">
									<label class="control-label" for=""><?php echo "$data->estado";?></label>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tarea</label>
								<div class="col-lg-10">
									<label class="control-label" for=""><?php echo "$data->tarea";?></label>
								</div>
							</div>							
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-2 control-label" for="">Descripcion</label>
								<div class="col-md-10">
									<label class="control-label" for=""><?php echo "$data->descripcion";?></label>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Asignada a</label>
								<div class="col-lg-10">
									<label class="control-label" for="">
<?php
								$tareas = mysql_fetch_object(mysql_query("SELECT * FROM usuarios where id = '".$data->idasignado."'"));
								echo "$tareas->nombre";								
?>
									</label>
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