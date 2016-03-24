<?php
$id = mysql_real_escape_string($_GET['ver']);

if ( isset($_FILES['file']['name']) ){

	if (!empty($_FILES)) {
     
	    $tempFile = $_FILES['file']['tmp_name'];
	    $filename = $_FILES['file']['name'];
	    $targetPath = "../images/galeria/";
	    $targetFile =  $targetPath.$filename;
	 
	    if ( move_uploaded_file($tempFile,$targetFile) ) {

			if ( mysql_query("INSERT INTO galeria SET lugar='".$id."',imagen='".$filename."'") ){

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
<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-picture-o"></i> Galeria</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<form class="bs-example form-horizontal" action="" method="post" enctype="multipart/form-data">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
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
							<a href="admin.php?m=galeria" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
			</form>	
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th> Imagen </th>
					<th width="100"> </th>
				</tr>
			</thead>
			<tbody>
<?php
			$gal = mysql_query("SELECT * FROM galeria WHERE lugar='".$id."' ORDER BY idgaleria DESC");
			while($q = mysql_fetch_object($gal)){
				echo '
				<tr>
					<td><img src="../images/galeria/'.$q->imagen.'" style="width:500px;"/></td>
					<td class="text-center">
						<a href="admin.php?m=galeriaEditar&ver='.$id.'&del='.$q->idgaleria.'&file='.$q->imagen.'" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>';
			}
?>				
			</tbody>
		</table>
	</div>

</section>