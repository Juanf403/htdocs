<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-dollar"></i> Gastos</header>
	
	<div class="row wrapper">
		<div class="col-sm-5 m-b-xs">
			<a href="admin.php?m=gastosAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo</a>
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
					<th width="100">Fecha</th>
					<th>Concepto</th>
					<th width="130">Cantidad</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			$suma    = 0;
			$ventas  = mysql_query("SELECT * FROM gastos ORDER BY idgastos DESC") or die(mysql_error());
			while($v = mysql_fetch_object($ventas)){
?>
				<tr>
					<td><?php echo $v->fecha; ?></td>
					<td><?php echo $v->concepto; ?></td>
					<td class="text-right">$ <?php echo $v->precio; ?> pesos</td>
					<td class="text-center">
						<a href="admin.php?m=gastosEditar&id=<?php echo $v->idgastos; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=gastos&del=<?php echo $v->idgastos; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
				$suma += $v->precio;
			}
?>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><strong>Gasto total: $ <?php echo $suma; ?> pesos </strong></td>
			</tr>
			</tbody>
		</table>
	</div>

</section>