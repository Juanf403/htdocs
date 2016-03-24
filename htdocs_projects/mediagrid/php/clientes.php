 <section class="scrollable padder"> 
 	<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
 		<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li> 
 		<li><a href="#">UI kit</a></li> 
 		<li><a href="#">Form</a></li> 
 		<li class="active">Form wizard</li> 
 	</ul> 
 	<div class="m-b-md"> 
 		<h3 class="m-b-none">Form wizard</h3> 
 	</div> 
 	<div class="panel panel-default wizard"> 
 		<div class="wizard-steps clearfix" id="form-wizard"> 
 			<ul class="steps"> 
 				<li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1</li> 
 				<li data-target="#step2"><span class="badge">2</span>Step 2</li> 
 				<li data-target="#step3"><span class="badge">3</span>Step 3</li> 
 			</ul> 
 		</div> 
 		<div class="step-content clearfix"> 
 				<form class="m-b-sm"> 
	 				<div class="step-pane active" id="step1">
	 					<div class="panel-body">
							<div class="panel-body">
								<div class="panel">
								<form id="demo-dropzone" action="#" class="dropzone dz-clickable">
									<div class="dz-default dz-message">
										<div class="dz-icon icon-wrap icon-circle icon-wrap-md">
											<i class="fa fa-cloud-upload fa-3x"></i>
										</div>
										<div>
											<p class="dz-text">Drop files to upload</p>
											<p class="text-muted">or click to pick manually</p>
										</div>
									</div>
								</form>
							</div>
							</div>
						</div>
	 				</div> 
	 				<div class="step-pane" id="step2"> <p>Your email:</p>
	 					<div class="table-responsive">
							<table class="table table-striped b-t b-light">
								<thead>
									<tr>
										<th>Imagen</th>
										<th>Texto</th>
										<th width="60"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>columna 1</td>
										<td>columna 2 </td>
										<td>
											<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
										</td>
									</tr>
									<tr>
										<td>columna 1</td>
										<td>columna 2 </td>
										<td>
											<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
										</td>
									</tr>

								</tbody>
							</table>
						</div> 
	 				</div> 
	 				<div class="step-pane" id="step3">This is step 3</div> 
	 			</form> 
	 			<div class="actions pull-left"> 
	 				<button type="button" class="btn btn-default btn-sm btn-prev" disabled="disabled">Prev</button> 
	 				<button type="button" class="btn btn-default btn-sm btn-next" data-last="Finish">Next</button> 
	 			</div> 
	 		</div> 
	</div> 	
</section>