<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-users"></i> Usuarios</header>
	
	<div class="row wrapper">
		<div class="col-sm-12 m-b-xs">
			<a href="admin.php?m=usuariosAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Usuario</a> &nbsp;
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="150">Tipo</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php

			if (isset($_GET['del'])){
				mysql_query("DELETE FROM usuarios WHERE id='".$_GET['del']."'");
			}
			
			$ventas  = mysql_query("SELECT * FROM usuarios ORDER BY nombre DESC") or die(mysql_error());	

			while($v = mysql_fetch_object($ventas)){
?>
				<tr>
					<td><?php echo $v->tipo; ?></td>
					<td><?php echo $v->nombre; ?></td>
					<td><?php echo $v->email; ?></td>
					<td class="text-center">
						<a href="admin.php?m=usuariosEditar&id=<?php echo $v->id; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=usuarios&del=<?php echo $v->id; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>