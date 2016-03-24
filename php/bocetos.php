<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-users"></i> Bocetos</header>
	
	<div class="row wrapper">
		<div class="col-sm-5 m-b-xs">
			<a href="admin.php?m=bocetosAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo</a>
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
					<th width="120px">Fecha</th>
					<th>Categoria</th>
					<th>Url</th>
					<th width="100">Disponible</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			if ( isset($_GET['del']) ){
				mysql_query("DELETE FROM clientes WHERE id='".mysql_real_escape_string($_GET['del'])."' AND usuarioId='".$_SESSION['userId']."'");
			}

			$consulta = mysql_query("SELECT * FROM bocetos ORDER BY idbocetos DESC");
			while($c = mysql_fetch_object($consulta)){
?>
				<tr>
					<td class="text-center"><?php echo $c->fecha; ?></td>
					<td><?php echo $c->categoria; ?></td>
					<td><a href="<?php echo $c->url; ?>" target="_blank"><?php echo $c->url; ?></a></td>
					<td class="text-center">
<?php
					if ( empty($c->clienteId) ){
						echo '<span class="label label-success">Si</span>';
					} else {
						echo '<span class="label label-danger">No</span>';
					}
?>
					</td>
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