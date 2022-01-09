
	
<?php 
if (isset($_POST['submit'])) {
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$correo=$_POST["correo"];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
	<h1>Registro</h1>
	<label>Nombre</label>
	<br>
	<input type="text" name="nombre">
	<br>
	<label>Edad</label>
	<br>
	<input type="text" name="edad">
	<br>
	<label>Correo</label>
	<br>
	<input type="text" name="correo">
	<br>
	<input type="submit" value="enviar" name="submit">
		<br>

<?php 
echo "<label>Errores notables: </label>";
include ('validacion.php');
?>
	<br>
</form>
</body>
</html>