<?php

$id = mysql_real_escape_string($_GET['id']);
if ( isset($_POST['cliente']) ){

	$cliente = mysql_real_escape_string($_POST['cliente']);
	$fecha   = mysql_real_escape_string($_POST['fecha']);

	$concepto   = mysql_real_escape_string($_POST['concepto']);
	$precio 	= mysql_real_escape_string($_POST['precio']);

	if ( mysql_query("UPDATE ventas SET fecha='".$fecha."',clienteId='".$cliente."',concepto='".$concepto."',precio='".$precio."' WHERE idventas='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Venta actualizada correctamente.
		</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM ventas WHERE idventas='".$id."' LIMIT 1"));
?>

<div class="modal fade" id="modal-form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="m-t-none m-b">Agregar Pago</h3>
						<form role="form" action="" method="post">
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" name="descripcionPago" id="descripcionPago" placeholder="Descripcion">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" name="cantidadPago" id="cantidadPago" placeholder="Cantidad">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-success pull-right text-uc m-t-n-xs"><strong><i class="fa fa-check"></i> Agregar Pago</strong></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content --> 
	</div><!-- /.modal-dialog -->
</div>

		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Venta
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label class="col-lg-3 control-label">Cliente</label>
								<div class="col-lg-9">

									<select name="cliente" class="form-control">
										<option></option>
<?php
									$clientes = mysql_query("SELECT * FROM clientes ORDER BY nombre ASC");
									while($c = mysql_fetch_object($clientes)){
										if ($c->id == $data->clienteId)
											echo "<option value='".$c->id."' selected>".$c->nombre."</option>";
										else 
											echo "<option value='".$c->id."'>".$c->nombre."</option>";
									}
?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-4 control-label">Fecha</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="fecha" placeholder="" value="<?php echo $data->fecha; ?>">
									<!--<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy">-->
								</div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="row">
						<div class="table-responsive">
							<table class="table table-striped b-t b-light" id="tabla1">
								<thead>
									<tr>
										<th>Concepto</th>
										<th width="150">Precio</th>
										<th width="50"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="text" name="concepto" value="<?php echo $data->concepto; ?>" class="form-control">
										</td>
										<td>
											<input type="text" name="precio" value="<?php echo $data->precio; ?>" class="form-control">
										</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-md-12">
							<h2>Pagos <a href="#modal-form" data-toggle="modal" id="agregarPago" class="btn btn-xs btn-success"> <i class="fa fa-plus"></i> Agregar Pago</a></h2>
						</div>
						<div class="table-responsive">
							<table class="table table-striped b-t b-light" id="tabla1">
								<thead>
									<tr>
										<th width="100">Fecha</th>
										<th width="250">Pago</th>
										<th width="50"></th>
									</tr>
								</thead>
								<tbody>
<?php
								if ( isset($_POST['descripcionPago']) ){
									$descripcionPago 	= mysql_real_escape_string($_POST['descripcionPago']);
									$cantidadPago 		= mysql_real_escape_string($_POST['cantidadPago']);

									mysql_query("INSERT INTO pagos SET idventa='".$id."',fecha='".date("Y-m-d")."',descripcion='".$descripcionPago."',pago='".$cantidadPago."'");

									echo '<div class="col-md-12"><div class="alert alert-success" id="pagoAlert">
										<i class="fa fa-check"></i> Pago agregado correctamente: '.$descripcionPago.' > $ '.$cantidadPago.'
									</div></div>';
								}

								$pagos = mysql_query("SELECT * FROM pagos WHERE idventa='".$data->idventas."' order by fecha");
								while($pago = mysql_fetch_object($pagos)){
									echo "<tr>
										<td class='text-center'>".$pago->fecha."</td>
										<td>".$pago->descripcion."</td>
										<td class='text-right'>$ ".$pago->pago." pesos</td>
									</tr>";
								}
?>
								</tbody>
							</table>
						</div>


					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-refresh icon"></i> Actualizar Venta</button>
							<a href="admin.php?m=ventas" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>