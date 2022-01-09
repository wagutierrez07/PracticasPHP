<?php
$producto=$_POST["producto"];
$precio=$_POST["precio"];
$unidad=$_POST["unidad"];
$pago=$_POST["pago"];
$subtotal=$precio*$unidad;
if(!$_POST){
	header('location:index.php');
}
if ($pago=="tarjeta") {
	$descuento=$subtotal*0.2;
}
else{
	$descuento=$subtotal*0.1;
}
$total=$subtotal-$descuento;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
<form method="g" action="process.php">
	<h1>Total a pagar</h1>
	<p>producto</p>
<?php echo $producto;?>
	<br>
	<p>Precio</p>
	<?php echo $precio;?>
	<br>
	<p>unidades</p>
<?php echo $unidad;?>
	<br>
		<p>forma de pago</p>
<?php echo $pago;?>
<p>Subtotal</p>
<?php echo $subtotal; ?>
	<br>
<p>Descuento</p>
<?php echo $descuento; ?>
	<br>
<p>Total</p>
<?php echo $total; ?>
</form>
	</div>
</body>
</html>