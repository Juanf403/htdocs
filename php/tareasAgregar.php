<?php
if ( isset($_POST['tarea']) ){

	$asignar = mysql_real_escape_string($_POST['asignar']);
	$fecha 	 = date("Y/m/d");
	$tarea   = mysql_real_escape_string($_POST['tarea']);
	$descrip = mysql_real_escape_string($_POST['descripcion']);
	

	if ( mysql_query("INSERT INTO tareas(idcreado,idasignado,fecha,tarea,estado,descripcion) VALUES ('".$_SESSION['userId']."','".$asignar."','".$fecha."','".$tarea."','Pendiente','".$descrip."')") ){
		if($_FILES["archivo"]["name"][0]){
			$carpetaDestino ="php/archivos/";
	        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++) {  

	            if($_FILES["archivo"]["type"][$i] == "application/msword" || $_FILES["archivo"]["type"][$i] == "application/pdf" || $_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png"){

	                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
	                {
	                    $origen		=$_FILES["archivo"]["tmp_name"][$i];
	                    $destino    =$carpetaDestino.$_FILES["archivo"]["name"][$i];

	                    if(@move_uploaded_file($origen, $destino)){
	                    	$id =  mysql_insert_id();
	                    	if (mysql_query("UPDATE tareas SET archivo='".$_FILES["archivo"]["name"][$i]."' where idtareas=".$id)) {
	                    	 	$errorMsg = '<div class="alert alert-success">
								<i class="fa fa-check"></i> Tarea agregada correctamente.
								</div>';
	                    	 } 
	                        

	                    }else{
	                        $errorMsg = '<div class="alert alert-success">
								<i class="fa fa-check"></i> Tarea agregada correctamente.
							</div>'.'<div class="alert alert-danger">
							<i class="fa fa-times"></i> No se pudo mover el archivo.
						</div>';
	                    }

	                }else{
	                    echo "<br>No se existe la carpeta".$user;
	                }

	            }else{ 
	                echo "<br>".$_FILES["archivo"]["name"][$i]." - Este tipo de archivo no esta permitido Intente con otro.";

	            }

	        }

	    }else{
	    	$errorMsg = '<div class="alert alert-success">
			<i class="fa fa-check"></i> Tarea agregada correctamente.
		</div>';
	    }
		
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-plus icon"></i> Agregar Tarea
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" enctype="multipart/form-data" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tarea</label>
								<div class="col-lg-10">
									<input name="tarea" type="text" class="form-control">
								</div>
							</div>							
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-2 control-label" >Descripcion</label>
								<div class="col-md-10">
									<textarea name="descripcion" class="form-control" style="height:200px;"></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-lg-2 control-label">Asignar a</label>
								<div class="col-lg-10">
									<select class="form-control" name="asignar">
<?php
								$tareas = mysql_query("SELECT * FROM usuarios ORDER BY nombre ASC");
								while($t = mysql_fetch_object($tareas)){
									echo "<option value='".$t->id."'>".$t->nombre."</option>";
								}
?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<label class="col-lg-2 control-label">Subir archivo</label>
							<div class="col-lg-10">
								<div class="form-group">
			                    	<input id="archivo"  name="archivo[]" type="file" class="file" multiple=true data-preview-file-type="any">
			                	</div>	
							</div>

						</div>
					</div>
					<div class="line line-solid line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=tareas" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>