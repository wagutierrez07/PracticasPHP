<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
<form method="post" action="process.php">
	<h1>Formulario de pedidos</h1>
	<p>producto</p>
	<select name="producto">
		<option value="carne">Carne</option>
		<option value="pollo">Pollo</option>
		<option value="pescado">Pescado</option>
	</select>
	<br>
	<p>Precio</p>
	<input type="text" name="precio">
	<br>
	<p>unidades</p>
	<input type="text" name="unidad">
	<br>
	<p>forma de pago</p>
	<select name="pago">
		<option value="tarjeta">tarjeta</option>
		<option value="efectivo">efectivo</option>
		<option value="pescado">Pescado</option>
	</select>
		<input type="submit" id="btn" name="">
</form>
	</div>
</body>
</html>