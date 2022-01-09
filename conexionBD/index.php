<?php 

class connection{
private $db="chaz";
private $user="root";
private $pass="w4lt3r04";
private $host="localhost";

public function conect()
{

$conexion=mysqli_connect($this->host, $this->user, $this->pass, $this->db);
return $conexion;

}
}


?>