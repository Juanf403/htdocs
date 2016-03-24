<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-medkit"></i> Aseguradoras </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=aseguradorasAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus icon"></i>  Agregar Aseguradora </a>
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
					<th width="100">Clave</th>
					<th>Nombre Aseguradora</th>
					<th width="60"></th>
				</tr>
			</thead>
			<tbody>
<?php
			if ( isset($_GET['del']) ){
				$del = mysql_real_escape_string($_GET['del']);
				mysql_query("DELETE FROM aseguradoras WHERE idaseguradoras='".$del."'");
			}

			$query = mysql_query("SELECT * FROM aseguradoras ORDER BY nombre ASC") or die( mysql_error() );
			while($q = mysql_fetch_object($query)){
?>
				<tr>
					<td><?php echo $q->clave; ?></td>
					<td><?php echo $q->nombre; ?></td>
					<td>
						<a href="admin.php?m=aseguradoras&del=<?php echo $q->idaseguradoras; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>