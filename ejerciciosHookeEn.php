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
	        <?php require("headerEn.php"); ?>
	        <a class="botonTraductor"  href="ejerciciosHooke.php"> Change to: Spanish </a><br><br>
	        <a class="botonSubir"  href="#header"> - UP - </a>
	      </header>

	      <article class="articulo destacado">
	        <div class="contenedor-texto">
	          <div>
	            <h2 class="titulo">Excercises</a></h2>
	            <p class="fecha">
	              <time></time>
	            </p> 
	          </div>
	          <p class="extracto" style="text-align: justify;">
	            Put your knowledge in practice solving these excercises from the topics seen on this website !  
	            <br>
	          </p>
	        </div>
	        <div class="contenedor-thumbnail">
	          <a href="#">
	            <img src="fisico.jfif" alt="" style="border-radius: 40%; height: 150px; margin-top: 10px; object-fit:scale-down;">
	          </a>
	        </div>
	      </article>

	      <main class="contenido">
	        
	        <article class="articulo">
	                    <div class="contenedor-texto">
	                        <div>
	                            <h2 class="titulo">
	                                <a id="ej">Hooke's Law Excercises</a>
	                            </h2>
	                        </div>
	                        <form action="evaluarHookeEn.php" method="POST">
	                          
	                          <label for="Primer Ejercicio">When a 500gr mass hangs from a spring, this lengthens 3cm. That is the elastic constant?</label><br><br>
	                          <input type="radio" name="Pregunta1" value="f">K=150 N/m<br>
	                          <input type="radio" name="Pregunta1" value="v">k=163.33N/m<br>
	                          <input type="radio" name="Pregunta1" value="f">k=133.12 N/m<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">The spring constant of a spring was found to be 3000 N / m. What force is required to compress the spring to a distance of 5 cm?</label><br><br>
	                          <input type="radio" name="Pregunta2" value="v">F=150N<br>
	                          <input type="radio" name="Pregunta2" value="f">F=180N<br>
	                          <input type="radio" name="Pregunta2" value="f">F=179N<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">A 50 N load attached to a vertically hanging spring stretches the spring by 5 cm. The spring is now placed horizontally on a table and stretched 11 cm. a) What force is required to stretch the spring by this amount?</label><br><br>
	                          <input type="radio" name="Pregunta3" value="v">F=110N<br> 
	                          <input type="radio" name="Pregunta3" value="f">F=143N<br>
	                          <input type="radio" name="Pregunta3" value="f">F=160N<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">What is the magnitude of the force that compresses a spring of constant 280 N / m 75 cm?</label><br><br>
	                          <input type="radio" name="Pregunta4" value="f">F=200N<br>
	                          <input type="radio" name="Pregunta4" value="f">F=310N<br>
	                          <input type="radio" name="Pregunta4" value="v">F=210N<br>
	                          <br><br>

	                          <input type="submit" value="Finish">
	                        </form>
	                        <a href="indexEn.php" class="btn-link">Return to home Page</a>
	                        
	                   </div>
	                </article>
	      </main>

	      <aside class="sidebar" style="width: 80%; justify-content: right;">
	        <?php require("sidebarEn.php") ?>
	          <!--<a href="https://phet.colorado.edu/sims/html/hookes-law/latest/hookes-law_es.html" target="_blank" style="font-size: 28px;"> >> Click here to access a simulator<< </a>-->
	      </aside>

	      <footer class="footer">
	       <?php require("footerEn.php"); ?>
	      </footer>
	    </div>
	    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	    <script src="menu.js"></script>
	  </body>
	</html>