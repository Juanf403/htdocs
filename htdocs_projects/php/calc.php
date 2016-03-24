<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="proc.php" method="post" name="calc" >
	<label for="">Coloque los valores</label><br>
		<input type="text" name="c1"><br><br>
		<input type="text" name="c2" id=""><br><br>
		<input type="text" name="c3" id=""><br><br>
		<label for="">Selecciona la operacion: <br><br>
		<select name="lista" id="">
			<option value="sumar">Sumar</option>
			<option value="restar">Restar</option>	
			<option value="multiplicar">Multiplicar</option>
			<option value="dividir">Dividir</option>
		</select>
		</label><br><br>
		<input type="submit" value="Ver Resultados" >
	</form>
</body>
</html>