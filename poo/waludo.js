<?php 
/**
 * 
 */
class Walter
{
	public $edad=25;
	public $carrera="informatica";	
	public function presentacion($mensaje)
	{
		echo $mensaje;
	}
}
$walter = new walter();
echo $walter->edad+4;


 ?>