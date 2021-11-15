<?php
$host="localhost";
$user="root";
$pass="";
$db="pphysics";
$conexion=mysqli_connect($host,$user,$pass,$db);

if ($conexion){
	echo "conectado";
}else{
	echo "No esta conectado con la BD";
}
?>