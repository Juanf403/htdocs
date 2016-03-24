<section class="panel panel-default pos-rlt clearfix">
    <div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <form class="form-horizontal"role="form" action="" method="post">
                                    <h3 class="m-t-none m-b text-center">Registro</h3>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Nombre</label>
                                                <div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Tel&eacute;fono</label>
                                                <div class="col-lg-9"><input type="text" name="telefono" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Direcci&oacute;n</label>
                                                <div class="col-lg-9"><input type="text" name="direccion" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Usuario</label>
                                                <div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">E-Mail</label>
                                                <div class="col-lg-9"><input type="text" name="correo" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Contraseña</label>
                                                <div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-block btn-success pull-right text-uc m-t-n-xs"><strong><i class="fa fa-check"></i> Registrate</strong></button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.modal-content --> 
                </div><!-- /.modal-dialog -->
            </div>
<div class="col-md-6">
				<div class="panel panel-warning">
                    <div class="panel-heading">
                        <div class="panel-title">Reserva aqui</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body">
                        <form id="" class="form-horizontal" role="form">
                            <div class="row">
                            <div class="col-md-6">
                                <div style="" class="input-group">
                                <span class="input-group-addon">Fecha <i class="fa fa-calendar"></i></span>
                                <input id="fecha" type="date" class="form-control" name="username" value="" placeholder="usuario ò e-mail">                                        
                            </div>
                            </div>
                            <div class="col-md-6">
                            	<div style="" class="input-group">
                                    <span class="input-group-addon">Hora: <i class="fa fa-clock-o"></i></span>
                                    <input id="hora" type="time" class="form-control" name="hora" placeholder="00:00">
                                </div>
                            </div>
                            </div>
                            <h3 class="">Personas:</h3>
                            <div class="row">
                        	 <div class="col-md-4">
                            	<div style="margin-bottom: 20px" class="input-group">
                                    <span class="input-group-addon">Niños<small> 0-11 :</small> <i class=""></i></span>
                                    <input id="niños" type="number" class="form-control" name="niños" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-bottom: 20px" class="input-group">
                                    <span class="input-group-addon">Adultos<small> 12-69 :</small> <i class=""></i></span>
                                    <input id="niños" type="number" class="form-control" name="adultos" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-bottom: 20px" class="input-group">
                                    <span class="input-group-addon">Mayores<small> 69 +:</small> <i class=""></i></span>
                                    <input id="niños" type="number" class="form-control" name="hora" placeholder="">
                                </div>
                            </div>
                            </div>
                            <div style="" class="form-group">
                                <div class="col-sm-6 controls">
                                  <a id="btn-login" href="#" class="btn btn-success">Registrar  </a>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                    <br>
                                </div>
                            </div>
                        </div>    
                        </form>     
                    </div>                     
                </div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Iniciar</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Olvidaste tu Contraseña?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 20px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="usuario o correo">                                        
                                    </div>
                                
                            <div style="margin-bottom: 20px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="contraseña">
                                    </div>
                                    
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="index.php?m=entrar" class="btn btn-success">Entrar  </a>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Entrar con Fecebook</a>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            No tienes cuenta!
                                        <a href="#modal-form" data-toggle="modal" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Registrate
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>                     
                    </div>
			</div>
</section>