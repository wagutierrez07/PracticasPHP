<!DOCTYPE html>
<html>
<head>
	<title>Mini proyecto 4</title>
</head>
<body>
<h1>Cuarto miniproyecto practico</h1>
<h2>Formularios Pt.I</h2>
<label>Formularios basicos</label>
<form action="process.php" method="post">
	<label>Ingrese su nombre</label>
	<br>
	<input type="text" name="nombre" required>
	<br>
	<label>Ingrese su apellido</label>
	<br>
	<input type="text" name="apellido" required>
	<br>
	<label>Ingrese su edad</label>
	<br>
	<input type="number" name="edad" min="1" max="99" required>
	<br>
	<input type="submit" value="Enviar">
</form>
</body>
</html>

	