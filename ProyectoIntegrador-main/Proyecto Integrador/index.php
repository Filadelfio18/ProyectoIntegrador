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
				<?php require ("header.php"); ?>
				<a class="botonTraductor"  href="indexEn.php"> Cambiar a: Inglés </a><br><br>
				<a class="botonSubir"  href="#header"> Subir </a>
			</header>

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo"><a>Bienvenido a Programmed Physics</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto">
						¿Te interesa la fisica?, ¿No entiendes algun tema?, ¿Quieres aprender por tu cuenta?<br>
						Aqui en <b>Programmed Physics</b> podemos ayudarte. Mira nuestros contenidos sobre:<br>
						<br>
								<b>-</b><a href="Hooke.php" style="color: #d0c700;">Modelo de Hooke</a><br>
								<b>-</b><a href="Pascal.php" style="color: #d0c700;">Principio de Pascal</a><br>
								<b>-</b><a href="#" style="color: #d0c700 ;">Modelo de Torricelli</a><br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="./img/logo.png" alt="" style="border-radius: 50%; height: 250px; margin-top: 30px; margin-left: -25px; background-color: #FEFEFE; object-fit:scale-down;" alt="Logo Prgrammed Physics">
					</a>
				</div>
			</article>

			<main class="contenido">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/resorte.jpg" alt="Imegn de un resorte" style="border-radius: 3%;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="Hooke.php">Modelo de Hooke</a>
							</h2>
							<p class="fecha">
								<time>1660</time>
							</p>
						</div>
						<p class="extracto">
							La Ley de elasticidad de Hooke, o simplemente Ley de Hooke, es el principio físico en torno a la conducta elástica de los solidos Fue formulada en 1660 por el científico británico Robert Hooke, contemporáneo del célebre Isaac Newton.
						</p>
						<a href="Hooke.php" class="btn-link">Leer más</a>
					</div>
				</article>

				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/prensaHidraulica.jpg" alt="Imagen de una prensa hidraulica" /></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="Pascal.html">Principio de Pascal</a>
							</h2>
							<p class="fecha">
								<time>1656</time>
							</p>
						</div>
						<p class="extracto">
							El Principio de Pascal asegura que todo cambio en la presión ejercida sobre un fluido en reposo y confinado dentro de un recipiente, se transmite homogéneamente a cada punto del mismo, siempre y cuando la densidad del fluido se mantenga constante.
						</p>
						<a href="Pascal.php" class="btn-link">Leer más</a>
					</div>
				</article>

				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/img-04.jpg" alt="" /></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Modelo de Torricelli</a>
							</h2>
							<p class="fecha">
								<time></time>
							</p>
						</div>
						<p class="extracto">
							Lorem ipsum, dolor sit amet coknsectetur
							adipisicing elit. Cupiditate, autem animi.
						</p>
						<a href="#" class="btn-link">Leer más</a>
					</div>
				</article>
			</main>

			<aside class="sidebar">
				<?php require ("sidebar.php") ?>
			</aside>

			<footer class="footer">
				<?php require ("footer.php"); ?>
			</footer>

		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>
