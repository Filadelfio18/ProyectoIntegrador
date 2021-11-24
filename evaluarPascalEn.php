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

  

  if ($puntos < 6){
    echo'<script type="text/javascript">
  alert("Your results have been sent to the email used to log in");
  window.location.href="indexEn.php";
   </script>';
   mail("$correo", "Evaluation Results: Pascal's Principle", "You got $puntos out of 10 possible points");

  }
  if ($puntos == 6){
  echo'<script type="text/javascript">
  alert("Your results have been sent to the email used to log in");
  window.location.href="indexEn.php";
   </script>';
   mail("$correo", "Evaluation Results: Pascal's Principle", "You got $puntos out of 10 possible points");
  }
  if ($puntos == 8){
  echo'<script type="text/javascript">
  alert("Your results have been sent to the email used to log in");
  window.location.href="indexEn.php";
   </script>';
   mail("$correo", "Evaluation Results: Pascal's Principle", "You got $puntos out of 10 possible points");
  }
  if ($puntos == 10){
  echo'<script type="text/javascript">
  alert("Your results have been sent to the email used to log in");
  window.location.href="indexEn.php";
   </script>';
   mail("$correo", "Evaluation Results: Pascal's Principle", "You got $puntos out of 10 possible points");
  }

  include("con_db.php");

  $name = $_SESSION['username'];
  $correo = $_SESSION['email'];
  $tema=" Pascal's Principle";
  $fecha=date("d-m-y");



  $resultados=" INSERT INTO examen(nombre, correo, tema, p1, p2, p3, p4, fecha) VALUES ('$name','$correo','$tema','$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$fecha') ";

  $consulta=mysqli_query($conexion,$resultados);

  $resultados=" INSERT INTO resultados(nombre, tema, resultado, fecha) VALUES ('$name','$tema', '$puntos/10', '$fecha') ";

  $consulta=mysqli_query($conexion,$resultados);
}

?>