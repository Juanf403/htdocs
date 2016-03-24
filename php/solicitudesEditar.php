<?php
$id = sqli($_GET['id']);

if ( isset($_POST['Actualizar']) ){

	$Empresa 			= mysql_real_escape_string($_POST['empresa']);
	$email 				= mysql_real_escape_string($_POST['email']);
	$Reporto   			= mysql_real_escape_string($_POST['reporto']);
	$Problema 			= mysql_real_escape_string($_POST['problema']);
	$StatusPeticion 	= mysql_real_escape_string($_POST['statusPeticion']);

	if ($StatusPeticion == "Finalizado"){
		$sql = ",fechafinal='".date("Y/m/d")."'";
	} else {
		$sql = "";
	}


	if ( mysql_query("UPDATE solicitud SET Empresa='".$Empresa."',email='".$email."',Reporto='".$Reporto."'".$sql.",StatusPeticion='".$StatusPeticion."',Problema='".$Problema."' WHERE idSolicitud=".$id) ){
		$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Tarea editada correctamente.
		</div>';
		$cs  = mysql_num_rows(mysql_query("SELECT * FROM solicitud WHERE StatusPeticion='Pendiente'"));
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM  solicitud WHERE idSolicitud='".$id."' LIMIT 1"));
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=vistaTickets" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Solicitud
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
											$listaEmpresas  = mysql_query("SELECT nombre from clientes");

											while ($obj = mysql_fetch_object($listaEmpresas)) {
												if ($data->Empresa == $obj->nombre) {
													$selected = " selected";
												}else
												{
													$selected ="";
												}
												echo "<option ".$selected.">".$obj->nombre."</option>";
											}
										 ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Correo</label>
								<div class="col-lg-10"><input type="text" name="email" class="form-control" placeholder=""  <?php echo 'value="'.$data->email.'"'; ?>></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre del cliente</label>
								<div class="col-lg-9"><input type="text" name="reporto" class="form-control" placeholder=""  <?php echo 'value="'.$data->Reporto.'"'; ?>></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Status</label>
								<div class="col-lg-10">
									<select class="form-control" id="statusPeticion" name="statusPeticion">
										<option></option>
										<option value="Pendiente" <?php if ($data->StatusPeticion == "Pendiente") { echo "selected";} ?>>Pendiente</option>
										<option value="Finalizado" <?php if ($data->StatusPeticion == "Finalizado") { echo "selected";} ?>>Finalizado</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="form-group">
								<label class="col-lg-2 control-label">Problema</label>
								<div class="col-lg-10">
									<textarea name="problema" class="form-control" style="height:200px;"> <?php echo $data->Problema; ?></textarea>
								</div>
							</div>							
						</div>
						
					</div>
					<div class="row">
						
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<a class="btn btn-md btn-success pull-left"  href="admin.php?m=vistaTickets&del=<?php echo $id; ?>"><span class="fa fa-trash-o"></span> Eliminar</a>
							<button type="submit" class="btn btn-sm btn-success" id="Actualizar" name="Actualizar"><i class="fa fa-check icon"></i> Actualizar</button>
							<a href="admin.php?m=vistaTickets" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
				
			</div>
		</section>