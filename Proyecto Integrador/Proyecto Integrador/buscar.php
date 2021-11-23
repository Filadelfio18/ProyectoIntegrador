<?php
require("con_db.php");
session_start();

$nombre = $_POST['name'];
$correo = $_POST['email'];
$password = $_POST['password'];



$consulta = "SELECT COUNT(*) as contar FROM datosusuarios WHERE nombre = '$nombre' AND contraseña ='$password' ";
$resultado = mysqli_query($conexion,$consulta);
$array = mysqli_fetch_array($resultado);

if($array['contar']>0){

    $_SESSION['username'] = $nombre;
    $_SESSION['email'] = $correo;

    header("location:index.php");

}else{

    include("loginvista.php");

  ?>
  <h1 style="color: white; background:black; font-family: var(--fuenteP);">ERROR DE AUTENTIFICACION</h1>
  <?php
}
?>