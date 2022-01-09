<?php 

SESSION_START();
//error_reporting(0);
$varsesion=$_SESSION['usuario'];
if ($varsesion == null || $varsesion == '') {
	echo "Usted no tiene permisos para acceder";
die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
		<h1>Panel</h1>
		<h2>Bienviendido <?php echo $_SESSION['usuario']?></h2>
		<a href="cerrarSesion.php">Cerrar Sesion</a>
	<br>
</form>
</body>
</html>