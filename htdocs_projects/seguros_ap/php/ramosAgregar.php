<?php
#campos: fecha,aseguradora,num_ramo,comision,descripcion,adicional

if ( isset($_POST['aseguradora']) ){

	$aseguradora 	= mysql_real_escape_string($_POST['aseguradora']);
	$numramo 		= mysql_real_escape_string($_POST['numramo']);
	$comision 			= mysql_real_escape_string($_POST['comision']);
	$descripcion  	= mysql_real_escape_string($_POST['descripcion']);
	$adicional  		= mysql_real_escape_string($_POST['adicional']);

	if ( mysql_query("INSERT INTO ramos SET fecha='".date("Y-m-d")."',aseguradora='".$aseguradora."',numramo='".$numramo."',comision='".$comision."',descripcion='".$descripcion."',adicional='".$adicional."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Ramo agregado correctamente.
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
					<a href="admin.php?m=ramos" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Ramo
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Aseguradora: </label>
								<div class="col-lg-10"><input type="text" name="aseguradora" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">No. Ramo</label>
								<div class="col-lg-4"><input type="text" name="numramo" class="form-control" placeholder=""></div>
								<label class="col-lg-2 control-label">% Comisión</label>
								<div class="col-lg-4"><input type="text" name="comision" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-2 control-label">Descripcion del Ramo</label>
									<div class="col-lg-10"><input type="text" name="descripcion" class="form-control" placeholder=""></div>
								</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Información Adicional</label>
								<div class="col-lg-10"><textarea type="text" name="adicional" class="form-control" placeholder=""></textarea></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=ramos" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
