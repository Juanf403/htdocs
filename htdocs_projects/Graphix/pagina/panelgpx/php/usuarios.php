<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Usuarios </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=usuariosAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Usuario </a>
		</div>
		<div class="col-sm-7 m-b-xs text-center"></div>
		<div class="col-sm-3"></div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Usuario</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			if ( isset($_GET['del']) ){
				$del = mysql_real_escape_string($_GET['del']);
				mysql_query("DELETE FROM usuarios WHERE idusuario='".$del."'");
			}

			$query = mysql_query("SELECT * FROM usuarios ORDER BY usuario ASC") or die( mysql_error() );
			while($q = mysql_fetch_object($query)){
?>
				<tr>
					<td><?php echo $q->usuario; ?></td>
					<td>
						<a href="admin.php?m=usuariosEditar&id=<?php echo $q->idusuario; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=usuarios&del=<?php echo $q->idusuario; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>