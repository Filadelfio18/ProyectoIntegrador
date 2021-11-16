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
        <?php  require("headerEn.php") ?>
        <a class="botonTraductor"  href="ejerciciosPascal.php"> Change to: Spanish </a><br><br>
        <a class="botonSubir"  href="#header"> - UP -</a>
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
           	Put your knowledge to the test, with this excercises from topics seen on this website!
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
                                <a id="ej">Pascal's Principle</a>
                            </h2>
                        </div>
                        <form action="evaluarPascalEn.php" method="POST">
                          
                          <label for="Primer Ejercicio">In a press, the larger piston has a diameter of 45 cm and the smaller piston 2.5 cm. What force is needed on the smaller piston to lift a 60,000-N block?</label><br><br>
                          <input type="radio" name="Pregunta1" value="f">F=158.18 N<br>
                          <input type="radio" name="Pregunta1" value="v">F=185.18 N<br>
                          <input type="radio" name="Pregunta1" value="f">F=133.12 N<br>
                          <br><br>

                          <label for="Primer Ejercicio">It is desired to lift a 1500kg body using a hydraulic lift with a large circular plate with a radius of 90cm and a small circular plate with a radius of 10cm. Calculate how much force must be applied to the small plunger to lift the body? </label><br><br>
                          <input type="radio" name="Pregunta2" value="v">F=181.72 N<br>
                          <input type="radio" name="Pregunta2" value="f">F=180.15 N<br>
                          <input type="radio" name="Pregunta2" value="f">F=179.55 N<br>
                          <br><br>

                          <label for="Primer Ejercicio">A mass of 16kg is placed on the smaller plate of a press. Calculate what mass could be lifted placed on the larger plate, whose radius is twice the radius of the smaller plate.</label><br><br>
                          <input type="radio" name="Pregunta3" value="v">m=64 kg<br> 
                          <input type="radio" name="Pregunta3" value="f">m=43 kg<br>
                          <input type="radio" name="Pregunta3" value="f">m=60 kg<br>
                          <br><br>

                          <label for="Primer Ejercicio"> What proportion should the plates of a hydraulic press keep so that, applying 40N of force on the smaller plate, we can lift an 80Kg object on the larger plate?</label><br><br>
                          <input type="radio" name="Pregunta4" value="f">S=18.9<br>
                          <input type="radio" name="Pregunta4" value="f">S=20<br>
                          <input type="radio" name="Pregunta4" value="v">S=19.6<br>
                          <br><br>

                          <input type="submit" value="Finish">
                        </form>
                        <a href="index.php" class="btn-link">Return to Home page</a>
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