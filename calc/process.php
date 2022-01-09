
 <!DOCTYPE html>
<html>
<head>
	<title>
		Mini proyecto 3
	</title>
</head>
<body>
<h1>Tercer miniproyecto practico</h1>
<?php 
$numero1=$_POST["numero1"];
$numero2=$_POST["numero2"];
$Operations=$_POST['opc'];

switch ($Operations) {
	case 'Sumar':
		$resultado=$numero1+$numero2;
		echo $resultado;
		break;
		case 'Restar':
		$resultado=$numero1-$numero2;
		echo $resultado;
		break;
		case 'Multiplicar':
		$resultado=$numero1*$numero2;
		echo $resultado;
		break;
		case 'Dividir':
		$resultado=$numero1/$numero2;
		echo $resultado;	
		if ($resultado==0) {
		echo "no se puede dividir entre 0";
		}
		break;
	
	default:
	echo "no se puede dividir entre 0";
		break;
}

 ?>
</body>
</html>