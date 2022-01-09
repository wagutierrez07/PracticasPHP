<?php 
if (!$_POST) {
	header("Location:index.php");
	}

	function iva(){
$precio=$_POST["precio"];
$iva=$_POST["iva"];
if ($iva==12) {
	$impuesto = 0.12;
}else{
	$impuesto = 0.16;
}
$total=$precio*$impuesto;
return array($precio, $iva, $total);
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1>Calculo de IVA</h1>
 <?php

$resultado=iva();
echo "El precio a pagar de " .$resultado[0]. " con un impuesto del " . $resultado[1]. "% es de:  " . $resultado[2];

 ?>
 </body>
 </html>