<?php 

$fi=fopen("archivo.txt","a")
or die("problemas al crear archivo");

fwrite($fi, "Datos: ");
fwrite($fi, "\n");
fwrite($fi, $_POST['nombre']);
fwrite($fi, "\n");
fwrite($fi, $_POST['comentario']);
fwrite($fi, "\n");
fwrite($fi, "----------------------\n\n");
fclose($fi);
echo "Datos Guardados";
 ?>