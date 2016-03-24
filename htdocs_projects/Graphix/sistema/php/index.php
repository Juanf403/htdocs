<div class="row">
<?php
if ($_SESSION['userPv'] == "3"){
?>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=misordenes">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-file-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Mis Ordenes</h4>
				</div>
			</div>
		</a>
	</div>
<?php
}

if ($_SESSION['userPv'] != "3"){
?>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=ordenes">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-file-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Ordenes</h4>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=clientes">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-smile-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Clientes</h4>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=asignar">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-male" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Asignar</h4>
				</div>
			</div>
		</a>
	</div>
<?php
}

if ($_SESSION['userPv'] == "1"){
?>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=usuarios">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-users" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Usuarios</h4>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=sliders">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-picture-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Sliders</h4>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
		<a href="admin.php?m=galeria">
			<div class="panel bg-f403 panel-colorful text-center">
				<div class="panel-body">
					<i class="fa fa-picture-o" style="font-size:90px;"></i>
				</div>
				<div class="bg-white" style="padding:5px;">
					<h4 class="mar-no text-thin">Galeria</h4>
				</div>
			</div>
		</a>
	</div>

<?php
}
?>
</div>