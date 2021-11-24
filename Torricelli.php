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
			<header id="header" class="header" id="header">
				<?php require ("header.php"); ?>
				<a class="botonTraductor"  href="TorricelliEn.php"> Cambiar a: Inglés </a><br><br>
				<a class="botonSubir"  href="#header"> Subir </a>
			</header>
			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo">Teorema de Torricelli</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto" style="text-align: justify;">
						El teorema de Torricelli o principio de Torricelli afirma que la velocidad del líquido que sale por el orificio en la pared de un tanque o recipiente, es idéntica a la que adquiere un objeto que se deja caer libremente desde una altura igual a la de la superficie libre del líquido hasta el orificio.<br>
						
					
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
								<a>Demostración del Teorema:</a>
							</h2>
							<p class="fecha">
								<time>4 de mayo de 2019<br></time>
							</p>
						</div>
						<p class="extracto" style="text-align: justify;">
						Debido al teorema de Torricelli podemos afirmar entonces que la velocidad de salida del líquido por un orificio que está a altura h por debajo de la superficie libre del líquido viene dada por la siguiente fórmula:<br>
						<a ><img src="formt1.jpg" alt="" style=" height: 50px; object-fit:scale-down;"></a><br>
						<p class="extracto" style="text-align: justify;">
						Donde g es la aceleración de gravedad y h es la altura que hay desde el orificio hasta la superficie libre del líquido.<br><br>
						Evangelista Torricelli fue un físico y matemático nacido en la ciudad de Faenza, Italia en el año 1608. A Torricelli se le atribuye la invención del barómetro de mercurio y como reconocimiento hay una unidad de presión llamada “torr”, equivalente a un milímetro de mercurio (mm de Hg).<br>
					</p>
						<p class="extracto" style="text-align: justify;">
							En el teorema de Torricelli y en la fórmula que da la velocidad, supone que las pérdidas por viscosidad son despreciables, al igual que en la caída libre se supone que la fricción debida al aire que circunda al objeto que cae es insignificante.<br><br>
							La suposición anterior es razonable en la mayoría de los casos y además implica la conservación de la energía mecánica.<br><br>
							Para demostrar el teorema, en primer lugar encontraremos la fórmula de la velocidad para un objeto que se suelta con rapidez inicial cero, desde la misma altura que la superficie líquida en el depósito.<br><br>
							Se aplicará el principio de conservación de la energía para obtener la velocidad del objeto que cae justo cuando haya descendido una altura h igual a la que hay desde el orificio hasta la superficie libre.<br><br>
							Como no hay pérdidas por fricción, es válido aplicar el principio de conservación de la energía mecánica. Supongamos que el objeto que cae tiene masa m y la altura h se mide desde el nivel de salida del líquido.<br><br>
						</p>
						<a href="https://www.lifeder.com/teorema-de-torricelli/" class="btn-link" target="_blank">Mas información</a>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Objeto que cae</a>
							</h2>
						<p class="extracto" style="text-align: justify;">
							Cuando el objeto se suelta desde una altura igual a la de la superficie libre del líquido, su energía es solo potencial gravitatoria, ya que su rapidez es cero y por tanto su energía cinética es nula. La energía potencial Ep está dada por:<br><br>
							Ep = m g h<br><br>
							Cuando va pasando frente al orificio su altura es cero, entonces la energía potencial es cero, por lo que solo tiene energía cinética Ec dada por:<br><br>
							Ec = ½ m v2<br><br>
							Dado que la energía se conserva Ep = Ec de lo que se obtiene:<br><br>
							½ m v2 = m g h<br><br>
							Despejando la rapidez v se obtiene entonces la fórmula de Torricelli:<br><br>
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
								<a href="#">Ejemplos Resueltos del Teorema de Torricelli:</a>
							</h2>
						</div>
						<p class="extracto" style="text-align: justify;">
							<b>Problema 1.-</b>Suponiendo que el tubo de salida del tanque del ejercicio anterior, tiene un diámetro de 1 cm, calcule el caudal de salida de agua.<br><br>
						</p>
						<p class="extracto">
							Solución:<br><br>
							El caudal es el volumen de líquido que sale por unidad de tiempo, y se calcula simplemente multiplicando el área del orificio de salida por la velocidad de salida.<br><br>
							La siguiente figura muestra los detalles del cálculo.
						</p>
						<a ><img src="torrip.jpg" alt="" style="border-radius: 20%; height: 250px; margin-top: 10px; margin-left: -25px; ; object-fit:scale-down;"></a><br>
					</div>
				</article>

			</main>

			<aside class="sidebar">
				<?php require ("sidebar.php") ?>
				<a href="ejerciciosTorricelli.php" style="font-size: 28px;"> Ejercicios ! </a>
			</aside>

			<footer class="footer">
				<?php require("footer.php"); ?>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>