<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Asignar trabajo</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-6 m-b-xs">
			<a href="admin.php?m=asignar&asignadoId=0" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Sin Asignar</a>
			<a href="admin.php?m=asignar&estado=0" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i> Ver pendientes</a>
			<a href="admin.php?m=asignar&estado=1" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Ver finalizados</a>
		</div>
		<div class="col-xs-12 col-sm-6 text-right">
				<form action="" method="get" class="form-inline">
					<input type="hidden" name="m" value="asignar"/>
					<select name="disenador" class="form-control" >
						<option></option>
<?php
						$dis = mysql_query("SELECT * FROM usuarios WHERE privilegio='3' ORDER BY nombre ASC");
						while($d = mysql_fetch_object($dis) ){
							echo '<option value="'.$d->idusuario.'">'.$d->nombre.'</option>';
						}
?>
					</select>
					<button class="btn btn-sm btn-default" type="submit"> <i class="fa fa-search"></i> </button>
				</form>
		</div>
	</div>

<?php
	if ( isset($_POST['ide']) ){
		$ide 		= mysql_real_escape_string($_POST['ide']);
		$disenador 	= $_POST['disenador'];

		#mysql_query("UPDATE ordenes SET asignadoId='".implode(",", $disenador)."' WHERE idorden='".$ide."'");
		mysql_query("DELETE FROM asignados WHERE idorden='".$ide."'");

		$sql = array();
		foreach ($disenador as $de) {
			$sql[] = '('.$ide.','.$de.')';
		}
		mysql_query("INSERT INTO asignados (idorden,idusuario) VALUES ".implode(",", $sql));
		#$dis = mysql_fetch_object(mysql_query("SELECT * FROM usuarios WHERE idusuario='".$disenador."' LIMIT 1"));
		echo '<div class="col-md-12">
				<div class="alert alert-success">
					<i class="fa fa-check"></i> Orden ID: '.$ide.' asignada
				</div>
			</div>';
	}

?>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="90"> Folio </th>
					<th width="100"> Fecha </th>
					<th> Cliente/Servicios </th>
					<th width="200">Asignar a</th>
					<th width="100"> </th>
				</tr>
			</thead>
			<tbody>
<?php
		if ( isset($_GET['disenador']) ){
			$disena = mysql_real_escape_string($_GET['disenador']);
			$url = "admin.php?m=asignar&disenador=".$disena;
			$consulta = "SELECT * FROM asignados JOIN ordenes on ordenes.idorden=asignados.idorden JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE asignados.idusuario='".$disena."' ORDER BY ordenes.idorden DESC";
		} else if ( isset($_GET['asignadoId']) ){
			#$estado = mysql_real_escape_string($_GET['asignadoId']);
			#$query = mysql_query("SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE ordenes.asignadoId='".$estado."' ORDER BY idorden DESC");
			$url = "admin.php?m=asignar&asignadoId=0";
    		$consulta = "SELECT 
    						orden.idorden,
    						orden.clienteId,
    						orden.fecha,
    						orden.estado,
    						clientes.nombre,
    						(select COUNT(*) from asignados a WHERE a.idorden=orden.idorden) as conteo
    					FROM ordenes as orden 
    					JOIN clientes on clientes.idcliente=orden.clienteId
    					WHERE 
    						(select COUNT(*) from asignados a WHERE a.idorden=orden.idorden)=0 
    					ORDER BY idorden";
		} else if ( isset($_GET['estado']) ){
			$estado = mysql_real_escape_string($_GET['estado']);
			$url = "admin.php?m=asignar&estado=".$estado;
			$consulta = "SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE ordenes.estado='".$estado."' ORDER BY idorden DESC";
		} else {
			$url = "admin.php?m=asignar";
			$consulta = "SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId ORDER BY idorden DESC";
		}

##### PAGINADOR #####
$rows_per_page = 30;

if(isset($_GET['pag']))
	$page = mysql_real_escape_string($_GET['pag']);
else if (@$_GET['pag'] == "0")
	$page = 1;
else 
	$page = 1;

$num_rows 		= mysql_num_rows(mysql_query($consulta));
$lastpage		= ceil($num_rows / $rows_per_page);    		
$page     = (int)$page;
if($page > $lastpage){
	$page = $lastpage;
}
if($page < 1){
	$page = 1;
}
$limit 		= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
$consulta  .=" $limit";

$consulta = mysql_query($consulta);
##### PAGINADOR #####

		while($q = mysql_fetch_object($consulta)){
			switch ($q->estado) {
				case "1":
					$label = "<label class='label bg-success'>Finalizado</label>";
				break;
				case "0":
					$label = "<label class='label bg-warning'>Pendiente</label>";
				break;
			}

			echo '<tr>
					<td class="text-center">'.$q->idorden.'</td>
					<td>'.$q->fecha.'</td>
					<td>'.$q->nombre.' '.$label.'<br>';
					$servicios = mysql_query("SELECT * FROM servicios WHERE ordenId='".$q->idorden."' ORDER BY idservicio ASC");
					while($s = mysql_fetch_object($servicios)){
						echo '<small>'.$s->servicio.'</small><br>';
					}
					echo '</td>';

					echo '<td>
					<form action="" class="form-inline" method="post">
						<input type="hidden" name="ide" value="'.$q->idorden.'">
						<select name="disenador[]" class="form-control input-sm" multiple>
								<option></option>';
							$usu = mysql_query("SELECT * FROM usuarios WHERE privilegio='3' ORDER BY nombre");
							while($u = mysql_fetch_object($usu)){

								$query2 = mysql_query("SELECT * FROM asignados WHERE idorden='".$q->idorden."' AND idusuario='".$u->idusuario."' LIMIT 1");
								if ( mysql_num_rows($query2) ){
									echo '<option value="'.$u->idusuario.'" selected>'.$u->nombre.'</option>';
								} else {
									echo '<option value="'.$u->idusuario.'">'.$u->nombre.'</option>';	
								}
								
							}
					echo '</select>
						<button class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
					</form>
					</td>';
					echo '<td class="text-center">
						<a href="admin.php?m=asignarVer&id='.$q->idorden.'" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a>
					</td>
				</tr>';
		}
?>
			</tbody>
		</table>
	</div>

	<footer class="panel-footer">
		<div class="row">
			<div class="col-sm-12 text-right text-center-xs">
				<ul class="pagination pagination-sm m-t-none m-b-none">
<?php
	if($num_rows != 0){
		$nextpage = $page + 1;
		$prevpage = $page - 1;

		if ($page == 1) {
			echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>';
			
			echo '<li class="active"><a href="">1</a></li>';
			
			for($i= $page+1; $i<= $lastpage ; $i++){
				echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
			}

			if($lastpage >$page ){
				echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
			}else{	
				echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
			}
		} else {
			echo '<li><a href="'.$url.'&pag='.$prevpage.'"><i class="fa fa-chevron-left"></i></a></li>';
			
			for($i= 1; $i<= $lastpage ; $i++){
				if($page == $i){
					echo '<li class="active"><a href="#">'.$i.'</a></li>';
				} else {
					echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
				}
			}
         
			if($lastpage >$page ){
				echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
			} else {
				echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
			}
		}
	}
?>
				</ul>
			</div>
		</div>
	</footer>

</section>