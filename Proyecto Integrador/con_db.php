<?php
$host="localhost";
$user="root";
$pass="";
$db="registro";
$conexion=mysqli_connect($host,$user,$pass,$db);

if ($conexion){
	echo "";
}else{
	echo "No esta conectado con la BD";
}
?>