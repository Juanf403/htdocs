<?php
include 'db.php';

$id   = mysql_real_escape_string($_GET['id']);
$data = mysql_fetch_object(mysql_query("SELECT * FROM ordenes JOIN clientes ON clientes.idcliente=ordenes.clienteId WHERE idorden='".$id."' LIMIT 1"));

#print_r($data);
#die;
?>
<!DOCTYPE html>
<html lang="en" class="">
<head> <meta charset="utf-8" />
<title>ORDEN DE TRABAJO: <?php echo $data->idorden; ?></title>
<link rel="stylesheet" href="css/app.v1.css" type="text/css" media="all"/>

<script src="js/app.v1.js"></script>
<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
<style type="text/css">
body{
	font-weight: normal;
	font-family: normal;
	font-style: normal;
	color:black;
	font-size:12px;
}
label{
	font-weight: bold;
}
.fuentechica2{
	font-size: 12px;	
}
.fuentemaschica{
	font-size: 10px;	
}
</style>
</head>
<body class="bg-white" onload="window.print();">

<div class="row">
	<div class="col-xs-9">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>ORDEN DE TRABAJO</h2>
			</div>
		</div>
		<div class="row">
			<div class="fuentemaschica">
				<div class="col-xs-4">
					Ricardo Juárez Medrano<br>
					R.F.C. JUMR­790925­NG2<br>
					Gral. Fco. Munguía 2018 Fracc. Haciendas J. Longoria<br>
					Tel.: (867) 714­7486<br>
					Nuevo Laredo, Tamaulipas<br>
				</div>
				<div class="col-xs-4">
					SUCURSAL:<br>
					Av. Guerrero 1839<br>
					Col. Juárez<br>
					Tel.: (867) 714­7486<br>
					impresiones@gpx.mx<br>
					www.gpx.mx
				</div>
				<div class="col-xs-4">
					SUCURSAL: <br>
					Gonzalez 4445 <br>
					Col. Hidalgo <br>
					Tel.: (867) 712­4541<br>
					sucursal@gpx.mx<br>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-3 text-right">
		<img src="images/LOGOTIPO.png" style="width:75%;">
	</div>
</div>

<div class="row m-t">
	<div class="fuentechica2">
		<div class="col-xs-8">
			<table class="table table-bordered">
				<tr>
					<th style="padding:5px;">NOMBRE</th>
					<td style="padding:5px;"><?php echo $data->nombre; ?></td>
				</tr>
				<tr>
					<th style="padding:5px;">EMAIL</th>
					<td style="padding:5px;"><?php echo $data->email; ?></td>
				</tr>
				<tr>
					<th style="padding:5px;">TELEFONO</th>
					<td style="padding:5px;"><?php echo $data->telefono; ?></td>
				</tr>
				<tr>
					<th style="padding:5px;">FACTURA</th>
					<td style="padding:5px;"><?php echo $data->factura; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-xs-4">
			<table class="table table-bordered">
				<tr>
					<th style="font-size:14px;" width="100px">FOLIO A</th>
					<td style="font-size:14px;" width="100px"><?php echo $data->idorden; ?></td>
				</tr>
				<tr>
					<th style="font-size:14px;" width="100px">FECHA</th>
					<td style="font-size:14px;" width="100px"><?php echo $data->fecha; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="row ">
	<div class=" text-left">
		<div class="col-xs-12">
			<table class="table b-t b-light" id="tabla1">
				<thead>
					<tr>
						<th>SERVICIO/DESCRIPCION</th>
						<th width="90">P/UNIT</th>
						<th width="90">CANTIDAD</th>
						<th width="120">PRECIO</th>
					</tr>
				</thead>
				<tbody>
<?php
					$total     = 0;
					$servicios = mysql_query("SELECT * FROM servicios WHERE ordenId='".$data->idorden."' ORDER BY idservicio ASC");
					while($s = mysql_fetch_object($servicios)){
						$total += $s->precio;
?>
						<tr>
							<td>
								<label style="font-size:12px;"><?php echo $s->servicio; ?></label>
								<p class="text-left" style="font-size:12px;"><?php echo str_replace("\n", "<br>", $s->descripcion); ?></p>
							</td>
							<td class="v-middle text-center">
								<?php echo $s->unitario; ?>
							</td>
							<td class="v-middle text-center">
								<?php echo $s->cantidad; ?>
							</td>
							<td class="v-middle text-center">
								<?php echo $s->precio; ?>
							</td>
						</tr>
<?php
					}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="row ">
	<div class=" text-center">
		<div class="col-sm-offset-6 col-sm-6 col-xs-offset-8 col-xs-4">
			<table class="table table-striped">
<?php
			if ($data->factura == "Si"){
				echo '<tr>
						<th>Subtotal: </th>
						<td class="text-right"> $ <span id="subtotal">'.$total.'</span> pesos</td>
					</tr>';
				$iva = ($total * .16);
				echo '<tr>
						<th>IVA 16%: </th>
						<td class="text-right"> $ <span id="iva">'.$iva.'</span> pesos</td>
					</tr>';

				$total += $iva;
				echo '<tr>
						<th>Total: </th>
						<td class="text-right"> $ <span id="total"> '.$total.' </span> pesos</td>
					</tr>';
			} else {
				echo '<tr>
						<th>Total: </th>
						<td class="text-right"> $ <span id="total"> '.$total.' </span> pesos</td>
					</tr>';
			}

			#$consulta = "SELECT * FROM pagos WHERE ordenId='".$data->idorden."' AND descripcion='Anticipo' LIMIT 1";
			$consulta = "SELECT * FROM pagos WHERE ordenId='".$data->idorden."'";
			if ( mysql_num_rows(mysql_query($consulta)) ){
				$pago = mysql_fetch_object(mysql_query($consulta));
				$pagoCantidad = $pago->cantidad;
				$resta = $total - $pagoCantidad;
			} else {
				$resta = $total;
				$pagoCantidad = "0";
			}

			
?>
				<tr>
					<th>Abonado: </th>
					<td class="text-right"> $ <span id="total"> <?php echo $pagoCantidad; ?> </span> pesos</td>
				</tr>
				<tr>
					<th>Restan: </th>
					<td class="text-right"> $ <span id="total"> <?php echo $resta; ?> </span> pesos</td>
				</tr>

			</table>
		</div>
	</div>
</div>
<div class="row ">
	<div class=" text-center">
		<hr>
		<div class="col-xs-12">
			<strong class="fuentechica2 text-danger">FAVOR DE PRESENTAR SU NOTA AL MOMENTO DE AUTORIZAR DISE&Ntilde;O O RECOGER SU TRABAJO DE LO CONTRARIO SE LE COBRARAN $50 PESOS</strong><br>
			<strong class="fuentechica2">NOTA: NO NOS HACEMOS RESPONSABLES POR TRABAJOS CON MAS DE 30 DIAS.</strong><br>
			<strong class="fuentechica2">TODA CANCELACI&Oacute;N TIENE UN COSTO DEL 20%.</strong><br><br><br>
		</div>
	</div>
</div>
	<!-- Bootstrap -->
	<!-- App -->
	<script src="js/app.plugin.js"></script>
	
</body>
</html>