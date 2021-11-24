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
				<?php require ("header.php"); ?>
				<a class="botonTraductor"  href="PascalEn.php"> Cambiar a: Inglés </a><br><br>
				<a class="botonSubir"  href="#header"> Subir </a>
			</header>

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo">Principio de Pascal</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto" style="text-align: justify;">
						El Principio de Pascal asegura que todo cambio en la presión ejercida sobre un fluido en reposo y confinado dentro de un recipiente, se transmite homogéneamente a cada punto del mismo, siempre y cuando la densidad del fluido se mantenga constante. A un fluido así se le denomina 'incompresible'.<br>
						Supone la base del funcionamiento de las máquinas hidráulicas, ya que un fluido se puede usar para transmitir el cambio de presión desde un extremo al otro de una tubería y realizar un trabajo mecánico aprovechable, como por ejemplo frenar un automóvil o elevar un gran peso aplicando una fuerza menor.   
						<br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="BlaisePascal.jpg" alt="" style="border-radius: 40%; height: 250px; margin-top: 30px; margin-left: -25px; ; object-fit:scale-down;">
					</a>
				</div>
			</article>

			<main class="contenido">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="https://4.bp.blogspot.com/-Lq7rvlkmDXI/VCxiSirA6PI/AAAAAAAAD58/_UbGJWsFz2M/s1600/iuju.jpg"><img src="https://4.bp.blogspot.com/-Lq7rvlkmDXI/VCxiSirA6PI/AAAAAAAAD58/_UbGJWsFz2M/s1600/iuju.jpg" alt="" style="object-fit: scale-down;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a>Los tipos de fluidos:</a>
							</h2>
							<p class="fecha">
								<time>1654</time>
							</p>
						</div>
						<p class="extracto" style="text-align: justify;">
							Los fluidos pueden clasificarse en dos tipos de acuerdo con su comportamiento cuando se ejerce una presión sobre ellos:<br><br><br>

							<b>Fluidos compresibles: </b> Estos fluidos pueden expandirse o comprimirse dependiendo de la presión que se ejerza sobre ellos. Los gases son los fluidos compresibles por excelencia.<br><br>
							<b>Fluidos incompresibles:</b> Estos fluidos no cambian su volumen por efectos de la presión. Los líquidos y los sólidos son considerados incompresibles.<br><br>
						</p>
						<a href="https://blog.unitips.mx/el-principio-de-pascal" class="btn-link" target="_blank">Leccion de Unitips</a>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">El Elevador Hidráulico:</a>
							</h2>
						</div>
						<p class="extracto">
						<a href="https://significado.com/img/cien/principio-de-pascal-exp-a.png"><img src="ElevadorH.png" alt="" style="object-fit: scale-down;" ></a>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
						<p class="extracto" style="text-align: justify;">En la figura se muestra el esquema del elevador hidráulico, con la fuerza F1 aplicada sobre el pistón pequeño de área A1 y produce en el líquido que llena la tubería una presión P1. En el pistón de salida de área A2, se generan una presión P2 y la correspondiente fuerza F2.<br><br>
						Puesto que por el principio de Pascal el cambio de presión se transmite completamente a cada punto del fluido, resulta que las presiones se igualan P1 = P2 y empleando la definición de la presión queda:<br><br>
						P1=P2⇒F1/A1=F2/A2<br><br>
						La magnitud de la fuerza F2 en la salida se amplifica según:<br><br>F2=(A2/A1)⋅F1<br><br>
						Como A2 > A1, entonces F2 > F1.<br>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Ejemplos Resueltos de el Principio de Pascal:</a>
							</h2>
						</div>
						<p class="extracto" style="text-align: justify;">
							<b>Problema 1.-</b>Se quiere elevar un automóvil de 1500 kg con un ascensor hidráulico, cuya plataforma mide 225 cm2.<br>
							Para ello se aplica una fuerza sobre el émbolo más pequeño de área 12 cm2. ¿Qué magnitud de fuerza se requiere?<br>
						</p>
						<p class="extracto">
							Se aplica la ecuación del elevador hidráulico, y la fuerza que se requiere es F1:<br>
						</p>
						<a ><img src="pimg1.jpg" alt="" style="width: 700px; height: 440px; margin-left: 20px;"></a><br>
						
						<p class="extracto">
							Nótese que no es necesario hacer cambios en las unidades de área, ya que estas se cancelan por estar en un cociente.<br>
							En cuanto a la fuerza, una masa de 1500 kg tiene un peso de 1500 kg-fuerza en unidades del sistema técnico. Si se desea expresar el resultado en newton se usa la equivalencia:
						</p>
						<p style="text-align: center; font-size: 28px;font-style: italic;"> 1 kg-fuerza = 9.8 N <br>
						Por lo tanto 80 kg-f = 784 N.</p><br>
					</div>
				</article>

			</main>

			<aside class="sidebar" style="width: 80%; justify-content: right;">
				<?php require("sidebar.php"); ?>
					<a href="http://www.objetos.unam.mx/fisica/pascal/index.html" target="_blank" style="font-size: 28px;"> >> Da clic para acceder a un simulador << </a><br><br>

				<a href="ejerciciosPascal.php" style="font-size: 28px;"> Ejercicios ! </a>
			</aside>

			<footer class="footer">
				<?php require("footer.php"); ?>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>