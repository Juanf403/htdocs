<?php

include '../db.php';

$q = isset($_POST['query']) ? mysql_real_escape_string($_POST['query']) : '';

$misclientes = array();
$clientes = mysql_query("SELECT * FROM clientes WHERE nombre LIKE '%".$q."%' ORDER BY nombre ASC");
while( $c = mysql_fetch_array($clientes)){
	$misclientes[] = array_map("utf8_encode", $c);
}

echo json_encode($misclientes);

?>