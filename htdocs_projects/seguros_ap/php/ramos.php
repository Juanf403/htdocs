<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-code-fork"></i> Ramos </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=ramosAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus icon"></i>  Agregar Ramos </a>
		</div>
		<div class="col-sm-7"></div>
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
					<th width="100">No. Ramo</th>
					<th>Descripcion</th>
					<th width="120">% Comisión</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			if ( isset($_GET['del']) ){
				$del = mysql_real_escape_string($_GET['del']);
				mysql_query("DELETE FROM ramos WHERE idramos='".$del."'");
			}

			$query = mysql_query("SELECT * FROM ramos ORDER BY aseguradora ASC") or die( mysql_error() );
			while($q = mysql_fetch_object($query)){
?>
				<tr>
					<td><?php echo $q->aseguradora; ?></td>
					<td><?php echo $q->numramo; ?></td>
					<td><?php echo $q->descripcion; ?></td>
					<td><?php echo $q->comision; ?></td>
					<td>
						<a href="admin.php?m=ramosEditar&id=<?php echo $q->idramos; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=ramos&del=<?php echo $q->idramos; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>