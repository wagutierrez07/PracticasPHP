<?php

$estudiante = array('Juan','Pedro','Manuel','Andres','Ricardo','Carlos');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario probatorio</title>
</head>
<body>
<h1>Formulario de matriculas</h1>
<?php
//sort($estudiante);
//rsort($estudiante);
//asort($estudiante);
//arsort($estudiante);
foreach ($estudiante as $alumno) {
	echo $alumno . "<br>";
}
echo count($estudiante);
?>

</body>
</html>