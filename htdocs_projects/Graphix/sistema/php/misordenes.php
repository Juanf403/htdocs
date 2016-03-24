<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Mis ordenes</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-12 m-b-xs">
			<a href="admin.php?m=misordenes&estado=0" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i> Pendientes</a>
			<a href="admin.php?m=misordenes&estado=1" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Finalizadas</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="90"> Folio </th>
					<th width="100"> Fecha </th>
					<th> Cliente/Servicios</th>
					<th width="100"> </th>
				</tr>
			</thead>
			<tbody>
<?php
		if ( isset($_GET['estado']) ){
			$estado = mysql_real_escape_string($_GET['estado']);
			$query = mysql_query("SELECT * FROM asignados JOIN ordenes on ordenes.idorden=asignados.idorden JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE ordenes.estado='".$estado."' AND asignados.idusuario='".$_SESSION['userId']."' ORDER BY ordenes.idorden DESC") or die(mysql_Error());
		} else {
			$query = mysql_query("SELECT * FROM asignados JOIN ordenes on ordenes.idorden=asignados.idorden JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE asignados.idusuario='".$_SESSION['userId']."' ORDER BY ordenes.idorden DESC") or die(mysql_Error());
		}
		
		while($q = mysql_fetch_object($query)){

			switch ($q->estado) {
				case "1":
					$label = "<label class='label bg-success'>Finalizado</label>";
				break;
				case "0":
					$label = "<label class='label bg-warning'>Pendiente</label>";
				break;
			}

			echo '<tr>
					<td class="text-center">'.$q->idorden.'</td>
					<td>'.$q->fecha.'</td>
					<td>'.$q->nombre.' '.$label.'<br>';
					$servicios = mysql_query("SELECT * FROM servicios WHERE ordenId='".$q->idorden."' ORDER BY idservicio ASC");
					while($s = mysql_fetch_object($servicios)){
						echo '<small>'.$s->servicio.'</small><br>';
					}
					echo '</td>';
					echo '<td class="text-center">
						<a href="admin.php?m=misordenes&id='.$q->idorden.'" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a>
					</td>
				</tr>';
		}
?>
			</tbody>
		</table>
	</div>

</section>