<?php

$id = xss($_GET['id']);

?>

<div class="row">
	<div class="col-lg-12">
		<ul class="breadcrumb" style="font-size:25px"> 
			<li><a href="admin.php"><i class="fa fa-home"></i> Inicio</a></li> 
			<li><a href="admin.php?m=folder&id=1000-1050"><i class="fa fa-folder"></i> 1000 - 1050 </a></li> 
			<li><a href="#"><i class="fa fa-file"></i> 1000</a></li> 
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<embed src="pdf/pantallas seguros.pdf" width="100%" height="1000px">
	</div>
</div>