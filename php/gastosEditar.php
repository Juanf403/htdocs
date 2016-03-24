<?php

$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['concepto']) ){

	$concepto = mysql_real_escape_string($_POST['concepto']);
	$gasto    = mysql_real_escape_string($_POST['gasto']);

	if ( mysql_query("UPDATE gastos SET concepto,precio) VALUES ('".date("Y-m-d")."','".$concepto."','".$gasto."')") ){
		$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Gasto agregado correctamente.
		</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM gastos WHERE idgastos='".$id."'"));
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Gasto
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label class="col-lg-3 control-label">Concepto</label>
								<div class="col-lg-9">
									<textarea name="concepto" class="form-control" style="height:100px;"><?php echo $data->concepto; ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Gasto</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="gasto" placeholder="" value="<?php echo $data->precio; ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=gastos" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>