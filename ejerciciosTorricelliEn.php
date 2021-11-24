<?php session_start(); ?>
	<!DOCTYPE html>
	<html lang="es">
	  <head>
	    <meta charset="UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/>
	    <link rel="shortcut icon" href="logo.png">
	    <link rel="stylesheet" href="estilos.css" />
	    <title>Proyecto Integrador</title>
	  </head>
	  <body>
	    <div class="contenedor">
	      <header class="header" id="header">
	        <?php  require("headerEn.php") ?>
	        <a class="botonTraductor"  href="ejerciciosTorricelli.php"> Change to: Spanish </a><br><br>
	        <a class="botonSubir"  href="#header">- UP - </a>
	      </header>

	      <article class="articulo destacado">
	        <div class="contenedor-texto">
	          <div>
	            <h2 class="titulo"> Excercises</h2>
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
	            <img src="fisico.jfif" alt="" style="border-radius: 40%; height: 250px; margin-top: 10px; object-fit:scale-down;">
	          </a>
	        </div>
	      </article>

	      <main class="contenido">
	        
	        <article class="articulo">
	                    <div class="contenedor-texto">
	                        <div>
	                            <h2 class="titulo">
	                                <a id="ej">Torricelli's Theorem</a>
	                            </h2>
	                        </div>
	                        <form action="evaluarTorricelli.php" method="POST">
	                          
	                          <label for="Primer Ejercicio">To measure the magnitude of the speed of the current in a river, a Pitot tube is introduced, the height at which the water reaches inside the tube is 0.20 m, at what magnitude of speed is the current going?</label><br><br>
	                          <input type="radio" name="Pregunta1" value="f">V=3 m/s<br>
	                          <input type="radio" name="Pregunta1" value="v">V=1.98 m/s<br>
	                          <input type="radio" name="Pregunta1" value="f">V=2.5 m/s<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">Determine the magnitude of the speed with which a liquid leaves a hole located at a depth of 2.6 meters in a storage tank.</label><br><br>
	                          <input type="radio" name="Pregunta2" value="v">V=7.14m/s<br>
	                          <input type="radio" name="Pregunta2" value="f">V=8.12m/s<br>
	                          <input type="radio" name="Pregunta2" value="f">V=4.35m/s<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">Determine how high a hole in a pond must be opened so that the liquid leaves with a velocity of 9 m / s.</label><br><br>
	                          <input type="radio" name="Pregunta3" value="v">H=4.13m<br> 
	                          <input type="radio" name="Pregunta3" value="f">H=1.43m<br>
	                          <input type="radio" name="Pregunta3" value="f">H=2.60m<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">How fast does a liquid flow out of a hole at a depth of 1.4 m?</label><br><br>
	                          <input type="radio" name="Pregunta4" value="f">V=6 m/s<br>
	                          <input type="radio" name="Pregunta4" value="f">V=4.50 m/s<br>
	                          <input type="radio" name="Pregunta4" value="v">V=5.24 m/s<br>
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