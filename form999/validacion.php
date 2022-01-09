<?php 
if (isset($_POST['submit'])) {
if (empty($nombre)) {
	echo "<p>Agregue su nombre</p>";
}
	else
		{if (strlen($nombre)>15) {
	echo "<p>Su nombre es largo</p>";
	}
}


if (empty($edad)) {
	echo "<p>Agregue su edad</p>";
}
else{
	if (!is_numeric($edad)) {
			echo "<p>Solo caracteres numericos</p>";
	}
}
if (empty($correo)) {
	echo "<p>Agregue su correo</p>";
}
else{
	if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
	echo "<p>El correo es invalido</p>";
	}
}
}

?>