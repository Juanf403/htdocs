<?php

if ( isset($_POST['nombre']) ){

	$categoria 	= mysql_real_escape_string($_POST['categoria']);
	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$contacto  	= mysql_real_escape_string($_POST['contacto']);
	$correo  	= mysql_real_escape_string($_POST['correo']);
	$rfc  		= mysql_real_escape_string($_POST['rfc']);

	if ( mysql_query("INSERT INTO clientes SET fecha='".date("Y-m-d")."',categoria='".$categoria."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',contacto='".$contacto."',email='".$correo."',rfc='".$rfc."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
            <div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <form class="form-horizontal"role="form" action="" method="post">
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Hamburguesa con Queso</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>  
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">La Wea sin Queso</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">La Wea con Queso</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Tacos de Suaperro</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Costillas BBQ</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div><!-- /.modal-content --> 
                </div><!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="modal-form1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <form class="form-horizontal"role="form" action="" method="post">
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Soda de Durazno</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>  
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Limonada</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Agua de Jamaica</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Agua de Horchata</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Té Helado</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div><!-- /.modal-content --> 
                </div><!-- /.modal-dialog -->
            </div>
<div class="modal fade" id="modal-form2" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <form class="form-horizontal"role="form" action="" method="post">
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Cheesecake</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>  
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Crepas</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Pastel</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Flan</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <a href="admin.php?m=ordenes">
                                            <div class="panel bg-f403 panel-colorful text-center">
                                                <div class="panel-body">
                                                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                                                </div>
                                                <div class="bg-white" style="padding:5px;">
                                                    <h4 class="mar-no text-thin">Galletas de Coco</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div><!-- /.modal-content --> 
                </div><!-- /.modal-dialog -->
            </div>

				<div class="pull-right">
					<a href="admin.php" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Cliente
			</header>
			
<div class="rubix-panel-container-with-controls" data-reactid=
    ".1uywldqi9s0.2.0.0.0.0">
        

        <div class="rubix-panel-container" data-reactid=
        ".1uywldqi9s0.2.0.0.0.0.1" style=
        "z-index:9999998;overflow:;display:block;height:auto;">
            <div class="rubix-panel" data-reactid=".1uywldqi9s0.2.0.0.0.0.1.0">
                <div data-reactid=".1uywldqi9s0.2.0.0.0.0.1.0.0">
                    <div class="rubix-panel-header" data-reactid=
                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.0">
                        <div class="rubix-grid container-fluid" data-reactid=
                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0" style=
                        "z-index:9999983;">
                            <div class="row" data-reactid=
                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0">
                                <div class="col-xs-6" data-reactid=
                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.0" style=
                                "padding-top:25px;">
                                    <br data-reactid=".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.0.1">


                                    
                                </div>

                                <div class="col-xs-6 text-right" data-reactid=
                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1" style=
                                "padding-top:25px;">
                                    <h2 class="fg-black" data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.0"
                                    style="margin:0;margin-bottom:12.5px;">
                                    Mesa #1</h2>

                                    <div data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.1">
                                        Cliente: Wence Flow
                                    </div>

                                    <br data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.3">

                                    <address data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4">
                                        <strong class="fg-black50"
                                        data-reactid=".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.0">
                                        Sucursal Norte "Comidas"</strong><br data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.1">

                                        <span data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.2">
                                        Peru y Obregon # 3502
                                        </span><br data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.3">

                                        <span data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.4">
                                         Nuevo Laredo, Tamaulipas</span><br data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.5">

                                        <abbr data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.6"
                                        title="Phone">Tel:</abbr>
                                        <span data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.0.0.1.4.7">
                                        (867) 7-14-46-96</span>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <hr class="hidden-print" data-reactid=
                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.0.1" style=
                        "margin-top:0;">
                    </div>

                    <div class="rubix-panel-body" data-reactid=
                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1">
                        <div class="rubix-grid container-fluid" data-reactid=
                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0" style=
                        "z-index:9999982;">
                            <div class="row" data-reactid=
                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0">
                                <div class="col-xs-12" data-reactid=
                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0">
                                    <table class="table table-striped"
                                    data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0">
                                        <thead class=
                                        "bg-darkgrayishblue75 fg-white"
                                        data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0">
                                        <tr data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0.0">
                                            <th data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0.0.0">
                                                #</th>

                                                <th data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0.0.1">
                                                Item</th>

                                                <th data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0.0.2">
                                                Quantity</th>

                                                <th data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0.0.3">
                                                Unit Price</th>

                                                <th data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.0.0.4">
                                                Sub-total</th>
                                            </tr>
                                        </thead>

                                        <tbody data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1">
                                        <tr data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.0">
                                            <td data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.0.0">
                                                1</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.0.1">
                                                Tostadas de Cuerito</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.0.2">
                                                5 pcs</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.0.3">
                                                $13</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.0.4">
                                                $65</td>
                                            </tr>

                                            <tr data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.1">
                                            <td data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.1.0">
                                                2</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.1.1">
                                                Hamburguesa con Queso</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.1.2">
                                                2</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.1.3">
                                                $45</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.1.4">
                                                $90</td>
                                            </tr>

                                            <tr data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.2">
                                            <td data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.2.0">
                                                3</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.2.1">
                                                Soda de Durazno</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.2.2">
                                                2</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.2.3">
                                                $11</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.2.4">
                                                $22</td>
                                            </tr>

                                            <tr data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.3">
                                            <td data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.3.0">
                                                4</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.3.1">
                                                Biscuits con Mantequilla</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.3.2">
                                                3</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.3.3">
                                                $14</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.3.4">
                                                $42</td>
                                            </tr>

                                            <tr data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.4">
                                            <td data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.4.0">
                                                5</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.4.1">
                                                Quesadillas con Chicharron</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.4.2">
                                                10</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.4.3">
                                                $15</td>

                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.1.4.4">
                                                $150</td>
                                            </tr>
                                        </tbody>

                                        <tfoot class=
                                        "bg-darkgrayishblue75 fg-white"
                                        data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.2">
                                        <tr data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.2.0">
                                            <th colspan="3" data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.2.0.0">
                                                </th>

                                                <th data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.2.0.1">
                                                Total</th>

                                                <th data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.0.0.0.0.2.0.2">
                                                $369</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr class="hidden-print" data-reactid=
                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.1" style=
                        "margin-top:0;">

                        <div class="rubix-grid container-fluid" data-reactid=
                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2" style=
                        "z-index:9999981;">
                            <div class="row" data-reactid=
                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0">
                                <div class="col-xs-8" data-reactid=
                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.0">
                                    <p data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.0.0">
                                    <span data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.0.0.0"></span></p>

                                    <p data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.0.1">
                                    <strong data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.0.1.0">Muchas Gracias por su Preferencia, Deseamos que este con nosotros devuelta. Buen Dia!</strong></p>

                                    
                                </div>

                                <div class="col-xs-4" data-reactid=
                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1">
                                    <div class=
                                    "bg-darkgrayishblue75 text-uppercase text-centered"
                                    data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.0">
                                        <h5 class="subheader fg-white"
                                        data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.0.0"
                                        style="margin:0;padding:12.5px;">Monto</h5>
                                    </div>

                                    <div data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1">
                                        <table class="table" data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0">
                                        <tbody data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0">
                                            <tr data-reactid=
                                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.0">
                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.0.0">
                                                    Subtotal</td>

                                                    <td data-reactid=
                                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.0.1">
                                                    $369</td>
                                                </tr>

                                                <tr data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.1">
                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.1.0">
                                                    IVA (10%)</td>

                                                    <td data-reactid=
                                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.1.1">
                                                    $37</td>
                                                </tr>

                                                <tr data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.2">
                                                <td data-reactid=
                                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.2.0">
                                                    Total</td>

                                                    <td data-reactid=
                                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.2.0.1.1.0.0.2.1">
                                                    $406</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hidden-print" data-reactid=
                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.3" style=
                        "margin-top:0;">

                        <div class="rubix-grid container-fluid hidden-print"
                        data-reactid=".1uywldqi9s0.2.0.0.0.0.1.0.0.1.4" style=
                        "z-index:9999980;">
                            <div class="row" data-reactid=
                            ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.4.0">
                            
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="#modal-form" data-toggle="modal" onclick="$('#loginbox').hide(); $('#signupbox').show()">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-plus" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Agregar Platillo</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="admin.php?m=ordenes">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-minus" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Eliminar Platillo</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="#modal-form1" data-toggle="modal" onclick="$('#loginbox').hide(); $('#signupbox').show()">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-plus" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Agregar Bebidas</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="admin.php?m=ordenes">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-minus" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Eliminar Bebidas</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="#modal-form2" data-toggle="modal" onclick="$('#loginbox').hide(); $('#signupbox').show()">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-plus" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Agregar Postre</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="admin.php?m=ordenes">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-minus" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Eliminar Postre</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="admin.php?m=ordenes">
            <div class="panel bg-f403 panel-colorful text-center">
                <div class="panel-body">
                    <i class="fa fa-list-alt" style="font-size:90px;"></i>
                </div>
                <div class="bg-white" style="padding:5px;">
                    <h4 class="mar-no text-thin">Reporte</h4>
                </div>
            </div>
        </a>
    </div>
                                <div class="col-xs-12 text-right" data-reactid=
                                ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.4.0.0">
                                    <div data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.4.0.0.0">
                                        <button class=
                                        "btn btn-lg btn-outlined btn-darkgrayishblue75"
                                        data-reactid=
                                        ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.4.0.0.0.0"
                                        type="button">Imprimir</button>
                                    </div><br data-reactid=
                                    ".1uywldqi9s0.2.0.0.0.0.1.0.0.1.4.0.0.1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
					
				</form>
			</div>
		</section>
