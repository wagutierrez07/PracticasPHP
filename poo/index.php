<!DOCTYPE html>
<html>
<head>
	<title>Mini proyecto 6</title>
	
</head>
<body>
	<h1>Sexto miniproyecto basico</h1>
	<h2>Formularios Pt.III</h2>
	<h3>Formulario con POO</h3>
	<br>
		<hr>
	<form action="form.php" method="post">
		<label>Cedula</label>
		<br>
		<input type="number" name="cedula" min="600000" max="33000000">
		<br>
		<label>Nombre</label>
		<br>
		<input type="text" name="nombre">
		<br>
		<label>Edad</label>
		<br>
		<input type="number" name="edad" min="18" max="40">
		<br>
		<hr>
		<label>Direccion de correo</label>
		<br>
		<input type="text" name="correo">
		<br>
		<label>Carrera</label>
		<br>
		<input type="text" name="carrera">
		<br>
		<label>Semestre</label>
		<br>
		<input type="text" name="semestre">
		<br>
		<hr>
			<br>
		<input type="Submit" value="enviar">
	</form>
</body>
</html>