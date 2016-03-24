<?php

if ( isset($_FILES['file']['name']) ){

	if (!empty($_FILES)) {
     
     	$galeria 	= $_POST['galeria'];
	    $tempFile 	= $_FILES['file']['tmp_name'];
	    $filename 	= $_FILES['file']['name'];
	    $targetPath = "../images/sliders/";
	    $targetFile =  $targetPath.$filename;
	 
	    if ( move_uploaded_file($tempFile,$targetFile) ) {

			if ( mysql_query("INSERT INTO galeria SET categoria='".$galeria."',archivo='".$filename."'") ){

				$errorMsg = '<div class="alert alert-success">
					<i class="fa fa-check"></i> Imagen agregada correctamente.
				</div>';
				
			} else {
				$errorMsg = '<div class="alert alert-danger">
						<i class="fa fa-times"></i> Error, intenta nuevamente.
					</div>';
			}	    	
	    }
    }

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-plus icon"></i> Agregar Slider
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post" enctype="multipart/form-data">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-md-2 control-label">Categoria</label>
								<div class="col-md-10">
									<select name="galeria">
										<option>Anuncios</option>
										<option>Bordados</option>
										<option>Diseno</option>
										<option>Imprenta</option>
										<option>Impresion</option>
										<option>Neon</option>
										<option>Rotulacion</option>
										<option>Serigrafia</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-md-2 control-label">Archivo</label>
								<div class="col-md-10"><input type="file" name="file" class="form-control"></div>
							</div>
						</div>
					</div>

					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=sliders" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
