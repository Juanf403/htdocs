<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Cuentas por Cobrar</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-2 m-b-xs">
<?php
		if ($_SESSION['userPv'] != "3"){
			echo '<a href="admin.php?m=ordenesAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Orden</a>';
		}
?>
		</div>
		<div class="col-xs-12 col-sm-7 m-b-xs text-left-xs text-center">
<?php
		if ($_SESSION['userPv'] != "3"){
			echo '<a href="admin.php?m=cuentas" class="btn btn-default btn-sm">Cuentas por Cobrar</a> &nbsp;';
			echo '<a href="admin.php?m=reportes" class="btn btn-default btn-sm">Reporte de Ingresos</a>';
		}
?>
		</div>
		<div class="col-xs-12 col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="90"> Folio </th>
					<th width="100"> Fecha </th>
					<th> Cliente/Servicios </th>
					<th width="140">Total</th>
					<th width="150"> Abonado / Restan</th>
					<th width="160"> </th>
				</tr>
			</thead>
			<tbody>
<?php
		$query = mysql_query("SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId ORDER BY idorden DESC");
		while($q = mysql_fetch_object($query)){

			$total = 0;
			$suma  = 0;
			$servhtml = "";
			$servicios = mysql_query("SELECT * FROM servicios WHERE ordenId='".$q->idorden."' ORDER BY idservicio ASC");
			while($s = mysql_fetch_object($servicios)){
				$servhtml .= '<small>'.$s->servicio.'</small><br>';
				$total += $s->precio;
			}
			# comprobamos el iva
			if ( $q->factura == "Si"){
				$total 	+= $total * .16;
			}

			# comprobamos los pagos
			$pagos = mysql_query("SELECT * FROM pagos WHERE ordenId='".$q->idorden."'");
			while($pago = mysql_fetch_object($pagos)){
				$suma += $pago->cantidad;
			}
					
			$restan = $total - $suma;

			if ($restan > "0"){
				echo '<tr>
					<td class="text-center">'.$q->idorden.'</td>
					<td>'.$q->fecha.'</td>
					<td>'.$q->nombre.'<br>'.$servhtml.'</td>';
					
					echo '<td class="text-right">$ '.$total.' pesos</td>';

					echo '<td> <span class="text-success">$ '.$suma.'</span> / <span class="text-danger">$ '.$restan.'</span> </td>
					<td>
						<a href="admin.php?m=ordenesEditar&id='.$q->idorden.'" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;
						<a href="print.php?id='.$q->idorden.'" target="_blank" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </a> &nbsp;&nbsp;
						<a href="admin.php?m=ordenes&del='.$q->idorden.'" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>';
			}
		}
?>
			</tbody>
		</table>
	</div>

</section>