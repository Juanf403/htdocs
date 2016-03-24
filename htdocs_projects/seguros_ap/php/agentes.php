<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-male"></i> Agentes </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=agentesAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus icon"></i>  Agregar Agente </a>
		</div>
<div class="col-sm-7 m-b-xs text-center">
		</div>
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
					<th>Aseguradora</th>
					<th>Cedula</th>
					<th>Nombre</th>
					<th width="200">Telefono</th>
					<th>Direccion</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			if ( isset($_GET['del']) ){
				$del = mysql_real_escape_string($_GET['del']);
				mysql_query("DELETE FROM agentes WHERE idagentes='".$del."'");
			}

			$query = mysql_query("SELECT * FROM agentes ORDER BY nombre ASC") or die( mysql_error() );
			while($q = mysql_fetch_object($query)){
?>
				<tr>
					<td><?php echo $q->aseguradora; ?></td>
					<td><?php echo $q->cedula; ?></td>
					<td><?php echo $q->nombre; ?></td>
					<td><?php echo $q->telefono; ?></td>
					<td><?php echo $q->direccion; ?></td>
					<td>
						<a href="admin.php?m=agentesEditar&id=<?php echo $q->idagentes; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=agentes&del=<?php echo $q->idagentes; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>