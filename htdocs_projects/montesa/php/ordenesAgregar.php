<?php
0000
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar </a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Orden
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="container-fluid">
						<div class="form-group col-md-9"></div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-md-3 control-label">Fecha</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="fecha" placeholder="" value="<?php echo date("Y-m-d"); ?>">
									<!-- <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy"> -->
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
							<div class="form-group col-md-9">
									<label class="col-md-3 control-label"> Cliente </label>
									<div class="col-md-9">
										<input type="text" name="Cliente[]" class="form-control"> 
									</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<div class="col-md-3">
										<label class="control-label"> Factura </label>
									</div>	
									<div class="col-md-9">
										<select class="form-control" id="option">
											<option>si</option>	
											<option>no</option>
										</select>
									</div>
								</div>
							</div>	
							<div class="line line-dashed line-lg pull-in"></div>
						</div>
					</div>
					<div class="row">
						<div class="row wrapper">
							<div class="col-md-12" >
								<div class="input-group pull-right">
									<button class="btn btn-sm btn-success" id="agregar" type="button"> <i class="fa fa-plus"> Concepto </i></button>
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped b-t b-light" id="tabla1">
								<thead>
									<tr>
										<th>Concepto</th>
										<th width="150">Precio</th>
										<th width="150">Anticipo</th>
										<th width="50"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="text" name="concepto[]" class="form-control">
										</td>
										<td>
											<input type="text" name="precio[]" class="form-control">
										</td>
										<td>
											<input type="text" name="anticipo[]" class="form-control">
										</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Finalizar Orden</button>
							<a href="admin.php?m=ventas" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>

<script type="text/javascript">
    $("#agregar").click(function(){
        var nuevaFila = '<tr>'+
                                '<td><input type="text" name="concepto[]" class="form-control"></td>'+
                                '<td><input type="text" name="precio[]" class="form-control"></td>'+
                                '<td><input type="text" name="anticipo[]" class="form-control"></td>'+
                                '<td><button class="btn btn-sm btn-default clsEliminarFila"> <i class="fa fa-trash-o"></i></button></td>'+
                            '</tr>';
        $('table#tabla1 tr:last').after(nuevaFila);
        return false;
    });

    $(document).on('click','.clsEliminarFila',function(){
		var objFila = $(this).parents().get(1);
		$(objFila).remove();
	});
</script>