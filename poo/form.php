	<?php 
		include 'datos.php';
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mini proyecto 6</title>

</head>
<body>
	<h1>Sexto miniproyecto basico</h1>
	<h2>Formularios Pt.III</h2>
	<h3>Formulario con POO</h3>
	<br>
		<hr>
	<?php 
		$datosForm=new datos();
		$datosForm->setCedula($_POST["cedula"]);
		$datosForm->setNombre($_POST["nombre"]);
		$datosForm->setEdad($_POST["edad"]);
		$datosForm->setCorreo($_POST["correo"]);
		$datosForm->setCarrera($_POST["carrera"]);
		$datosForm->setSemestre($_POST["semestre"]);
		echo $datosForm->mostrarDatos();
	 ?>
	 <br>
	 <a href="index.php">regresar</a>
</body>
</html>