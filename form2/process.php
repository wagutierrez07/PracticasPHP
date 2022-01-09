<!DOCTYPE html>
<html>
<head>
	<title>Practica mini proyecto 5</title>
</head>
<body>
<h1>Quinto miniproyecto practico</h1>
<h2>Formularios Pt.II</h2>
<label>Formularios intermedios</label>

<?php
$lenguajes=array();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];
$genero=$_POST["genero"];
$lenguaje=$_POST["lenguaje"];
echo "<br>";
echo "Hola, mi nombre es " . $nombre . " y mi apellido es " . $apellido. ". Naci el " . $fecha;
echo "<br>";
if ($fecha<=2002-07-26) {
echo "es menor de edad";
}
else{
	echo "es mayor de edad";
}
echo "<br>";
echo "Genero: ". $genero;
echo "<br>";
foreach ($lenguaje as $programa) {
	echo "el lenguaje a estudiar es: ".$programa."<br>";
	$lenguajes[$programa]=$programa;
}
?>
</body>
</html>