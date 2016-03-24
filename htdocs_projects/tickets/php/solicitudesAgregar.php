<section class="panel panel-default">
	<header class="panel-heading">
				<i class="fa fa-ticket icon"></i> Agregar Solicitud
			</header>
	<div class="panel-body">
		<form class="bs-example form-horizontal"  method="post" action="">
				<div class="row">
					<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-1 control-label">Empresa: </label>
								<div class="col-lg-6"><input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa"></div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-1 control-label">Reporto: </label>
								<div class="col-lg-6"><input type="text" name="reporto" id="reporto" class="form-control" placeholder=""></div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <label class="col-sm-1 control-label" id="prioridadInterna">Prioridad Interna: </label>
						    <div class="col-sm-4">
						        <select class="form-control">
						        	<option value="0"></option>
						        	<option value="1">URGENTE</option>
						        	<option value="2">MODERADA</option>
						        	<option value="3">NORMAL</option>
						        	<option value="4">PUEDE ESPERAR</option>
						        	<option value="5">IDEA</option>
						        </select>
						    </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <label class="col-sm-1 control-label">Fecha:</label>
						    <div class="col-sm-10">
						        <input class="input-sm input-s datepicker-input form-control" id="fecha" name="fecha" data-date-format="dd-mm-yyyy" size="16" type="text" value="1-01-2016">
						    </div>
						</div>
					</div>
				</div>
				   <div class="row">
				        <div class='col-md-12'>
				            <div class="form-group">
				                <label class="col-sm-1 control-label">Hora: </label>
				                <div class='col-sm-1 input-group date ' id='datetimepicker3'>
				                		<input type='text' class="form-control" id="hora" name="hora" />
				                    	<span class="input-group-addon">
				                        <span class="glyphicon glyphicon-time"></span>  
				                </div>
				            </div>
				        </div>
				        <script type="text/javascript">
				            $(function () {
				                $('#datetimepicker3').datetimepicker({
				                    format: 'LT'
				                });
				            });
				        </script>
    				</div>
    				<div class="row">
						<div class="col-md-12">
								<div class="form-group">
									<label class="col-sm-1 control-label">Tipo de solicitud: </label>
									<div class="col-sm-6"><input type="text" name="solicitudTipo" id="solicitudTipo" class="form-control" placeholder=""></div>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
								<div class="form-group">
									<label class="col-sm-1 control-label">Problema: </label>
									<textarea class="col-sm-6" id="problema" name="problema" rows="6"></textarea>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label class="col-sm-1 control-label">Prioridad : </label>
							    <div class="col-sm-4">
							        <select class="form-control" >
							        	<option value="0"></option>
							        	<option value="1">NO URGENTE</option>
							        	<option value="2">NORMAL</option>
							        	<option value="3">MODERADA</option>
							        	<option value="4">URGENTE</option>
							        </select>
							    </div>
							</div>
						</div>
					</div>
		
		</form>
	</div>
</section>