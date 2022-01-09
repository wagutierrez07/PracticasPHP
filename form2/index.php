<!DOCTYPE html>
<html>
<head>
	<title>Mini proyecto 5</title>
</head>
<body>
<h1>Quinto miniproyecto practico</h1>
<h2>Formularios Pt.II</h2>
<label>Formularios intermedios</label>
<hr>
<form action="process.php" method="post">
	<label>Ingrese su nombre</label>
	<br>
	<input type="text" name="nombre" required>
	<br>
	<label>Ingrese su apellido</label>
	<br>
	<input type="text" name="apellido" required>
	<br>
	<label>Ingrese su fecha de nacimiento</label>
	<br>
	<input type="date" name="fecha"required>
	<br>
	<hr>
	<label>Genero</label>
	<br>
	<input type="radio" name="genero" value="femenino" required>femenino
	<input type="radio" name="genero" value="masculino" required>masculino
		<br>
		<hr>
		<label>Lenguajes a aprender</label>
		<input type="checkbox" name="lenguaje[]" value="C++" >C++
	<input type="checkbox" name="lenguaje[]" value="Java" >Java
	<input type="checkbox" name="lenguaje[]" value="Python" >Python
	<input type="checkbox" name="lenguaje[]" value="Ruby" >Ruby
	<input type="checkbox" name="lenguaje[]" value="JavaScript" >JavaScript
	<input type="checkbox" name="lenguaje[]" value="PHP
	" >PHP
		<br>
	<hr>
	<input type="submit" value="Enviar">
</form>

</body>
</html>

