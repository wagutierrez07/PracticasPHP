<?php 

class datos
{
	private $cedula;
	private $nombre;
	private $edad;	
	private $correo;
	private $carrera;
	private $semestre;

	public function getCedula()
	
			{
			return $this->cedula;
			}
			public function setCedula($cedula)
	
			{
			$this->cedula = $cedula;
			}

	public function getNombre()
			
			{
			return $this->nombre; 
			}
	public function setNombre($nombre)
			
			{
			$this->nombre = $nombre; 
			}

			public function getEdad()
			
			{
			return $this->edad; 
			}
			public function setEdad($edad)
			
			{
			$this->edad = $edad; 
			}

	public function getCorreo()
	
			{
			return $this->correo; 
			}
			public function setCorreo($correo)
	
			{
			$this->correo = $correo; 
			}
			
	public function getCarrera()
					
			{
			return $this->carrera; 
			}
			public function setCarrera($carrera)
					
			{
			$this->carrera = $carrera; 
			}
	public function getSemestre()
											
			{
			return $this->semestre; 
			}
			public function setSemestre($semestre)
											
			{
			$this->semestre = $semestre;
			}
																							
	public function mostrarDatos()
	{
		return $this->cedula . "<br>". $this->nombre . "<br>" . $this->edad . "<br>" . $this->correo . "<br>" . $this->carrera ."<br>". $this->semestre;
	}
			
}

 ?>