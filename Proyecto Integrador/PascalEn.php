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
				<?php require("headerEn.php"); ?>
				<a class="botonTraductor"  href="Pascal.php"> Change to: Spanish</a><br><br>
				<a class="botonTraductor"  href="#header"> Up </a>
			</header>

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo">Pascal's Principle</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto" style="text-align:justify;">
						Pascal's Principle ensures that any change in the pressure exerted on a fluid at rest and confined within a container, is transmitted homogeneously to each point of the same, as long as the density of the fluid remains constant. Such a fluid is called 'incompressible'.<br>
						It is the basis of the operation of hydraulic machines, since a fluid can be used to transmit the change in pressure from one end to the other of a pipe and perform useful mechanical work, such as braking a car or lifting a large weight by applying less force.<br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="./img/BlaisePascal.jpg" alt="" style="border-radius: 40%; height: 250px; margin-top: 30px; margin-left: -25px; ; object-fit:scale-down;">

					</a>
				</div>
			</article>

			<main class="contenido">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="https://4.bp.blogspot.com/-Lq7rvlkmDXI/VCxiSirA6PI/AAAAAAAAD58/_UbGJWsFz2M/s1600/iuju.jpg"><img src="./img/FluidosComprensibles.jpg" alt="" style="object-fit: scale-down;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a>The types of fluids:</a>
							</h2>
							<p class="fecha">
								<time>1654</time>
							</p>
						</div>
						<p class="extracto" style="text-align:justify;">
							Fluids can be classified into two types according to their behavior when pressure is exerted on them:<br><br><br>

							<b>Compressible fluids: </b>These fluids can expand or compress depending on the pressure exerted on them. Gases are the compressible fluids par excellence.<br><br>
							<b>Incompressible fluids:</b>These fluids do not change their volume due to the effects of pressure. Liquids and solids are considered incompressible.<br><br>
						</p>
						<a href="https://blog.unitips.mx/el-principio-de-pascal" class="btn-link" target="_blank">Unitips Lesson</a>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">The Hydraulic Lift:</a>
							</h2>
						</div>
						<p class="extracto">
						<a href="https://significado.com/img/cien/principio-de-pascal-exp-a.png"><img src="./img/ElevadorH.png" alt="" style="object-fit: scale-down;" ></a>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
						<p class="extracto" style="text-align: justify;">The figure shows the diagram of the hydraulic lift, with the force F1 applied on the small piston of area A1 and produces a pressure P1 in the liquid that fills the pipe. At the area outlet piston A2, a pressure P2 and a corresponding force F2 are generated.<br><br>
						Since by Pascal's principle the pressure change is completely transmitted to each point of the fluid, it turns out that the pressures equal P1 = P2 and using the definition of the pressure is:<br><br>
						P1=P2⇒F1/A1=F2/A2<br><br>
						The magnitude of the force F2 at the output is amplified according to:<br><br>F2=(A2/A1)⋅F1<br><br>
						Since A2> A1, so F2> F1.<br>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="#">Worked Examples of Pascal's Principle:</a>
							</h2>
						</div>
						<p class="extracto" style="text-align: justify;">
							<b>Problem 1.-</b>You want to lift a 1500 kg car with a hydraulic lift, whose platform measures 225 cm2.<br>
							To do this, a force is applied to the smallest piston with an area of ​​12 cm2. What magnitude of force is required?<br>
						</p>
						<p class="extracto">
							The hydraulic lift equation is applied, and the force required is F1:<br>
						</p>
						<a ><img src="./img/pimg1.jpg" alt="" style="width: 700px; height: 440px; margin-left: 20px;"></a><br>
						
						<p class="extracto">
							Note that it is not necessary to make changes in the area units, since these are canceled because they are in a quotient.<br>
							In terms of force, a 1500 kg mass has a weight of 1500 kg-force in units of the technical system. If you want to express the result in newton, use the equivalence:
						</p>
						<p style="text-align: center; font-size: 28px;font-style: italic;"> 1 kg-force = 9.8 N<br>
						Therefore 80 kgf = 784 N.</p><br>
					</div>
				</article>

			</main>
			<aside class="sidebar" style="width: 80%; justify-content: right;">
				<?php require("sidebarEn.php"); ?>
					<a href="http://www.objetos.unam.mx/fisica/pascal/index.html" target="_blank" style="font-size: 28px;"> >>Clic Here to access a Simulator << </a>
				</nav>
			</aside>

			
			<footer class="footer">
				<?php require("footerEn.php") ?>
			</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="menu.js"></script>
	</body>
</html>