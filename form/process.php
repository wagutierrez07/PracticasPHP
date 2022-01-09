<!DOCTYPE html>
<html>
<head>
	<title>Practica mini proyecto 4</title>
</head>
<body>
<h1>Cuarto miniproyecto practico</h1>
<h2>Formularios Pt.I</h2>
<label>Formularios basicos</label>

<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
echo "<br>";
echo "Hola, mi nombre es " . $nombre . " y mi apellido es " . $apellido. ", tengo " . $edad . " años";
echo "<br>";
if ($edad<18) {
	echo $nombre . " ". $apellido. " es menor de edad";
}
else{
		echo $nombre . " ". $apellido. " es mayor de edad";
}
?>

</body>
</html>