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
			<header class="header" id="header">
				<?php require ("headerEn.php"); ?>
				<a class="botonTraductor"  href="index.php"> Change to: Spanish </a><br><br>
				<a class="botonSubir"  href="#header">- UP -</a>
			</header>


			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo"><a href="#">Welcome to Programmed Physics</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto">
						Are you interested in physics?, You don't understand a certain topic?, or you just want to learn by yourself?<br>
						We can help you here, at <b>Programmed Physics</b>. Take a look at the topics:<br>
						<br>
								<b>-</b><a href="HookeEn.html" style="color: #d0c700;">Hooke's Model</a><br>
								<b>-</b><a href="PascalEn.html" style="color: #d0c700;">Pascal Principle</a><br>
								<b>-</b><a href="#" style="color: #d0c700 ;">Torricelli</a><br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="./img/logo.png" alt="" style="border-radius: 50%; height: 250px; margin-top: 30px; margin-left: -25px; background-color: #FEFEFE; object-fit:scale-down;">
					</a>
				</div>
			</article>

			<main class="contenido" id="topics">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/resorte.jpg" alt="" style="border-radius: 3%;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Hooke's Model</a>
							</h2>
							<p class="fecha">
								<time></time>
							</p>
						</div>
						<p class="extracto" style="text-align: justify;">
							Hooke's Law of elasticity, or simply Hooke's Law, is the physical principle around the elastic behavior of solids. It was formulated in 1660 by the British scientist Robert Hooke, a contemporary colleague of the famous Isaac Newton.
						</p>
						<a href="HookeEn.php" class="btn-link">Read more!</a>
					</div>
				</article>

				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/prensaHidraulica.jpg" alt="" /></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Pascal's Principle</a>
							</h2>
							<p class="fecha">
								<time></time>
							</p>
						</div>
						<p class="extracto">
							Pascal's Principle ensures that any change in the pressure exerted on a fluid at rest and confined within a container, is transmitted homogeneously to each point of the same, as long as the density of the fluid remains constant. Such a fluid is called 'incompressible'.
						</p>
						<a href="PascalEn.php" class="btn-link">Read more!</a>
					</div>
				</article>

				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/img-04.jpg" alt="" /></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Torricelli</a>
							</h2>
							<p class="fecha">
								<time></time>
							</p>
						</div>
						<p class="extracto">
							Lorem ipsum, dolor sit amet coknsectetur
							adipisicing elit. Cupiditate, autem animi.
						</p>
						<a href="#" class="btn-link">Read more!</a>
					</div>
				</article>
			</main>

			<aside class="sidebar">
				<?php require("sidebarEn.php"); ?>
			</aside>

			<footer class="footer">
				<?php require("footerEn.php"); ?>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>
