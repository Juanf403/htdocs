<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-usd"></i> Ventas </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=ventasAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Registrar Venta </a>
		</div>
		<div class="col-sm-7 m-b-xs text-center">
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="row">
		<div  class="col-md-9">
			<div class="table-responsive">
				<table class="table table-striped b-t b-light">
					<thead>
						<tr>
							<th >Clave</th>
							<th width="300">Artículo</th>
							<th width="300">Precio Unitario</th>
							<th width="300">Cantidad</th>
							<th width="300">Costo</th>
							<th width="130"></th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>789326</td>
							<td>Monitor hp - M35 </td>
							<td>$1,200.00 </td>
							<td>x1 </td>
							<td>$1,200.00 </td>
							<td width ="80">
								<a href="admin.php?m=ventasEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=ventas&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
							</td>
						</tr>
						<tr>
							<td>611416</td>
							<td>Cable UTP 1m </td>
							<td>$70.00 </td>
							<td>x4 </td>
							<td>$280.00 </td>
							<td width = "80">
								<a href="admin.php?m=ventasEitar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=ventas&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<th colspan="2">Clave de Artículo</th>
						<th colspan="2">
						<input type="text" class="pull-right form-control input-sm" style="width:100%;" name="clave" value="" />
						</th>
						<th colspan="2">
							<a href="admin.php?m=ventas&del=" class="btn btn-sm btn-default"> <i class="fa fa-plus"></i> </a>
						</th>
					</tfoot>
				</table>
			</div>
			<!-- <footer class="panel-footer">
				<div class="row">
					<div class="col-md-2">
						T
					</div>
				</div>
			</footer> -->
		</div>
		<div  class="col-md-3">
			<div class="row">
						<!-- <div class="col-sm-offset-6 col-sm-6 col-md-offset-8 col-md-4"> -->
						<div>
							<table class="table table-striped">
								<tr>
									<th>Resumen</th>
									<th></th>
								</tr>
								<tr>
									<th>Subtotal: </th>
									<td class="text-right"> $ <span id="subtotal">0.00</span> pesos</td>
								</tr>
								<tr>
									<th>IVA 16%: </th>
									<td class="text-right"> $ <span id="iva">0.00 </span> pesos</td>
								</tr>
								<tr>
									<th>Total: </th>
									<td class="text-right"> $ <span id="total"> 0.00 </span> pesos</td>
								</tr>
								<tr>
									<th>Anticipo: </th>
									<td class="text-right">
										<input type="text" class="pull-right form-control input-sm" style="width:40%;" name="anticipo" value="" />
									</td>
								</tr>
								<tr>
									<th>Metodo de Pago: </th>
									<td class="text-right">
										<select class="form-control" name="metodopago">
											<option>Efectivo</option>
											<option>Tarjeta</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Efectivo: </th>
									<td>
									<input type="text" 
										class="pull-right form-control input-sm" 
										style="width:40%;" name="efectivo" value="" />
										</td>
								</tr>
								<tr>
									<th>Cambio: </th>
									<td class="text-right">
										$ <span id="cambio"> 0.00 </span> pesos
									</td>
								</tr> 
							</table>
						</div>
					</div>

			<!-- <table class="table table-striped b-t b-light">
					<thead>
						<tr>
							<th >Servicio</th>
							<th width="300">Fecha Incial</th>
							<th width="300">Fecha Entrega</th>
							<th width="300">Costo</th>
							<th width="130"></th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>columna 1 </td>
							<td>columna 2 </td>
							<td>columna 3 </td>
							<td>columna 4 </td>
							<td width ="80">
								<a href="admin.php?m=ventasEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=ventas&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
							</td>
						</tr>
						<tr>
							<td>columna 1 </td>
							<td>columna 2 </td>
							<td>columna 3 </td>
							<td>columna 4 </td>
							<td width = "80">
								<a href="admin.php?m=ventasEitar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
								<a href="admin.php?m=ventas&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
							</td>
						</tr>

					</tbody>
				</table> -->
		</div>
		<!-- <div class="row">
			<div class="col-md-9"> 
				<table class="table table-striped">
					<tr>
						<td>Clave  de Producto</td>
						<td>
							<input type="text" class=" form-control input-sm" name="clave_manual" value="" />
						</td>
					</tr>

				</table>
			</div>
		</div> -->
	</div>

</section>