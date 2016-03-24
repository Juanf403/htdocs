<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Facturas </header>
	<div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="m-t-none m-b text">Reporte</h3>
							<form role="form" action="" method="post">
								<div class="row">
									<div class="col-sm-3"> 
										<div class="form-group"> 
											<div class="radio"> 
												<label> <input type="radio" name="optionsRadios" id="" value="option1" checked=""> General</label> 
											</div> 
											<div class="radio"> 
												<label> <input type="radio" name="optionsRadios" id="" value="option2"> Por Cliente</label> 
											</div> 
										</div> 
									</div>
									<div class="col-sm-4"> 
										<div class="form-group"> 
											<div class="radio"> 
												<label> <input type="radio" name="optionsRadios1" id="" value="option1" checked=""> Por Rango de Fecha</label> 
											</div> 
											<div class="radio"> 
												<label> <input type="radio" name="optionsRadios1" id="" value="option2" > Por Rango de Folio</label> 
											</div>  
										</div> 
									</div>
									<div class="col-sm-5"> 
										<div class="form-group"> 
											<div class="input-group m-b" id="txtdesde"> 
												<span class="input-group-addon">Desde: </span> 
												<input type="text" class="form-control"> 
											</div> 
											<div class="input-group m-b" id="txthasta"> 
												<span class="input-group-addon">Hasta: </span> 
												<input type="text" class="form-control"> 
											</div>  
										</div> 
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-success pull-right text-uc m-t-n-xs"><strong><i class="fa fa-check"></i> Imprimir Reporte</strong></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content --> 
		</div><!-- /.modal-dialog -->
	</div>
	<div class="row wrapper">
		<div class="col-sm-5 m-b-xs">
			<a href="admin.php?m=facturasAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Factura </a>
		</div>
		<div class="col-sm-4 m-b-xs">
			<a href="#modal-form" data-toggle="modal" id="reportes" class="btn btn-sm btn-success"><i class="fa fa-file-text-o"></i> Reporte de Facturas</a>
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
					<th width="100">Fecha</th>
					<th width="100"># Factura</th>
					<th>Cliente</th>
					<th>Concepto</th>
					<th width="100">Iva</th>
					<th width="100">Subtotal</th>
					<th width="100">Total</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3 </td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>columna 6 </td>
					<td>columna 7 </td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3 </td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>columna 6 </td>
					<td>columna 7 </td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
</section>