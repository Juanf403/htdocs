<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-users"></i> Grupo A </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=carteraAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Agregar Alumno a Lista </a>
		</div>
		<div class="col-sm-7 m-b-xs text-center">
		</div>
		<div class="col-sm-3">
			<form action="" id="buscarCliente" method="get">
				<div class="input-group">
					<input type="hidden" name="m" value="clientes">
					<input type="text" class="input-sm form-control" name="buscar" placeholder="Buscar">
					<span class="input-group-btn"> <button class="btn btn-sm btn-default" id="buscar" type="submit"> <i class="fa fa-search"></i> </button> </span>
				</div>
			</form>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="100">No.</th>
					<th width="300">Nombre</th>
					<th width="150">Num. Control</th>
					<th>Lun.</th>
					<th>Mar.</th>
					<th>Mier.</th>
					<th>Juev.</th>
					<th>Vie.</th>
					<th width="200"></th>
					<th width="400">Observ.</th>
				</tr>
			</thead>
						<tbody>
<?php
			if ( isset($_GET['del']) ){
				$del = mysql_real_escape_string($_GET['del']);
				mysql_query("DELETE FROM clientes WHERE idclientes='".$del."'");
			}

			if ( isset($_GET['buscar']) ){
				$buscar = mysql_real_escape_string($_GET['buscar']);
				$consulta  = "SELECT * FROM clientes WHERE 
					(nombre LIKE '%".$buscar."%' OR 
						direccion LIKE '%".$buscar."%' OR 
						telefono LIKE '%".$buscar."%' OR 
						email LIKE '%".$buscar."%' OR 
					ORDER BY nombre ASC";
					$url = "admin.php?m=clientes&buscar=".$buscar;
			} else {
				$consulta  = "SELECT * FROM clientes ORDER BY nombre ASC";
				$url = "admin.php?m=clientes";
			}

			##### PAGINADOR #####
			$rows_per_page = 20;

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
?>
				<tr>
					<td>1</td>
					<td>Juan Manuel Ahumada Vazquez</td>
					<td>13100105</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td>
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-warning"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=cartera&del=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
				</tr>			
				<tr>
					<td>1</td>
					<td>Pedro Perez Ibarra</td>
					<td>13100593</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td>
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-warning"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=cartera&del=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Gerardo Abiel Diaz Fresnillo</td>
					<td>13100886</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td>
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-warning"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=cartera&del=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
					<td>Lorem ipsum dolor sit amet, consectetur</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Valeria Ivonne Valdez Sanchez</td>
					<td>13100104</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
					<td>
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=carteraEditar&id=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-warning"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=cartera&del=<?php echo $q->idcartera; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
					<td>Lorem ipsum dolor sit amet, consectetur a</td>
				</tr>
<?php
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