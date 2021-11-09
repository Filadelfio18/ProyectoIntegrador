<?php
include ("con_db.php");
session_start();

$name=$_POST['name'];
$password=$_POST['password'];
session_start();
$_SESSION['name']=$name;

$conexion=mysqli_connect("localhost","root","","registro");
$consulta="SELECT*FROM datosusuarios WHERE nombre='$name' AND contraseña='$password' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
$_SESSION['username'] = $name;
if($filas){
    
    header("location:ejercicios2.php");

}else{
    ?>
    <?php
    include("loginv2.php");

  ?>
  <h1 style="color: white; background:black; font-family: var(--fuenteP);">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>