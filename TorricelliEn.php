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
		<title>Integrating Project</title>
	</head>
	<body>
		<div class="contenedor">
			<header id="header" class="header" id="header">
				<?php require ("headerEn.php"); ?>
				<a class="botonTraductor"  href="Torricelli.php"> Change to: Spanish </a><br><br>
				<a class="botonSubir"  href="#header"> - UP - </a>
			</header>
			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo">Torricelli's Theorem</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto" style="text-align: justify;">
						Torricelli's theorem or Torricelli's principle states that the speed of the liquid that comes out through the hole in the wall of a tank or container is identical to that of an object that is allowed to fall freely from a height equal to that of the surface. free of liquid to the hole.<br>
						
					
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="EvangelistaTorricelli.jpg" alt="" style="border-radius: 40%; height: 250px; margin-top: 30px; margin-left: -25px; ; object-fit:scale-down;">
					</a>
				</div>
			</article>

			<main class="contenido">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="https://4.bp.blogspot.com/-Lq7rvlkmDXI/VCxiSirA6PI/AAAAAAAAD58/_UbGJWsFz2M/s1600/iuju.jpg"><img src="ejtorri.png" alt="" style="object-fit: scale-down;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a>Theorem Demonstration:</a>
							</h2>
							<p class="fecha">
								<time>4 de mayo de 2019<br></time>
							</p>
						</div>
						<p class="extracto" style="text-align: justify;">
						Due to Torricelli's theorem we can then affirm that the exit velocity of the liquid through an orifice that is at height h below the free surface of the liquid is given by the following formula:<br>
						<a ><img src="formt1.jpg" alt="" style=" height: 50px; object-fit:scale-down;"></a><br>
						<p class="extracto" style="text-align: justify;">
						Where g is the acceleration of gravity and h is the height from the hole to the free surface of the liquid.<br><br>
						Evangelista Torricelli was a physicist and mathematician born in the city of Faenza, Italy in 1608. Torricelli is credited with the invention of the mercury barometer and in recognition there is a pressure unit called “torr”, equivalent to one millimeter of mercury (mm of Hg).<br>
					</p>
						<p class="extracto" style="text-align: justify;">
							In Torricelli's theorem and in the formula that gives the velocity, it assumes that the viscosity losses are negligible, just as in free fall it is assumed that the friction due to the air surrounding the falling object is negligible.<br><br>
							The above assumption is reasonable in most cases and also involves the conservation of mechanical energy.<br><br>
							To prove the theorem, we will first find the formula for the velocity for an object that is released with zero initial speed, from the same height as the liquid surface in the tank.<br><br>
							The principle of conservation of energy will be applied to obtain the speed of the falling object just when it has descended a height h equal to that from the hole to the free surface.<br><br>
							Since there are no frictional losses, it is valid to apply the principle of conservation of mechanical energy. Suppose the falling object has mass m and the height h is measured from the exit level of the liquid.<br><br>
						</p>
						<a href="https://www.lifeder.com/teorema-de-torricelli/" class="btn-link" target="_blank">Mas información</a>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Falling Object</a>
							</h2>
						<p class="extracto" style="text-align: justify;">
							When the object is released from a height equal to that of the free surface of the liquid, its energy is only gravitational potential, since its speed is zero and therefore its kinetic energy is zero. The potential energy Ep is given by:<br><br>
							Ep = m g h<br><br>
							When it passes in front of the hole, its height is zero, then the potential energy is zero, so it only has kinetic energy Ec given by:<br><br>
							Ec = ½ m v2<br><br>
							Since the energy is conserved Ep = Ec from what is obtained:<br><br>
							½ m v2 = m g h<br><br>
							Solving for the speed v, the Torricelli formula is then obtained:<br><br>
						</p>
						</div>
						<p class="extracto">
						<a href="https://significado.com/img/cien/principio-de-pascal-exp-a.png"><img src="formt1.jpg" alt="" style="height: 70px; object-fit:scale-down;" ></a>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Solved examples of torricelli's Theorem</a>
							</h2>
						</div>
						<p class="extracto" style="text-align: justify;">
							<b>Problem 1.-</b>Assuming that the outlet tube of the tank from the previous exercise has a diameter of 1 cm, calculate the outlet flow of the water.<br><br>
						</p>
						<p class="extracto">
							Solution:<br><br>
							Flow rate is the volume of liquid exiting per unit time, and is calculated simply by multiplying the area of ​​the exit orifice by the exit velocity.<br><br>
							The next figure shows the maths:
						</p>
						<a ><img src="torripEn.jpg" alt="" style="border-radius: 20%; height: 250px; margin-top: 10px; margin-left: -25px; ; object-fit:scale-down;"></a><br>
					</div>
				</article>

			</main>

			<aside class="sidebar">
				<?php require ("sidebarEn.php") ?>
				<a href="ejerciciosTorricelli.php" style="font-size: 28px;"> Ejercicios ! </a>
			</aside>

			<footer class="footer">
				<?php require("footerEn.php"); ?>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>