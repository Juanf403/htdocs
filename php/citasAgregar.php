<?php

if ( isset($_POST['nombre']) ){

	$nombre = mysql_real_escape_string($_POST['nombre']);
	$fecha  = date("Y/m/d");
	$fechaC = mysql_real_escape_string($_POST['fechaC']);
	$hora   = mysql_real_escape_string($_POST['hora']);
	$desc   = mysql_real_escape_string($_POST['desc']);

	
}
?>
<div class="row wrapper">
	<div class="col-md-12">
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Cita
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label class="col-lg-4 control-label">Cliente</label>
								<div class="col-lg-8">
									<input type="text" name="cliente" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Fecha de Cita</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" placeholder="" value="<?php echo date("Y-m-d"); ?>">
									<!--<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy">-->
								</div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label class="col-lg-4 control-label">Hora</label>
								<div class="col-lg-8">
									<input type="text" name="hora" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Descripci&oacute;n</label>
								<div class="col-lg-8">
									<textarea type="text" class="form-control" name="descripcion"></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
						</div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>