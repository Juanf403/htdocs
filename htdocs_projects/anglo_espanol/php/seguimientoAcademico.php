
<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Seguimiento academico
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-4 col-md-5">
						<div class="panel panel-default">
							<header class="panel-heading">
								<i class="fa fa-plus icon"></i> Busqueda
							</header>
						  <div class="panel-body">
						  	<div class="form-group">
							    <label class="col-sm-2 control-label"> Nombre </label>
							    <div class="col-sm-10">
							        <input class="form-control" placeholder="Nombre del Alumno" type="text">
							    </div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-11">
									<br>
									<button class="btn btn-primary pull-right" id="buscar"> Buscar</button>	
								</div>
							</div>
							<section class="panel portlet-item" style="opacity: 1; z-index: 0;">
							    <header class="panel-heading">
							       Resultados
							    </header>
							    <div class="list-group bg-white">
							        <a class="list-group-item" id="kinder" onClick="kinder()"><i class="fa fa-user"></i> Alumno Kinder</a> 
							        <a class="list-group-item" id="Primaria" onClick="primaria()"><i class="fa fa-user"></i> Alumno Primaria</a> 
							        <a class="list-group-item" id="Secundaria" onClick="secundaria()"><i class="fa fa-user"></i> Alumno Secundaria</a> 
							        <a class="list-group-item" id="Prepa"  onclick="prepa()"><i class="fa fa-user"></i> Alumno Prepa</a> 
							        
							    </div>
							</section>
						  </div>
						</div>
					</div>
					<div class="col-lg-8 col-md-7">
						<div class="row">
							<div class="col-lg-4">
								<span id="nombre">Nombre :</span>
								<span id="NombreM"></span>
							</div>
							<div class="col-lg-4">
								<span id="Parciales"></span>
								<span id="NumSemestre"></span>
							</div>
							<div class="col-lg-4">
								<span>Nivel Academico :</span>
								<span id="NivelAcademico"></span>
							</div>
						</div>
						<table id="tablaDescripcion" class="table">
							<tr>
								<th>Materia</th>
								<th>Parcial 1</th>
								<th>Parcial 2</th>
								<th>Parcial 3</th>
								<th>Calificacion</th>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
</section>