<?php 
include '../db.php';
	
		$query = "SELECT count(idSolicitud) as totalNotification FROM solicitud WHERE StatusPeticion ='Pendiente' ";
		$resultado  = mysql_query($query);
		$obj =  mysql_fetch_object($resultado);
		echo $obj->totalNotification;
 ?>