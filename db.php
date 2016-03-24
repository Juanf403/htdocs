<?php 
/*
	ya en server
$serv = "localhost";
$user = "root";
$pass = "F403CentosAdmin";
$data = "f403_interno";
*/

/*	Local  */
$serv = "localhost";
$user = "root";
$pass = "";
$data = "f403_interno";

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
