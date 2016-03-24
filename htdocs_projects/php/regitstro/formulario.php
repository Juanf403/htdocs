<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="registrar_c.php" method="post">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Usuario</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="pw"></td>
			</tr>
			<tr>
				<td>Confirmar Password</td>
				<td><input type="text" name="pw2"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Registrar"></td>
			</tr>

		</table>
	</form>
</body>
</html>