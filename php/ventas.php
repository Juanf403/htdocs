<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-tags"></i> Ventas</header>
	
	<div class="row wrapper">
		<div class="col-sm-5 m-b-xs">
			<a href="admin.php?m=ventasAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva</a>
		</div>
		<div class="col-sm-4 m-b-xs"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar">
				<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Cliente</th>
					<th>Concepto</th>
					<th width="150">Precio</th>
					<th width="150">Pagado</th>
					<th width="80"></th>
				</tr>
			</thead>
			<tbody>
<?php
			#$ventas  = mysql_query("SELECT * FROM ventas WHERE fecha='".date("Y-m-d")."' ORDER BY id DESC");
			$ventas  = mysql_query("SELECT *,(SELECT SUM(pago) FROM pagos WHERE idventa=v.idventas) AS suma FROM ventas v JOIN clientes on clientes.id=v.clienteId ORDER BY v.idventas DESC") or die(mysql_error());
			while($v = mysql_fetch_object($ventas)){
?>
				<tr>
					<td><?php echo $v->nombre; ?></td>
					<td><?php echo $v->concepto; ?></td>
					<td class="text-right">$ <?php echo $v->precio; ?> pesos</td>
					<td class="text-right">$ <?php echo $v->suma; ?> pesos</td>
					<td class="text-center">
						<a href="admin.php?m=ventasEditar&id=<?php echo $v->idventas; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>