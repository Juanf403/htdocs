<?php 
/*
$serv = "localhost";
$user = "u203151_ventas";
$pass = "Zv;%I.sJLpoF";
$data = "u203151_ventas";
*/

$serv = "localhost";
$user = "root";
$pass = "";
$data = "f403_graphix";

$serv = "localhost";
$user = "u203151_web";
$pass = "rP7!hB+$;WAi";
$data = "u203151_web";

### FUNCIONES DE SEGURIDAD ###
function xss($vuln){
	return htmlentities(strip_tags($vuln));
}
function sqli($vuln){
	return mysql_real_escape_string($vuln);
}
##############################

mysql_connect($serv, $user, $pass);
mysql_select_db($data);

$errorMsg = "";
?>