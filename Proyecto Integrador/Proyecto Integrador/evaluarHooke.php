<?php 
session_start();
$usuario=$_SESSION['username'];

if ($usuario=="invitado") {
	header("location:registrarvista.php");

}else{
	$correo=$_SESSION['email'];

	$pregunta1=" ";
	$pregunta2=" ";
	$pregunta3=" ";
	$pregunta4=" ";



	$pregunta1=$_POST['Pregunta1'];
	$pregunta2=$_POST['Pregunta2'];
	$pregunta3=$_POST['Pregunta3'];
	$pregunta4=$_POST['Pregunta4'];


	$puntos= 0;

	$mensaje= "";

	if($pregunta1 == "v")
	{
	  $puntos= $puntos + 2;
	}

	if($pregunta2 == "v")
	{
	  $puntos= $puntos + 2;
	}

	if($pregunta3 == "v")
	{
	$puntos= $puntos + 2; 
	}


	if($pregunta4 == "v")
	{
	$puntos= $puntos + 2;
	}

	$tema=" Modelo de Hooke";



	if ($puntos < 6){
		echo'<script type="text/javascript">
	alert("Tus resultados se enviaron al correo con el que iniciaste sesion");
	window.location.href="index.php";
	 </script>';
	 mail("$correo", "Resultados de la evaluación", "Obtuviste $puntos de 10 puntos posibles");

	}
	if ($puntos == 6){
	echo'<script type="text/javascript">
	alert("Tus resultados se enviaron al correo con el que iniciaste sesion");
	window.location.href="index.php";
	 </script>';
	 mail("$correo", "Resultados de la evaluación", "Obtuviste $puntos de 10 puntos posibles");
	}
	if ($puntos == 8){
	echo'<script type="text/javascript">
	alert("Tus resultados se enviaron al correo con el que iniciaste sesion");
	window.location.href="index.php";
	 </script>';
	 mail("$correo", "Resultados de la evaluación", "Obtuviste $puntos de 10 puntos posibles");
	}
	if ($puntos == 10){
	echo'<script type="text/javascript">
	alert("Tus resultados se enviaron al correo con el que iniciaste sesion");
	window.location.href="index.php";
	 </script>';
	 mail("$correo", "Resultados de la evaluación", "Obtuviste $puntos de 10 puntos posibles");
	}

	include("con_db.php");

	$name = $_SESSION['username'];
	$correo = $_SESSION['email'];
	$fecha=date("d-m-y");


	$resultados=" INSERT INTO examen(nombre, correo, tema, p1, p2, p3, p4, fecha) VALUES ('$name','$correo','$tema','$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$fecha') ";

	$consulta=mysqli_query($conexion,$resultados);
}

?>