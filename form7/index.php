<!DOCTYPE html>
<html>
<head>
	<title>Formulario probatorio</title>
</head>
<body>
<h1>Calculo de IVA</h1>
<form action="process.php" method="post">
	<label>Precio a pagar</label>
	<br>
	<input type="text" name="precio">
	<br>
	<label>Iva</label>
	<br>
	<select name="iva">
		<option value="12">12%</option>
		<option value="16">16%</option>
	</select>
	<br>
	<input type="submit" value="enviar">
</form>
</body>
</html>