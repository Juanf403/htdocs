<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-users"></i> Contratos</header>
	
	<div class="row wrapper">
		<div class="col-sm-5 m-b-xs">
			<a href="admin.php?m=ventasAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo</a>
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
					<th width="200">Precio</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			$ventas  = mysql_query("SELECT * FROM ventas WHERE fecha='".date("Y/m/d")."' AND usuarioId='".$_SESSION['userId']."' ORDER BY hora DESC");
			while($v = mysql_fetch_object($ventas)){
?>
				<tr>
					<td><?php echo $v->clienteId; ?></td>
					<td><?php echo $v->concepto; ?></td>
					<td>$ <?php echo $v->precio; ?></td>
					<td>
						<a href="" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>