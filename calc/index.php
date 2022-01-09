<!DOCTYPE html>
<html>
<head>
	<title>
		Mini proyecto 3
	</title>
</head>
<body>
<h1>Tercer miniproyecto practico</h1>
<h2>calculadora</h2>
<form action="process.php" method="post">
	<h1>Introduzca un numero</h1>
	<br>
	<label>Numero 1</label>
	<input type="text" name="numero1">
	<br>
	<select name="opc">
		<option value="Sumar">Sumar</option>
		<option value="Restar">Restar</option>
		<option value="Multiplicar">Multiplicar</option>
		<option value="Dividir">Dividir</option>

	</select>
	<br>
	<label>Numero 2</label>
	<input type="text" name="numero2">
	<br>
	<input type="submit" value="enviar">
</form>
</body>
</html>