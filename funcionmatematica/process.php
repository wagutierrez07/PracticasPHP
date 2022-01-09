<?php
$redondo=$_POST["redondo"];
$redonda=$_POST["redonda"];
$redondx=$_POST["redondx"];
$base=$_POST["base"];
$potencia=$_POST["potencia"];
$raiz=$_POST["raiz"];
$aleatorio=$_POST["aleatorio"];
echo round($redondo);
echo "<br>";
echo floor($redonda);
echo "<br>";
echo ceil($redondx);
echo "<br>";
echo pow($base, $potencia);
echo "<br>";
echo sqrt($raiz);
echo "<br>";
echo rand($aleatorio,1000);
?>