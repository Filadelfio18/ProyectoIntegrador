<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="./css/estilos.css" />
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
                                <a id="ej">Ejercicios de la ley de hooke</a>
                            </h2>
                        </div>
                        <form action="ejercicios.php" method="POST">
                          <?php
                          $pregunta1="f";
                          $pregunta2="f";
                          $pregunta3="f";
                          $pregunta4="f";
                          $pregunta5="f";?>
                          
                          <label for="Primer Ejercicio">Cuando una masa de 500 gr cuelga de un resorte, este se alarga 3 cm ¿cuál es la constante elástica?</label><br>
                          <input type="radio" name="Pregunta1" value="f">K=150 N/m<br>
                          <input type="radio" name="Pregunta1" value="v">k=163.33N/m<br>
                          <input type="radio" name="Pregunta1" value="f">k=133.12 N/m<br>
                          <br><br>

                          <label for="Primer Ejercicio">La constante elástica de un resorte resultó ser de 3000 N/m ¿Qué fuerza se requiere para comprimir el resorte hasta una distancia de 5 cm?</label><br>
                          <input type="radio" name="Pregunta2" value="v">F=150N<br>
                          <input type="radio" name="Pregunta2" value="f">F=180N<br>
                          <input type="radio" name="Pregunta2" value="f">F=179N<br>
                          <br><br>

                          <label for="Primer Ejercicio">Una carga de 50 N unida a un resorte que cuelga verticalmente estira el resorte 5 cm. El resorte se coloca ahora horizontalmente sobre una mesa y se estira 11 cm. a) ¿Qué fuerza se requiere para estirar el resorte esta cantidad?</label><br>
                          <input type="radio" name="Pregunta3" value="v">F=110N<br> 
                          <input type="radio" name="Pregunta3" value="f">F=143N<br>
                          <input type="radio" name="Pregunta3" value="f">F=160N<br>
                          <br><br>

                          <label for="Primer Ejercicio">¿Cuál es la magnitud de la fuerza que comprime 75 cm a un resorte de constante 280 N/m ?</label><br>
                          <input type="radio" name="Pregunta4" value="f">F=200N<br>
                          <input type="radio" name="Pregunta4" value="f">F=310N<br>
                          <input type="radio" name="Pregunta4" value="v">F=210N<br>
                          <br><br>

                          <label for="Primer Ejercicio">Un resorte se elonga 15 cm cuando se le aplica una fuerza de 85 Newtons. Si el resorte recobra su longitud original y después se le aplica una fuerza de 125 Newtons. ¿Cuál es la nueva elongación del resorte, si el resorte no alcanza su límite elástico?</label><br>
                          <input type="radio" name="Pregunta5" value="f">K=0.32.2m<br>
                          <input type="radio" name="Pregunta5" value="v">k=0.24m<br>
                          <input type="radio" name="Pregunta5" value="f">k=0.26m<br>
                          <br><br>
                          <input type="submit" value="Resultado">
                        </form>
                        <?php
                          include ('con_db.php');
                          

                          $pregunta1=$_POST['Pregunta1'];
                          $pregunta2=$_POST['Pregunta2'];
                          $pregunta3=$_POST['Pregunta3'];
                          $pregunta4=$_POST['Pregunta4'];
                          $pregunta5=$_POST['Pregunta5'];

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

                          if($pregunta5 == "v")
                          {
                            $puntos= $puntos + 2;
                          }

                          if ($puntos > 6){
                            $mensaje=" Necesitas repasar";
                          }
                          if ($puntos == 6){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 8){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 10){
                            $mensaje =" Exelente Trabajo";
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