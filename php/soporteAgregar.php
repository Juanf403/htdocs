<?php
@session_start();

$listaEmpresas  = mysql_query("SELECT nombre from clientes");
if ( isset($_POST['empresa']) ){
	$idcreadopor = $_SESSION['userId'];
	$empresa 		= mysql_real_escape_string($_POST['empresa']);
	$reporto		= mysql_real_escape_string($_POST['reporto']);
	$correo  		= mysql_real_escape_string($_POST['correo']);
	$problema 		= mysql_escape_string($_POST['problema']);

	if ( mysql_query("INSERT INTO solicitud SET Fecha='".date("Y-m-d")."',Empresa='".$empresa."',Reporto='".$reporto."',email='".$correo."',StatusPeticion = 'Pendiente',idcreadopor=".$idcreadopor.",Problema = '".$problema."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Solicitud agregado correctamente.
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
				<i class="fa fa-plus icon"></i> Agregar Solicitud de Soporte
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
				
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre/Empresa</label>
								<div class="col-lg-9">
									<select class="form-control" name="empresa" id="empresa">
										<option></option>
										<?php 
											while ($obj = mysql_fetch_object($listaEmpresas)) {
												echo "<option>".$obj->nombre."</option>";
											}
										 ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Correo</label>
								<div class="col-lg-10"><input type="text" name="correo" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre del cliente</label>
								<div class="col-lg-9"><input type="text" name="reporto" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="form-group">
								<label class="col-lg-2 control-label">Problema</label>
								<div class="col-lg-10">
									<textarea name="problema" class="form-control" style="height:250px;"></textarea>
								</div>
							</div>							
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-md btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-md btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
