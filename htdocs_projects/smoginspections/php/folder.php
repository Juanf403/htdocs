<?php

$folder = xss($_GET['id']);
?>

<div class="row">
	<div class="col-lg-12">
		<ul class="breadcrumb" style="font-size:25px"> 
			<li><a href="admin.php"><i class="fa fa-home"></i> Inicio</a></li> 
			<li><a href="#"><i class="fa fa-folder"></i> <?php echo $folder; ?></a></li> 
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
		<a href="admin.php?m=file&id=1001">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-file-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">1001</h4>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
		<a href="admin.php?m=file">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-file-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">1002</h4>
				</div>
			</div>
		</a>
	</div>
</div>