<?php
/*
$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$date 	= mysql_real_escape_string($_POST['date']);
	$cliente 	= mysql_real_escape_string($_POST['cliente']);
	$invoice  = mysql_real_escape_string($_POST['invoice']);
	$model  	= mysql_real_escape_string($_POST['model']);




}

$data = mysql_fetch_object(mysql_query("SELECT * FROM clientes WHERE id='".$id."' LIMIT 1"));
*/
?>
		<section class="panel panel-default">
			<header class="panel-heading"> <i class="fa fa-list"></i> Lista de Invoice</header>
	
	<div class="row wrapper">
		<div class="col-xs-2 col-sm-2 col-lg-2 m-b-xs">
			<a href="admin.php?m=invoiceAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo invoice</a>
		</div>
		<div class="col-xs-3 col-sm-10 col-lg-7 m-b-xs">	
		</div>
		<div class="col-xs-7 col-sm-2 col-lg-3 m-b-xs">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar">
				<span class="input-group-btn">
					<button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> 
					</button> 
				</span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Cliente</th>
					<th>Folder</th>
					<th>Documento</th>	
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3 </td>
					<td>columna 4 </td>
					<td>
						<a href="admin.php?m=invoiceAgregar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3 </td>
					<td>columna 4 </td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
		</section>
