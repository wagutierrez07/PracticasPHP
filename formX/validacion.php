<?php 

SESSION_START();
$_SESSION['usuario']='Usuario';
header('Location:panel.php');
?>