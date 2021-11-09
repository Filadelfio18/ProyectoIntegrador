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
		<title>Integrating Project</title>
	</head>
	<body>
		<div class="contenedor">
			<header id="header" class="header">
				<?php require("headerEn.php"); ?>
				<a class="botonTraductor"  href="Hooke.php"> Change to: Spanish </a><br><br>
				<a class="botonSubir"  href="#header"> - UP - </a>
			</header>

			

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo">Hooke's Law</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto" style="text-align:justify;">
						Hooke's Law of elasticity, or simply Hooke's Law, is the physical principle around the elastic behavior of solids. It was formulated in 1660 by the British scientist Robert Hooke, a contemporary of the famous Isaac Newton.<br>
						The theoretical precept of this law is that the displacement or deformation suffered by an object subjected to a force will be directly proportional to the deformation force or the load. That is to say, the greater the force, the greater the deformation or displacement, or as Hooke himself formulated it in Latin: Ut tensio sic vis (“as the extension, thus the force”).  
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
								<a>How to measure Forces?</a>
							</h2>
							<p class="fecha">
								<time>1678</time>
							</p>
						</div>
						<p class="extracto" style="text-align:justify;">
							When you apply a force to a spring, probably this will lengthen. If you double the force, the elongation it will also double.This is what is known as Hooke's law.<br>
							Hooke's law states that the lengthening of a spring is directly proportional to the modulus of force applied to it, as long as said spring is not permanently deformed by said dock.<br><br>
							<b>F=k⋅(x−x0)</b><br>
							where:<br><br>
							<b>F</b> is the module of the force applied to the spring. <br><br>
							<b> k </b> is the spring constant, which relates force and elongation. The higher its value, the more work it will cost to stretch the spring. It depends on the dock, so each one will have their own. <br>
							<b> x0 </b> is the length of the spring without applying the force. <br><br>
							<b> x </b> is the length of the spring with the applied force. <br><br>
						</p>
						<a href="https://en.khanacademy.org/science/physics/work-and-energy/hookes-law/a/what-is-hookes-law" class="btn-link" target="_blank">Khan Academy Lesson</a>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Spring in equilibrium position:</a>
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
								<a href="#">Spring after an external force has produced a deformation:</a>
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
								<a href="#">Worked Examples of Hooke's Law</a>
							</h2>
						</div>
						<p class="extracto">
							<b>Problem 1.-</b> If a spring is hung with a mass of 200 gr and it is deformed by 15 cm, what will be the value of its constant? <br><br>
							Solution: To be able to solve the problem, let's convert the units given to units of the International System, getting like this: <br>
						</p>
						<a ><img src="./img/Problema1.jpg" alt="" style="width: 300px; height: 50px; margin-left: 225px;"></a><br>
						<a ><img src="./img/Problema2.jpg" alt="" style="width: 300px; height: 50px; margin-left: 225px;" ></a><br><br>
						<p style="text-align: center; font-size: 28px;font-style: italic;"> g = 9.8m/s²</p><br>
						<p class="extracto">
							The problem gives us a mass, but a force is needed to perform the calculations, so we multiply the mass by the action of the acceleration of gravity to obtain the weight, which is finally a force. <br>
						</p>
						<a class="formulas"><img src="./img/Problema4.jpg" alt="" style="width: 500px; height: 50px; margin-left: 150px;"></a><br>
						<p class="extracto">
							Now it only remains to clear "k" in the formula of Hooke's Law.
						</p>
						<p style="text-align: center; font-size: 28px;font-style: italic;"> k = F/x </p><br>
						<p class="extracto">
							Substituting our data in the formula, we have: <br>
							Outcome:
						</p>
						<a class="formulas"><img src="./img/Problema6.jpg" alt="" style="width: 300px; height: 100px; margin-left: 200px; object-fit: fill;"></a><br>
					</div>
				</article>

			</main>

			<aside class="sidebar" style="width: 80%; justify-content: right;">
				<?php require("sidebarEn.php"); ?>
				<a href="https://phet.colorado.edu/sims/html/hookes-law/latest/hookes-law_es.html" target="_blank" style="font-size: 28px;"> >> Click here to access a simulator << </a>
			</aside>

			
			<footer class="footer">
				<?php require("footerEn.php"); ?>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>