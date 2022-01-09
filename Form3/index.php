<!DOCTYPE html>
<html>
<head>
	<title>Miniproyecto 7</title>
</head>
<body>
	<h1>Septimo miniproyecto basico</h1>
	<h2>Formularios Pt.IV</h2>
	<h3>Formulario con arreglos</h3>
	<br>
<form action="index.php" method="post">
		<input type="text" name="lista">
	<input type="submit" value="generar">
</form>

<form action="process.php" method="post">
<?php if(isset($_POST["lista"])){?>
	<?php for ($i=0; $i < $_POST["lista"]; $i++) { 
?>
 <input type="text" name="personas[]" placeholder="personas"><br>
<?php }?>
<?php }?>
<input type="submit" value="procesar">
</form>
</body>
</html>