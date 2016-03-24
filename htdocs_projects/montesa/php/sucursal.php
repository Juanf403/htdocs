<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-book"></i> SUCURSALES </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=carteraAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Sucursal </a>
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
	<section class="scrollable wrapper w-f">
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
			<a href="admin.php?m=materias">
				<div class="panel bg-f403 panel-colorful text-center">
					<div class="panel-body">
						<i class="fa fa-picture-o" style="font-size:90px;"></i>
					</div>
					<div class="bg-white" style="padding:5px;">
						<h4 class="mar-no text-thin">Sucursal Norte </h4>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
			<a href="admin.php?m=clientes">
				<div class="panel bg-f403 panel-colorful text-center">
					<div class="panel-body">
						<i class="fa fa-picture-o" style="font-size:90px;"></i>
					</div>
					<div class="bg-white" style="padding:5px;">
						<h4 class="mar-no text-thin"> Sucursal Sur</h4>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

</section>