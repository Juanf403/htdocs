<?php
$id 	= mysql_real_escape_string($_GET['id']);

if ( isset($_GET['final']) ){
	$final = mysql_real_escape_string($_GET['final']);

	mysql_query("UPDATE ordenes SET estado='".$final."' WHERE idorden='".$id."' ");	
}
$data 	= mysql_fetch_object(mysql_query("SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE idorden='".$id."' LIMIT 1"));

switch ($data->estado) {
	case 0:
		$errorMsg = '<div class="alert alert-warning"><i class="fa fa-clock-o"></i> <strong>Orden pendiente.</strong></div>';
	break;
	case 1:
		$errorMsg = '<div class="alert alert-success"><i class="fa fa-check"></i> <strong>Orden finalizada.</strong></div>';
	break;
}
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar </a>
				</div>
				<i class="fa fa-pencil icon"></i> Ver Orden: <?php echo $data->idorden; ?>
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-xs-offset-6 col-xs-6 col-sm-offset-8 col-sm-4 col-md-offset-9 col-md-3">
							<div class="form-group">
								<label class="col-md-3 control-label">Fecha</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="fecha" placeholder="" value="<?php echo $data->fecha; ?>" readonly>
								</div>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label class="col-md-2 control-label"> Cliente </label>
								<div class="col-md-10">
									<input type="text" name="cliente[]" value="<?php echo $data->nombre; ?>" class="form-control" readonly> 
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label class="col-md-2 control-label"> Correo </label>
								<div class="col-md-10">
									<input type="text" name="cliente[]" value="<?php echo $data->email; ?>" class="form-control" readonly> 
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="form-group">
								<label class="col-md-2 control-label"> Tel&eacute;fono </label>
								<div class="col-md-10">
									<input type="text" name="cliente[]" value="<?php echo $data->telefono; ?>" class="form-control" readonly> 
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="table-responsive">
							<table class="table table-striped b-t b-light" id="tabla1">
								<thead>
									<tr>
										<th>SERVICIO/DESCRIPCION</th>
									</tr>
								</thead>
								<tbody>
<?php
								$total     = 0;
								$servicios = mysql_query("SELECT * FROM servicios WHERE ordenId='".$data->idorden."' ORDER BY idservicio ASC");
								while($s = mysql_fetch_object($servicios)){
?>
									<tr>
										<td>
											<input type="text" value="<?php echo $s->servicio; ?>" name="servicio[]" class="form-control m-b" placeholder="Servicio" readonly>
											<textarea class="form-control" name="descripcion[]" style="height:100px;" placeholder="Descripcion" readonly><?php echo $s->descripcion; ?></textarea>
										</td>
									</tr>
<?php
								}
?>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
<?php
						if ( $data->estado == "0" ){
							echo '<a href="admin.php?m=asignarVer&id='.$data->idorden.'&final=1" class="btn btn-sm btn-success pull-left"><i class="fa fa-check icon"></i> Finalizado</a>';
						} else {
							echo '<a href="admin.php?m=asignarVer&id='.$data->idorden.'&final=0" class="btn btn-sm btn-warning pull-left"><i class="fa fa-clock-o icon"></i> Pendiente</a>';
						}
?>
							<a href="admin.php?m=asignar" class="btn btn-sm btn-default"><i class="fa fa-reply icon"></i> Regresar</a>
						</div>
					</div>
				</form>
			</div>
		</section>

<div class="row">
	<div class="col-md-4">
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-pencil icon"></i> Agregar archivos
			</header>
			<div class="panel-body">
				<form action="php/upload.php?id=<?php echo $id; ?>" id="dropzone" class="dropzone" enctype="multipart/form-data">
  					<div class="fallback">
    					<input name="file" type="file" multiple />
  					</div>
				</form>
			</div>
		</section>
	</div>
	<div class="col-md-8">
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-file icon"></i> Listado de archivos
			</header>
			<div class="panel-body">
				<ul class="list-group">
<?php
				if ( isset($_GET['delfile']) ){
					$idx = mysql_real_escape_string($_GET['idx']);

					@unlink("uploads/".$_GET['delfile']);
					mysql_query("DELETE FROM archivos WHERE idarchivo='".$idx."'");
				}

				$files = mysql_query("SELECT * FROM archivos WHERE idorden='".$id."' ORDER BY idarchivo DESC");
				while($f = mysql_fetch_object($files)){
					echo '<li class="list-group-item">
	    				<a href="admin.php?m=asignarVer&id='.$id.'&delfile='.$f->archivo.'&idx='.$f->idarchivo.'" class="btn btn-xs btn-danger pull-right"><i class="fa fa-trash-o"></i></a>
	    				<a href="uploads/'.$f->archivo.'" target="_blank">'.$f->archivo.'</a>
  					</li>';
				}
?>
				</ul>
			</div>
		</section>
	</div>
</div>