<?php

if ( isset($_POST['nombre']) ){

	$inicio_vig 	= mysql_real_escape_string($_POST['inicio_vig']);
	$vencimiento    = mysql_real_escape_string($_POST['vencimiento']);
	$clientes       = mysql_real_escape_string($_POST['clientes']);
	$ramo           = mysql_real_escape_string($_POST['ramo']);
	$poliza         = mysql_real_escape_string($_POST['poliza']);
	$endozo         = mysql_real_escape_string($_POST['endozo']);
	$con_endozo     = mysql_real_escape_string($_POST['con_endozo']);
	$tip_endozo     = mysql_real_escape_string($_POST['tip_endozo']);
	$prima_neta     = mysql_real_escape_string($_POST['prima_neta']);
	$recargo        = mysql_real_escape_string($_POST['recargo']);
	$der_poliza     = mysql_real_escape_string($_POST['der_poliza']);
	$recargo        = mysql_real_escape_string($_POST['recargo']);
	$der_poliza     = mysql_real_escape_string($_POST['der_poliza']);
	$prim_pago      = mysql_real_escape_string($_POST['prim_pago']);
	$iva            = mysql_real_escape_string($_POST['iva']);
	$com_agente     = mysql_real_escape_string($_POST['com_agente']);
	$total          = mysql_real_escape_string($_POST['total']);
	$pago_sub       = mysql_real_escape_string($_POST['pago_sub']);
	$infoadicional  = mysql_real_escape_string($_POST['infoadicional']);

	

	if ( mysql_query() ){
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
					<a href="admin.php?m=endozos" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Endozos
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>

					<div class="row">
						<div class="col-md-6">
                             <div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Inicio de Vigencia:</label>
									<div class="col-lg-8"><input type="text" name="vigencia" class="form-control" placeholder=""></div>
								</div>
                            </div>
                            <div class="col-md-6"> 
								<div class="form-group">
									<label class="col-lg-4 control-label">Vencimiento:</label>
									<div class="col-lg-8"><input type="text" name="vencimiento" class="form-control" placeholder=""></div>
								</div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 col-sm-2 col-lg-3 control-label">Cliente</label>
								<div class="col-xs-3 col-sm-2 col-lg-2">
									<input type="text" name="cliente" class="form-control" placeholder="">
								</div>
								<div class="col-xs-6 col-sm-8 col-lg-7">
									<input type="text" name="cliente" class="form-control" placeholder="">
								</div>
							</div>
						</div>							
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="col-md-6">
								<div class="form-group">
									<label class=" col-lg-4 control-label">No P&oacute;liza:</label>
									<div class="col-lg-8"><input type="text" name="poliza" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">No Endozo:</label>
									<div class="col-lg-8"><input type="text" name="endozo" class="form-control" placeholder=""></div>
								</div>
							</div>
						</div>	
						<div class="col-md-6">
							<div  class="form-group">
								<label class="col-lg-3 control-label">Ramo:</label>
								<div class="col-lg-9"><input type="text" name="ramo" class="form-control" placeholder></div>
							</div>
						</div>
					</div>
					<div class="row">
	                    <div class="col-md-6">
	                        <div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-3 control-label">Concepto del Endozo:</label>
									<div class="col-lg-9"><input type="text" name="con_endozo" class="form-control" placeholder></div>
						   		 </div>
						   </div>
						</div>
						<div class="col-md-6 ">
							<div class="col-md-7">
								<div class="form-group">
									<label class="col-lg-5 control-label">Tipo de Endozo:</label>
									<div class="col-lg-7"><input type="text" name="tip_endozo" class="form-control" placeholder></div>
						   		 </div>
							</div>
							<div class="col-md-5">
								
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-6 control-label">Prima Neta:</label>
									<div class="col-lg-6"><input type="text" name="prim_neta" class="form-control" placeholder=""></div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-6 control-label">Recargo</label>
									<div class="col-lg-6"><input type="text" name="recargo" class="form-control" placeholder=""></div>
								</div>

								<div class="form-group">
									<label class="col-lg-6 control-label">Derecho de Poliza:</label>
									<div class="col-lg-6"><input type="text" name="derpoliza" class="form-control" placeholder=""></div>
								</div>
								<div class="form-group">
									<label class="col-lg-6 control-label">I.V.A:</label>
									<div class="col-lg-6"><input type="text" name="iva" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-6 control-label">Prima Total:</label>
									<div class="col-lg-6"><input type="text" name="total" class="form-control" placeholder=""></div>
								</div>

								<div class="form-group">
									<label class="col-lg-6 control-label">Forma de pago:</label>
									<div class="col-lg-6">
										<select class="form-control" name="formapago">
										  <option>Efectivo</option>
										  <option>Cheque</option>
										  <option>Transeferencia</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-6 control-label">Primer pago:</label>
									<div class="col-lg-6"><input type="text" name="prim_pago" class="form-control" placeholder=""></div>
								</div>
								<div class="form-group">
									<label class="col-lg-6 control-label">Pago subsecuente</label>
									<div class="col-lg-6"><input type="text" name="pago_sub" class="form-control" placeholder=""></div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group" style="">
								<label class="col-md-3 control-label">Información Adicional</label>
								<div class="col-md-9"><textarea name="infoadicional" class="form-control"  style="height:130px;"></textarea></div>
							</div>
						</div>

					</div>
		
			
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>

