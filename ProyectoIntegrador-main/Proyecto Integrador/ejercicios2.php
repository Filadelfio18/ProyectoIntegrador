<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="estilos.css" />
    <title>Proyecto Integrador</title>
  </head>
  <body>
    <div class="contenedor">
      <header class="header" id="header">
        <?php  require("header.php") ?>
        <a class="botonTraductor"  href="ejerciciosEn.php"> Cambiar a: Inglés </a><br><br>
        <a class="botonTraductor"  href="#header"> Subir </a>
      </header>

      <article class="articulo destacado">
        <div class="contenedor-texto">
          <div>
            <h2 class="titulo"> Ejercicios </a></h2>
            <p class="fecha">
              <time></time>
            </p> 
          </div>
          <p class="extracto" style="text-align: justify;">
           	Pon a prueba tus conocimientos con estos ejercicios, sobre los temas de este sitio web.  
            <br>
          </p>
        </div>
        <div class="contenedor-thumbnail">
          <a href="#">
            <img src="./img/fisico.jpg" alt="" style="border-radius: 40%; height: 150px; margin-top: 10px; object-fit:scale-down;">
          </a>
        </div>
      </article>

      <main class="contenido">
        
        <article class="articulo">
                    <div class="contenedor-texto">
                        <div>
                            <h2 class="titulo">
                                <a id="ej">Ejercicios del Principio de Pascal</a>
                            </h2>
                        </div>
                        <form action="ejercicios2.php" method="POST">
                          <?php
                          $pregunta1="f";
                          $pregunta2="f";
                          $pregunta3="f";
                          $pregunta4="f";?>
                          
                          <label for="Primer Ejercicio">En una prensa el émbolo mayor tiene un diámetro de 45 cm y el émbolo menor de 2.5 cm ¿Qué fuerza se necesita ejercer en el émbolo menor para levantar un bloque de 60000 N?</label><br>
                          <input type="radio" name="Pregunta1" value="f">F=158.18 N<br>
                          <input type="radio" name="Pregunta1" value="v">F=185.18 N<br>
                          <input type="radio" name="Pregunta1" value="f">F=133.12 N<br>
                          <br><br>

                          <label for="Primer Ejercicio">Se desea elevar un cuerpo de 1500kg utilizando una elevadora hidráulica de plato grande circular de 90cm de radio y plato pequeño circular de 10cm de radio. Calcula cuánta fuerza hay que hacer en el émbolo pequeño para elevar el cuerpo. </label><br>
                          <input type="radio" name="Pregunta2" value="v">F=181.72 N<br>
                          <input type="radio" name="Pregunta2" value="f">F=180.15 N<br>
                          <input type="radio" name="Pregunta2" value="f">F=179.55 N<br>
                          <br><br>

                          <label for="Primer Ejercicio">Sobre el plato menor de una prensa se coloca una masa de 16kg. Calcula qué masa se podría levantar colocada en el plato mayor, cuyo radio es el doble del radio del plato menor.</label><br>
                          <input type="radio" name="Pregunta3" value="v">m=64 kg<br> 
                          <input type="radio" name="Pregunta3" value="f">m=43 kg<br>
                          <input type="radio" name="Pregunta3" value="f">m=60 kg<br>
                          <br><br>

                          <label for="Primer Ejercicio"> ¿Qué proporción deberían guardar los platos de una prensa hidráulica para que, aplicando 40N de fuerza en el plato menor, podamos levantar un objeto de 80Kg en el plato mayor?</label><br>
                          <input type="radio" name="Pregunta4" value="f">S=18.9<br>
                          <input type="radio" name="Pregunta4" value="f">S=20<br>
                          <input type="radio" name="Pregunta4" value="v">S=19.6<br>
                          <br><br>

                          <input type="submit" value="Resultado">
                        </form>
                        <a href="index.php" class="btn-link">Regresar a la pagina Principal</a>
                        <?php
                          include ('con_db.php');
                          

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
                            $mensaje=" Necesitas repasar";
                          }
                          if ($puntos == 6){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 8){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 10){
                            $mensaje =" Excelente Trabajo";
                          }

                          echo (" $puntos "); 

                          echo (" $mensaje ");
                        ?> 
                   </div>
                </article>
      </main>

      <aside class="sidebar" style="width: 80%; justify-content: right;">
        <?php require("sidebar.php"); ?>
          <!--<a href="https://phet.colorado.edu/sims/html/hookes-law/latest/hookes-law_es.html" target="_blank" style="font-size: 28px;"> >> Da clic para acceder a un simulador << </a>-->
      </aside>

      <footer class="footer">
       <?php require("footer.php"); ?>     
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="menu.js"></script>
  </body>
</html>