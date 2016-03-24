<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-users"></i> Clientes</header>
	
	<div class="row wrapper">
		<div class="col-sm-5 m-b-xs">
			<a href="admin.php?m=clientesAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo</a>
		</div>
		<div class="col-sm-4 m-b-xs"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Categoria</th>
					<th>Nombre/Empresa</th>
					<th>Contacto</th>
					<th width="200">Telefono</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			if ( isset($_GET['del']) ){
				mysql_query("DELETE FROM clientes WHERE id='".mysql_real_escape_string($_GET['del'])."' AND usuarioId='".$_SESSION['userId']."'");
			}

			$consulta = mysql_query("SELECT * FROM clientes ORDER BY nombre ASC");
			while($c = mysql_fetch_object($consulta)){
?>
				<tr>
					<td><?php echo $c->categoria; ?></td>
					<td><?php echo $c->nombre; ?></td>
					<td><?php echo $c->contacto; ?></td>
					<td><?php echo $c->telefono; ?></td>
					<td>
						<a href="admin.php?m=clientesEditar&id=<?php echo $c->id; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=<?php echo $c->id; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>