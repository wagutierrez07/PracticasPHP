<?php

/*function notificacion()
{
	echo "Mensaje :D";
}
*/
function conversor($cantidad)
{
$total=$cantidad*0.16;
return $total;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario probatorio</title>
</head>
<body>
<h1>Formulario de matriculas</h1>
<?php
// notificacion();
echo conversor(600);
?>

</body>
</html>