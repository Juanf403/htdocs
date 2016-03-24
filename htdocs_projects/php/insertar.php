<?php 
include("db.php");
if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['password']) && !empty($_POST['password'])) 
{

$con = mysql_connect($host,$user,$password) or die("problemas al conectar");
mysql_select_db($db,$con) or die("problemas al conectar la bd");


mysql_query("INSERT INTO codigof(nombre,password) values('$_POST[nombre]','$_POST[password]')", $con);
echo "Datos insertados";
}else{
	echo "Problemas al insertar datos";
}

 ?>