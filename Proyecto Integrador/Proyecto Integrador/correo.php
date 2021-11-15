<?php
require("con_db.php");




$correo="luis18mora7@gmail.com";
$nombre="Luis Mora";
$texto="10, Excelente trabajo!";
$encabezado="Programmed Physics";
mail("$correo", "Resultados te la evaluación que hiciste $nombre ", $texto,"$encabezado");
?>