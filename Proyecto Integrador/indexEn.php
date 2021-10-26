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
		<title>Integrating Project</title>
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
						<li><a href="index.php">   Home   </a></li>
						<li><a href="#">   Topics  </a></li>
						<li><a href="index.php">   In Spanish  </a></li>
						<li><a href="registrarvista.php">   Profile   </a></li>
						<?php
							session_start();
							$usuario = $_SESSION['username'];
						?>

						<li style="color:#fff; justify-content:right; margin-left: 300px"><?php echo "<h1>Welcome $usuario !</h1>";?></li>
						<li style="color:#fff; justify-content:right; margin-left: 50px"><?php echo "<a href= 'salir.php'>Close Session</a>";}?></li>
					</ul>
					
				</nav>
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
								<b>-</b><a href="#" style="color: #9b8fbe;">Hooke's Model</a><br>
								<b>-</b><a href="#" style="color: #9b8fbe;">Pascal's Principle</a><br>
								<b>-</b><a href="#" style="color: #9b8fbe;">Torricelli</a><br>
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
								<a href="#">Hooke's Model</a>
							</h2>
							<p class="fecha">
								<time>Noviembre 13, 2019</time>
							</p>
						</div>
						<p class="extracto">
							Lorem ipsum, dolor sit amet coknsectetur
							adipisicing elit. Cupiditate, autem animi.
						</p>
						<a href="#" class="btn-link">Read more!</a>
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
								<time>Noviembre 13, 2019</time>
							</p>
						</div>
						<p class="extracto">
							Lorem ipsum, dolor sit amet coknsectetur
							adipisicing elit. Cupiditate, autem animi.
						</p>
						<a href="#" class="btn-link">Read more!</a>
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
								<time>Noviembre 13, 2019</time>
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
				<div class="acerca-de">
					<img src="./img/logo.png" class="img-perfil" alt="" style="background-color: #FEFEFE; object-fit:scale-down;">

					<div class="bio">
						<p class="titulo"> -- Programmed Physics -- </p>
						<p>
							Links to the rest of the topics:
						</p>
					</div>
				</div>
				<nav class="menu">
					<a href="#">Hooke's Model</a>
					<a href="#">Pascal's Principle</a>
					<a href="#">Torricelli</a>
				</nav>
			</aside>

			<footer class="footer">
				
				<p style="font-weight: bold;">CBTIS 168<br>
					Programación, 5°L</p><br>
				<p style="font-weight: lighter;float: left; text-align: left;"><b>Subjects of the Integrating Project:</b><br><br>
					<b> - </b>English V<b>,</b> Dr. José Antonio Saldivar Cervantes<br>
					<b> - </b>Physics II<b>,</b> Dr. Octavio Hernández Castorena<br>
					<b> - </b>Web Apps with Databases<b>,</b> M.C. Manuel López Chávez<br>
				</p>
				<p></p>
				<p style="font-weight: lighter;float: right; text-align: left;"><b>Programmed Physics was made by :</b><br><br>
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
