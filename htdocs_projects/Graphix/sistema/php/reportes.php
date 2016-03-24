<?php
if ( isset($_GET['daterange']) ){
	$buscar = mysql_real_escape_string($_GET['daterange']);
	$date = explode(" - ", $buscar);
	
	$query = mysql_query("SELECT fecha,SUM(cantidad) FROM pagos WHERE fecha BETWEEN '".$date[0]."' AND '".$date[1]."' GROUP BY fecha");
} else {
	$buscar = "";
	$query = mysql_query("SELECT fecha,SUM(cantidad) FROM pagos WHERE fecha LIKE '".date("Y-m")."%' GROUP BY fecha");
}
?>
<div class="row">
	<div class="col-md-5">
		<section class="panel panel-default pos-rlt clearfix">
			<header class="panel-heading"> <i class="fa fa-list"></i> Reporte de Ingresos</header>
			
			<div class="row wrapper">
				<div class="col-md-7 col-md-offset-5 text-right">
					<form id="reportesForm" action="" method="get">
						<input type="hidden" value="reportes" name="m">
						<div class="input-group m-b">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="text" id="daterange" class="form-control btn-sm" name="daterange" value="<?php echo $buscar; ?>" />
						</div>
					</form>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table table-striped b-t b-light">
					<thead>
						<tr>
							<th width="110"> Fecha </th>
							<th class="text-center">Total</th>
							<th width="80"> </th>
						</tr>
					</thead>
					<tbody>
<?php

				while($q = mysql_fetch_array($query)){
					echo '<tr>
							<td class="text-center">'.$q[0].'</td>
							<td class="text-right">$ '.$q[1].' pesos</td>
							<td class="text-center">
								<a href="admin.php?m=reportes&fecha='.$q[0].'" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a>
							</td>
						</tr>';
				}
?>
					</tbody>
				</table>
			</div>

		</section>
	</div>

<?php
if ( isset($_GET['fecha']) ){
	$fecha = mysql_real_escape_string($_GET['fecha']);
?>
	<div class="col-md-7">
		<section class="panel panel-default pos-rlt clearfix">
			<header class="panel-heading"> <i class="fa fa-list"></i> Reporte de Ingresos el dia: <?php echo $fecha; ?></header>
			

			<div class="table-responsive">
				<table class="table table-striped b-t b-light">
					<thead>
						<tr>
							<th width="110"> Fecha </th>
							<th>Cliente</th>
							<th class="text-center">Abonado</th>
							<th width="80"> </th>
						</tr>
					</thead>
					<tbody>
		<?php
				$query = mysql_query("SELECT * FROM pagos JOIN ordenes on ordenes.idorden=pagos.ordenId JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE pagos.fecha='".$fecha."' ORDER BY idpago ASC") or die(mysql_error());
				while($q = mysql_fetch_object($query)){
					echo '<tr>
							<td class="text-center">'.$q->fecha.'</td>
							<td>'.$q->nombre.'</td>
							<td class="text-right">$ '.$q->cantidad.' pesos</td>
							<td>
								<a href="admin.php?m=ordenesEditar&id='.$q->ordenId.'" target="_blank" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a>
							</td>
						</tr>';
				}
		?>
					</tbody>
				</table>
			</div>

		</section>
	</div>
<?php
}
?>
</div>