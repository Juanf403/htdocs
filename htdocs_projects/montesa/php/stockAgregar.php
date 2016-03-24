<?php

if ( isset($_POST['articulo']) ){

	$articulo 		= mysql_real_escape_string($_POST['articulo']);
	$marca 			= mysql_real_escape_string($_POST['marca']);
	$tipo  			= mysql_real_escape_string($_POST['tipo']);
	$stock  		= mysql_real_escape_string($_POST['stock']);
	$precio      	= mysql_real_escape_string($_POST['precio']);
	$precioventa  	= mysql_real_escape_string($_POST['precioventa']);
	$sucursal		= mysql_real_escape_string($_POST['sucursal']);
	$observaciones  = mysql_real_escape_string($_POST['observaciones']);
	$caducidad  	= mysql_real_escape_string($_POST['caducidad']);


/*Insert into productos(nombre, precio_compra, precio_venta,tipo,marca,observaciones)
Values
('objeto1',25.95,34.95,'tipo prueba','marca prueba','observaciones de prueba'),
('Alienware R5',27999.99,34999.99,'electronicos','Dell Alienware','It\'s an Alienware!'),
('objeto 2',25.95,34.95,'tipo prueba 2','marca 2 prueba','observaciones de prueba2');

insert into stock(id_producto,sucursal, cantidad) VALUES 
(1,'poniente',200)*/

//stock='".$stock."',
/*echo "INSERT INTO productos SET nombre='".$articulo."',marca='".$marca."',tipo='".$tipo."',precio_compra='".$precio."',precio_venta='".$precioventa."',observaciones='".$observaciones."'";
echo mysql_insert_id("INSERT INTO productos SET nombre='".$articulo."',marca='".$marca."',tipo='".$tipo."',precio_compra='".$precio."',precio_venta='".$precioventa."',observaciones='".$observaciones."'");*/
echo "INSERT INTO productos SET nombre='".$articulo."',marca='".$marca."',tipo='".$tipo."',precio_compra='".$precio."',precio_venta='".$precioventa."',observaciones='".$observaciones."'";
if (mysql_query("INSERT INTO productos SET nombre='".$articulo."',marca='".$marca."',tipo='".$tipo."',precio_compra='".$precio."',precio_venta='".$precioventa."',observaciones='".$observaciones."'") ){
	$id = mysql_insert_id();
	mysql_query("INSERT INTO stock SET id_producto='".$id."',sucursal='".$sucursal."',cantidad='".$stock."',caducidad='".$caducidad."'");
	/*if ( mysql_query("INSERT INTO stock SET fecha='".date("Y-m-d")."',articulo='".$articulo."',marca='".$marca."',tipo='".$tipo."',stock='".$stock."',precio='".$precio."',precioventa='".$precioventa."',observaciones='".$observaciones."'") ){*/
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-file-text-o"></i> Agregar Objeto
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Articulo</label>
								<div class="col-lg-9"><input type="text" name="articulo" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Marca</label>
								<div class="col-lg-9"><input type="text" name="marca" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Tipo</label>
								<div class="col-lg-9"><input type="text" name="tipo" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Stock</label>
								<div class="col-lg-9"><input type="text" name="stock" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-6 control-label">Precio Compra</label>
								<div class="col-lg-6"><input type="text" name="precio" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-6 control-label">Precio Venta</label>
								<div class="col-lg-6"><input type="text" maxlength="" name="precioventa" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Sucursal</label>
								<div class="col-lg-9">
									<select name="sucursal" id="option" class="form-control">
										<option value="Norte">Norte</option>
										<option value="Poniente">Poniente</option>
									</select>
								</div>
							</div>
							<!-- <div class="form-group">
								<label class="col-lg-3 control-label">Sucursal</label>
								<div class="col-lg-9"><input type="text" name="sucursal" class="form-control" placeholder=""></div>
							</div> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group"> 
								<label class="col-lg-3 control-label">Caducidad</label> 
								<div class="col-lg-9">
									<input class="input-sm input-s datepicker-input form-control"  value="12-02-2013" name="caducidad" data-date-format="dd-mm-yyyy" type="text"> 
								</div> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Observaciones</label>
								<div class="col-lg-9"><textarea class="form-control" name="observaciones" style="height:85px;" placeholder=""></textarea></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=stock" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
