<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-book"></i> Control Escolar </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=carteraAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Maestro </a>
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
	<h2 class="text-center">Materias</h2>	
	<div class="m-b-sm"> <div class="btn-group btn-group-justified"> <a href="#" class="btn btn-primary">Español</a> <a href="#" class="btn btn-info">Matematicas</a> <a href="#" class="btn btn-success">Fisica</a> </div> </div>
	
</section>