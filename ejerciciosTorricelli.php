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
	        <?php  require("header.php") ?>
	        <a class="botonTraductor"  href="ejerciciosTorricelliEn.php"> Cambiar a: Inglés </a><br><br>
	        <a class="botonSubir"  href="#header"> Subir </a>
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
	            <img src="fisico.jfif" alt="" style="border-radius: 40%; height: 250px; margin-top: 10px; object-fit:scale-down;">
	          </a>
	        </div>
	      </article>

	      <main class="contenido">
	        
	        <article class="articulo">
	                    <div class="contenedor-texto">
	                        <div>
	                            <h2 class="titulo">
	                                <a id="ej">Ejercicios del Modelo de Torricelli</a>
	                            </h2>
	                        </div>
	                        <form action="evaluarTorricelli.php" method="POST">
	                          
	                          <label for="Primer Ejercicio">Para medir la magnitud de la velocidad de la corriente en un rió se introduce un tubo de Pitot, la altura a la que llega el agua dentro del tubo es de 0.20 m ¿a qué magnitud de velocidad va la corriente?</label><br><br>
	                          <input type="radio" name="Pregunta1" value="f">V=3 m/s<br>
	                          <input type="radio" name="Pregunta1" value="v">V=1.98 m/s<br>
	                          <input type="radio" name="Pregunta1" value="f">V=2.5 m/s<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">Determinar la magnitud de la velocidad con la que sale un líquido por un orificio localizado a una profundidad de 2.6 metros en un tanque de almacenamiento.</label><br><br>
	                          <input type="radio" name="Pregunta2" value="v">V=7.14m/s<br>
	                          <input type="radio" name="Pregunta2" value="f">V=8.12m/s<br>
	                          <input type="radio" name="Pregunta2" value="f">V=4.35m/s<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">Determine a qué altura se debe abrir un orificio de un estanque, para que el líquido salga con una velocidad de 9 m/s.</label><br><br>
	                          <input type="radio" name="Pregunta3" value="v">H=4.13m<br> 
	                          <input type="radio" name="Pregunta3" value="f">H=1.43m<br>
	                          <input type="radio" name="Pregunta3" value="f">H=2.60m<br>
	                          <br><br>

	                          <label for="Primer Ejercicio">¿Con qué velocidad sale un líquido por un orificio que se encuentra a una profundidad de 1.4 m?</label><br><br>
	                          <input type="radio" name="Pregunta4" value="f">V=6 m/s<br>
	                          <input type="radio" name="Pregunta4" value="f">V=4.50 m/s<br>
	                          <input type="radio" name="Pregunta4" value="v">V=5.24 m/s<br>
	                          <br><br>
	                          
	                          <input type="submit" value="Resultado">
	                        </form>
	                        <a href="index.php" class="btn-link">Regresar a la pagina Principal</a>
	                      
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