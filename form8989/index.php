

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
	<h1>Promedios</h1>
	<label>Nombre</label>
	<br>
	<input type="text" name="nombre">
	<br>
	<label>Nota 1</label>
	<br>
	<input type="text" name="nota1">
	<br>
	<label>Nota 2</label>
	<br>
	<input type="text" name="nota2">
	<br>
	<label>Nota 3</label>
	<br>
	<input type="text" name="nota3">
	<br>
	<input type="submit" value="enviar" name="submit">
	<br>
	
<?php 
if (isset($_POST['submit'])) {
	$nombre=$_POST["nombre"];
$nota1=$_POST["nota1"];
$nota2=$_POST["nota2"];
$nota3=$_POST["nota3"];
$promedio =($nota1+$nota2+$nota3)/3;
echo $nombre . " tu promedio es de: " . round($promedio, 2);
}


?>
</form>
</body>
</html>