<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Mis reservaciones</header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
		
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
					<th>Nombre</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Direccion</th>
					<th>E-mail</th>
					<th>Cant.Personas</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>
						<label class="label bg-success">Listo</label><br>
						columna 1
					</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5</td>
					<td> 
					<SMALL>Nillos:</SMALL>
						<br>
						<SMALL>Adultos:</SMALL>
						<br>
						<SMALL>Ancianos:</SMALL>
					</td>
					<td>
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
				    <td>
				    	<label class="label bg-warning">Pendiente</label><br>
				    	columna 1
				    </td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5</td>
					<td>
						<SMALL>Nillos:</SMALL>
						<br>
						<SMALL>Adultos:</SMALL>
						<br>
						<SMALL>Ancianos:</SMALL>
					<td>
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>