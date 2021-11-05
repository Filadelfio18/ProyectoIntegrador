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
				<?php require ("header.php"); ?>
				<a class="botonTraductor"  href="HookeEn.php"> Cambiar a: Inglés </a><br><br>
				<a class="botonTraductor"  href="#header"> Subir </a>
			</header>

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo">Ley de Hooke</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto" style="text-align: justify;">
						La Ley de elasticidad de Hooke, o simplemente Ley de Hooke, es el principio físico en torno a la conducta elástica de los solidos Fue formulada en 1660 por el científico británico Robert Hooke, contemporáneo del célebre Isaac Newton. <br>
						El precepto teórico de esta ley es que el desplazamiento o la deformación sufrida por un objeto sometido a una fuerza, será directamente proporcional a la fuerza deformante o a la carga. Es decir, a mayor fuerza, mayor deformación o desplazamiento, o como lo formuló en latín el propio Hooke: Ut tensio sic vis (“como la extensión, así la fuerza”).   
						<br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="./img/RobertHooke.jpg" alt="" style="border-radius: 40%; height: 250px; margin-top: 30px; margin-left: -25px; ; object-fit:scale-down;">
					</a>
				</div>
			</article>

			<main class="contenido">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="https://www.fisicalab.com/sites/all/files/contenidos/leyesnewton/ley-hook.png"><img src="./img/Leyhook2.jpg" alt="" style="object-fit: scale-down;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a>¿Cómo medir Fuerzas?</a>
							</h2>
							<p class="fecha">
								<time>Noviembre 13, 2019</time>
							</p>
						</div>
						<p class="extracto" style="text-align: justify;">
							Cuando aplicas una fuerza a un muelle, probablemente este se alargará. Si duplicas la fuerza, el alargamiento también se duplicará. Esto es lo que se conoce como la ley de Hooke.<br>

							La ley de Hooke establece que el alargamiento de un muelle es directamente proporcional al módulo de la fuerza que se le aplique, siempre y cuando no se deforme permanentemente dicho muelle.<br>

							<b>F=k⋅(x−x0)</b>							donde:<br><br>

							<b>F</b> es el módulo de la fuerza que se aplica sobre el muelle.<br><br>
							<b>k</b> es la constante elástica del muelle, que relaciona fuerza y alargamiento. Cuanto mayor es su valor más trabajo costará estirar el muelle. Depende del muelle, de tal forma que cada uno tendrá la suya propia.<br><br>
							<b>x0</b> es la longitud del muelle sin aplicar la fuerza.<br><br>
							<b>x</b> es la longitud del muelle con la fuerza aplicada.<br><br>
						</p>
						<a href="https://es.khanacademy.org/science/physics/work-and-energy/hookes-law/a/what-is-hookes-law" class="btn-link" target="_blank">Leccion de Khan Academy</a>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Muelle en posición de equilibrio:</a>
							</h2>
						</div>
						<p class="extracto">
						<a href="https://www.universoformulas.com/imagenes/fisica/dinamica/ley-hooke-muelle-posicion-equilibrio.jpg"><img src="./img/Imagenhook1.jpg" alt="" style="object-fit: scale-down;" ></a>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Muelle después de que una fuerza externa haya producido una deformación:</a>
							</h2>
						</div>
						<p class="extracto">
						<a href="https://www.universoformulas.com/imagenes/fisica/dinamica/ley-hooke-muelle-despues-fuerza-externa.jpg"><img src="./img/Imagenhook2.jpg" alt="" style="object-fit: scale-down;" ></a>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Ejemplos Resueltos de la Ley de Hooke</a>
							</h2>
						</div>
						<p class="extracto" style="text-align: justify;">
							<b>Problema 1.-</b> Si a un resorte se le cuelga una masa de 200 gr y se deforma 15 cm, ¿cuál será el valor de su constante?<br><br>
							Solución: Para poder resolver el problema, convirtamos las unidades dadas a unidades del Sistema Internacional, quedando así:<br>
						</p>
						<a ><img src="./img/Problema1.jpg" alt="" style="width: 300px; height: 50px; margin-left: 225px;"></a><br>
						<a ><img src="./img/Problema2.jpg" alt="" style="width: 300px; height: 50px; margin-left: 225px;" ></a><br><br>
						<p style="text-align: center; font-size: 28px;font-style: italic;"> g = 9.8m/s²</p><br>
						<p class="extracto">
							El problema nos proporciona una masa, pero hace falta una fuerza para poder realizar los cálculos, entonces multiplicamos la masa por la acción de la aceleración de la gravedad para obtener el peso, que finalmente es una fuerza.<br>
						</p>
						<a class="formulas"><img src="./img/Problema4.jpg" alt="" style="width: 500px; height: 50px; margin-left: 150px;"></a><br>
						<p class="extracto">
							Ahora solo queda despejar ” k ” en la fórmula de la Ley de Hooke.
						</p>
						<p style="text-align: center; font-size: 28px;font-style: italic;"> k = F/x </p><br>
						<p class="extracto">
							Sustituyendo nuestros datos en la fórmula, tenemos:<br>
							Resultado:
						</p>
						<a class="formulas"><img src="./img/Problema6.jpg" alt="" style="width: 670px; height: 125px; margin-left: 20px;"></a><br><br><br>
						
					</div>
				</article>

			</main>

			<aside class="sidebar" style="width: 80%; justify-content: right;">
				<?php require("sidebar.php"); ?>
				<a href="https://phet.colorado.edu/sims/html/hookes-law/latest/hookes-law_es.html" target="_blank" style="font-size: 28px;"> >> Da clic para acceder a un simulador << </a>
				
			</aside>

			<footer class="footer">
				
				<?php require("footer.php"); ?>
				
			
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>