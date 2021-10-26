<?php
session_start();
$usuario = $_SESSION['username'];
if (!isset($usuario)){
	header("location: registrarvista.php");
}else{ ?>
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
			<header class="header">
				<div class="logo">
					<p class="iniciales-logo"><img src="img/logo.png" class="img-logo"></p>
					<h1>Programmed Physics</h1>

				</div>
				<span class="menu-icon">M E N U</span>
				<nav class="menu">
					
					<ul>
						<li><input type="text" name="" style="margin: 10px; display: block;">
						<li><a href="index.php">   Inicio   </a></li>
						<li><a href="#">   Temas  </a></li>
						<li><a href="indexEn.php">   En Inglés  </a></li>
						<li><a href="registrarvista.php">   Perfil   </a></li>
						<li style="color:#fff; margin-left: 300px"><?php echo "<h1>Bienvenido $usuario !</h1>";?></li>
						<li style="color:#fff; margin-left: 50px"><?php echo "<a href= 'salir.php'>Cerrar Sesion</a>";}?></li>
					</ul>
					
				</nav>
			</header>

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo"><a href="#">Bienvenido a Programmed Physics</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto">
						¿Te interesa la fisica?, ¿No entiendes algun tema?, ¿Quieres aprender por tu cuenta?<br>
						Aqui en <b>Programmed Physics</b> podemos ayudarte. Mira nuestros contenidos sobre:<br>
						<br>
								<b>-</b><a href="#" style="color: #9b8fbe;">Modelo de Hooke</a><br>
								<b>-</b><a href="#" style="color: #9b8fbe;">Principio de Pascal</a><br>
								<b>-</b><a href="#" style="color: #9b8fbe;">Modelo de Torricelli</a><br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="./img/logo.png" alt="" style="border-radius: 50%; height: 250px; margin-top: 30px; margin-left: -25px; background-color: #FEFEFE; object-fit:scale-down;">
					</a>
				</div>
			</article>

			<main class="contenido">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/resorte.jpg" alt="" style="border-radius: 3%;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Modelo de Hooke</a>
							</h2>
							<p class="fecha">
								<time>Noviembre 13, 2019</time>
							</p>
						</div>
						<p class="extracto">
							Lorem ipsum, dolor sit amet coknsectetur
							adipisicing elit. Cupiditate, autem animi.
						</p>
						<a href="#" class="btn-link">Leer más</a>
					</div>
				</article>

				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/prensaHidraulica.jpg" alt="" /></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Modelo de Pascal</a>
							</h2>
							<p class="fecha">
								<time>Noviembre 13, 2019</time>
							</p>
						</div>
						<p class="extracto">
							Lorem ipsum, dolor sit amet coknsectetur
							adipisicing elit. Cupiditate, autem animi.
						</p>
						<a href="#" class="btn-link">Leer más</a>
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
								<time>Noviembre 13, 2019</time>
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
				<div class="acerca-de">
					<img src="./img/logo.png" class="img-perfil" alt="" style="background-color: #FEFEFE; object-fit:scale-down;">

					<div class="bio">
						<p class="titulo"> -- Programmed Physics -- </p>
						<p>
							Links a los temas :
						</p>
					</div>
				</div>
				<nav class="menu">
					<a href="#">Modelo de Hooke</a>
					<a href="#">Principio de Pascal</a>
					<a href="#">Torricelli</a>
				</nav>
			</aside>

			<footer class="footer">
				
				<p style="font-weight: bold;">CBTIS 168<br>
					Programación, 5°L</p><br>
				<p style="font-weight: lighter;float: left; text-align: left;"><b>Proyecto Integrador de las materias de :</b><br><br>
					<b> - </b>Ingles V<b>,</b> Dr. José Antonio Saldivar Cervantes<br>
					<b> - </b>Fisica II<b>,</b> Dr. Octavio Hernández Castorena<br>
					<b> - </b>Aplicaciones web con BD<b>,</b> M.C. Manuel López Chávez<br>
				</p>
				<p></p>
				<p style="font-weight: lighter;float: right; text-align: left;"><b>Programmed Physics realizado por :</b><br><br>
					<b> - </b>NL 13<b>,</b> Estrada Marmolejo Leonardo<br>
					<b> - </b>NL 15<b>,</b> Flores Martinez Leonardo Israel<br>
					<b> - </b>NL 17<b>,</b> Gallegos Rangel Julio Alberto<br>
					<b> - </b>NL 18<b>,</b> Gomaez Valdes Diego Enrique<br>
					<b> - </b>NL 30<b>,</b> Mora Castañeda Luis Enrique<br>
					<br><br>
				</p>
				
			
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>
