<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-picture-o"></i> Sliders</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-2 m-b-xs">
			<a href="admin.php?m=slidersAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Slider</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th> Slider </th>
					<th width="160"> </th>
				</tr>
			</thead>
			<tbody>
<?php
			
		if ( isset($_GET['del']) ){
			$del = mysql_real_escape_string($_GET['del']);
			unlink("../images/sliders/".$_GET['file']);
			mysql_query("DELETE FROM sliders WHERE idslider='".$del."'");
		}

		$consulta = mysql_query("SELECT * FROM sliders ORDER BY orden ASC");

		while($q = mysql_fetch_object($consulta)){
			echo '<tr>
					<td><img src="../images/sliders/'.$q->archivo.'" style="width:100%;"/></td>
					<td class="text-center">
						<a href="admin.php?m=sliders&del='.$q->idslider.'&file='.$q->archivo.'" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>';
		}
?>
			</tbody>
		</table>
	</div>

</section>