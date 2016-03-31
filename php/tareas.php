<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Tareas</header>
	
	<div class="row wrapper">
		<div class="col-sm-12 m-b-xs">
			<a href="admin.php?m=tareasAgregar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Tarea</a> &nbsp;
			<a href="admin.php?m=tareas&estado=Pendiente" class="btn btn-sm btn-default"><i class="fa fa-clock-o"></i> Ver Pendientes</a>
			<a href="admin.php?m=tareas&estado=Finalizado" class="btn btn-sm btn-default"><i class="fa fa-check"></i> Ver Finalizado</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light" id="diagnosis_list">
			<thead>
				<tr>
					<th width="40"></th>
					<th width="100">Fecha</th>
					<th>Tarea</th>
					<th width="100">Estado</th>
					<th width="150">Asignado a</th>
					<th width="150">Creado Por</th>
					
					<th width="260"></th>
					<?php 
						if ( isset($_GET['estado']) ){
							$estado = sqli($_GET['estado']);

							if ($estado == "Finalizado") {
								echo "<th>Finalizado </th>";
							}

						}
					?>
				</tr>
			</thead>
			<tbody>
<?php

			if (isset($_GET['del'])){
				mysql_query("DELETE FROM tareas WHERE idtareas='".$_GET['del']."'");
			} else if ( isset($_GET['finalizado']) ){
				mysql_query("UPDATE tareas SET estado='Finalizado',fechafinal='".date("Y/m/d")."' WHERE idtareas='".$_GET['finalizado']."'");
			} else if ( isset($_GET['reactivar']) ){
				mysql_query("UPDATE tareas SET estado='Pendiente',fechafinal='".date("NULL")."' WHERE idtareas='".$_GET['reactivar']."'");
			}

			if ( isset($_GET['estado']) ){
				$estado = sqli($_GET['estado']);

				if ( $_SESSION['userTp'] == "Administrador" ){
					$ventas  = mysql_query("SELECT * FROM tareas JOIN usuarios ON usuarios.id=tareas.idasignado WHERE estado='".$estado."' ORDER BY idtareas DESC") or die(mysql_error());	
				} else {
					$ventas  = mysql_query("SELECT * FROM tareas JOIN usuarios ON usuarios.id=tareas.idasignado WHERE estado='".$estado."' AND idasignado='".$_SESSION['userId']."' ORDER BY idtareas DESC") or die(mysql_error());
				}

			} else {
				if ( $_SESSION['userTp'] == "Administrador" ){
					$ventas  = mysql_query("SELECT * FROM tareas JOIN usuarios ON usuarios.id=tareas.idasignado WHERE estado='Pendiente' ORDER BY idtareas DESC") or die(mysql_error());	
				} else {
					$ventas  = mysql_query("SELECT * FROM tareas JOIN usuarios ON usuarios.id=tareas.idasignado WHERE estado='Pendiente' and idasignado='".$_SESSION['userId']."' ORDER BY idtareas DESC") or die(mysql_error());
				}
			}
			
			
			while($v = mysql_fetch_object($ventas)){
				switch ($v->estado) {
					case 'Pendiente':
						$color = "bg-warning";
					break;
					case 'Finalizado':
						$color = "bg-success";
					break;
				}
?>
				<tr>
					<td><a href="admin.php?m=tareasVer&id=<?php echo $v->idtareas; ?>" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i></a></td>
					<td class=""><?php echo $v->fecha; ?></td>
					<td class="">
						<?php
							if ($v->archivo) {
							 	echo "<a href='http://localhost:8080/php/archivos/".$v->archivo."' target='_blank'><button class='btn btn-default'><li class='fa fa-cloud-download'></li> Ver Archivo</button></a><br>";
							 }  
							echo str_replace("\n","<br>",$v->tarea); 
						?>
					</td>
					<td class="text-center ">
						<label class="label <?php echo $color; ?>"><?php echo $v->estado; ?></label>
<?php 
						if ($v->estado == "Finalizado"){
							echo '<br>'.$v->fechafinal;
						}
?>
					</td>
					<td class="text-center "><?php echo $v->nombre; ?></td>
					<td class="text-center "><?php 

						$idcreado = $v->idcreado;
						$resultado = mysql_fetch_object(mysql_query("SELECT nombre from usuarios where id=".$idcreado));
						echo $resultado->nombre;
					 ?></td>
					<td class="text-center ">
<?php
					if ( $_SESSION['userTp'] == "Administrador" ){
?>
						<a href="admin.php?m=tareasEditar&id=<?php echo $v->idtareas; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=tareas&del=<?php echo $v->idtareas; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
						&nbsp;&nbsp;&nbsp;
<?php 
						if ($v->estado == "Pendiente") {
 ?>						
						<a href="admin.php?m=tareas&finalizado=<?php echo $v->idtareas; 
						?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> Finalizado</a>
<?php 
						}else{
?>						
						<a href="admin.php?m=tareas&estado=Finalizado&reactivar=<?php echo $v->idtareas; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-undo"></i> Reactivar</a>
<?php  
						}
?>	
<?php
					} else {
						if ($v->estado != "Finalizado"){
?>
							<a href="admin.php?m=tareas&finalizado=<?php echo $v->idtareas; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> Finalizado</a>
<?php
						}

					}
?>
					</td>
					<?php 
						if ($v->estado == "Finalizado") {
							echo "<td >".$v->fechafinal."</td>";
						}
					 ?>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
	</div>

</section>