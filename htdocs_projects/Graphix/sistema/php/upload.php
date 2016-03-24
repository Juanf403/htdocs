<?php

include '../db.php';

$storeFolder = 'uploads';   //2
$id = mysql_real_escape_string($_GET['id']);
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
    $filename = $_FILES['file']['name'];

    $targetPath = "../".$storeFolder."/";  //4
     
    $targetFile =  $targetPath. $filename;  //5
 
    if ( move_uploaded_file($tempFile,$targetFile) ) {
    	mysql_query("INSERT INTO archivos SET idorden='".$id."',archivo='".$filename."'");
    }
     
}

?>