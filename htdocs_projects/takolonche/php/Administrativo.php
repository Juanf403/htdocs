<section id="content">
					<section>
						<!--<header class="header bg-white b-b b-light"> <p>Layout with black color</p> </header>-->
						<section class="scrollable wrapper w-f">
							<div class="row">
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
									<a href="" data-toggle="modal" data-target="#myModal">
										<div class="panel bg-f403 panel-colorful text-center">
											<div class="panel-body">
												<i class="fa fa-plus-square" style="font-size:90px;"></i>
											</div>
											<div class="bg-white" style="padding:5px;">
												<h4 class="mar-no text-thin">Agregar Mesa</h4>
											</div>
										</div>
									</a>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
									<a href="admin.php?m=platillosAgregar">
										<div class="panel bg-f403 panel-colorful text-center">
											<div class="panel-body">
												<i class="fa fa-cutlery" style="font-size:90px;"></i>
											</div>
											<div class="bg-white" style="padding:5px;">
												<h4 class="mar-no text-thin">Platillos</h4>
											</div>
										</div>
									</a>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
									<a href="admin.php?m=meseroAgregar">
										<div class="panel bg-f403 panel-colorful text-center">
											<div class="panel-body">
												<i class="fa fa-male" style="font-size:90px;"></i>
											</div>
											<div class="bg-white" style="padding:5px;">
												<h4 class="mar-no text-thin">Agregar Usuarios</h4>
											</div>
										</div>
									</a>
								</div>
							</div>
							
						</section>	
					</section>					
</section>
<!-- Modal Agregar MESA-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Autorizacion</h4>
      </div>
      <div class="modal-body form-group">
        <label for="pwd"><p>Ingrese su Contraseña :</p></label>
        <input type="password" id="password" class="form-control" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="Aceptar" data-dismiss="modal">Aceptar</button>
      </div>
    </div>

  </div>
</div>
