<?php

if(!$_POST){
	header('location:index.php');
}

$tabla=$_POST["tabla"];
$maximo=$_POST["maximo"];
//$repetidor = 1;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario probatorio</title>
</head>
<body>
<h1>Calculadora con tablas</h1>
<h1>tablas del <?php echo $tabla?></h1>
<?php 
/*while ($repetidor <= $maximo) {
 	echo $tabla . " x " . $repetidor . " = " . $tabla*$repetidor ."<br>";
 	$repetidor++;
 }
*/
for ($i=1; $i <=$maximo; $i++) { 
echo $tabla . " x " . $i . " = " . $tabla*$i ."<br>";
}

  ?>
</body>
</html>