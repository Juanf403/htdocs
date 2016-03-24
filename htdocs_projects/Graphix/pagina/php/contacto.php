<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="content" class="row">
					<div class="span12">
						<div id="post-14" class="post-14 page type-page status-publish hentry">
							<div class="row ">
								<div class="span4 ">
									<h2>Graphix</h2>
									
									<address>
										<strong>
											Avenida Guerrero 1839 <br>
											Colonia Juárez<br>
											88209 Nuevo Laredo, Tamps.<br>
											Teléfono: 867 714 7486<br>
											Teléfono: 867 712 4541<br>
											Correo: <a href="mailto:impresiones@gpx.mx">impresiones@gpx.mx</a>
										</strong>
									</address>

									<h2>Sucursal</h2>
									<address>
										<strong>
										Gonzalez 4445 <br>
										Colonia Hidalgo <br>
										Tel&eacute;fono: 867 712 ­4541<br>
										Correo: <a href="mailto:sucursal@gpx.mx">sucursal@gpx.mx</a>
										</strong>
									</address>
								</div>
								<div class="span8 ">
									<h2>Envianos un mensaje</h2>
<?php
									if ( isset($_POST['your-name']) ){

										$name = $_POST['your-name'];
										$mail = $_POST['your-email'];
										$fone = $_POST['your-phone'];
										$msgs = $_POST['your-message'];

										$body = "Nombre: ".$name."\n";
										$body .= "Correo: ".$mail."\n";
										$body .= "Telefono: ".$fone."\n\n";
										$body .= "Mensaje: \n".$msgs;

										if ( mail("rodolfo.resendez@f403.mx", "Contacto Pagina Web: ".$name, $body) ){
											echo '<div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" style="display: block;" role="alert">Mensaje enviado correctamente, gracias.</div>';
										} else {
											echo '<div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-error" style="display: block;" role="alert">Error intenta nuevamente.</div>';
										}

									}
?>
									<div class="" dir="ltr">
										<div class="screen-reader-response"></div>
										<form name="" action="" method="post" class="wpcf7-form">
											<div class="row-fluid">
												<p class="span4 field"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre:" required></span> </p>
												<p class="span4 field"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail:" required></span> </p>
												<p class="span4 field"><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Teléfono:" required></span> </p>
											</div>
											<p class="field">
												<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Mensaje:" required></textarea></span>
											</p>
											<p class="submit-wrap">
												<input type="submit" value="send" class="wpcf7-form-control wpcf7-submit btn btn-primary">
											</p>
											<div class="wpcf7-response-output wpcf7-display-none"></div>
										</form>
									</div>
								</div>
							</div> 
							<div class="clear"></div> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>