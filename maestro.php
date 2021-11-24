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
				<a class="botonTraductor"  href="indexEn.php"> Cambiar a: Inglés </a><br><br>
				<a class="botonSubir"  href="#header"> Subir </a>
			</header>

			<article class="articulo destacado">
				<div class="contenedor-texto">
					<div>
						<h2 class="titulo"><a>Bienvenido al Panel de MAESTRO</a></h2>
						<p class="fecha">
							<time></time>
						</p> 
					</div>
					<p class="extracto">
						En esta página usted podrá ver datos sobre las evaluaciones de los siguientes temas:<br>
						<br>
								<b>-</b><a style="color: #d0c700;">Modelo de Hooke</a><br>
								<b>-</b><a style="color: #d0c700;">Principio de Pascal</a><br>
								<b>-</b><a style="color: #d0c700 ;">Modelo de Torricelli</a><br>
					</p>
				</div>
				<div class="contenedor-thumbnail">
					<a href="#">
						<img src="fisico.jfif" alt="" style="border-radius: 10%; ;height:  250px; width: 400px; margin-top: 30px; background-color: #FEFEFE; object-fit:cover;" alt="Imagen de cientifico">
					</a>
				</div>
			</article>

			<main class="contenido" id="temas">
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/RobertHooke.jpg" alt="Imegn de un resorte" style="border-radius: 3%;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="Hooke.php">Modelo de Hooke</a>
							</h2>
							<p class="fecha">
								<time>----------------------------------------------------------------------</time>
							</p>
						</div>
						<p class="extracto">
							<table border=1 >
								<thead>
									<tr bgcolor='#1dc983' align="center">
										<td width="140" align="center"><b>Nombre</b></td>
										<td><b>Tema</b></td>
										<td width="50" align="center"><b>Resultados</b></td>
										<td><b>Fecha</b></td>
									</tr>
									<tbody>
										<?php
											require('con_db.php');	
											$query="SELECT * FROM resultados WHERE tema LIKE '%e'";
											$resultado=mysqli_query($conexion,$query);
										?>
										<?php while($row=$resultado->fetch_assoc()){ ?>
											<tr>
												<td width="140" align="center"><?php echo $row['nombre'];?></td>
							
												<td width="140" align="center"><?php echo $row['tema'];?></td>
							
												<td width="140" align="center"><?php echo $row['resultado'];?></td>
							
												<td width="140" align="center"><?php echo $row['fecha'];?></td>
							
											</tr>
										<?php } ?>
									</tbody>
							</table>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/BlaisePascal.jpg" alt="Imegn de un resorte" style="border-radius: 3%;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="Hooke.php">Principio de Pascal</a>
							</h2>
							<p class="fecha">
								<time>----------------------------------------------------------------------</time>
							</p>
						</div>
						<p class="extracto">
							<table border=1 >
								<thead>
									<tr bgcolor='#1dc983' align="center">
										<td width="140" align="center"><b>Nombre</b></td>
										<td><b>Tema</b></td>
										<td width="50" align="center"><b>Resultados</b></td>
										<td><b>Fecha</b></td>
									</tr>
								</thead>
									<tbody>
										<?php
											require('con_db.php');	
											$query="SELECT * FROM resultados WHERE tema LIKE '%l'";
											$resultado=mysqli_query($conexion,$query);
										?>
										<?php while($row=$resultado->fetch_assoc()){ ?>
											<tr>
												<td width="140" align="center"><?php echo $row['nombre'];?></td>
							
												<td width="140" align="center"><?php echo $row['tema'];?></td>
							
												<td width="140" align="center"><?php echo $row['resultado'];?></td>
							
												<td width="140" align="center"><?php echo $row['fecha'];?></td>
							
											</tr>
										<?php } ?>
									</tbody>
							</table>
						</p>
					</div>
				</article>
				<article class="articulo">
					<div class="contenedor-thumbnail">
						<a href="#"><img src="./img/EvangelistaTorricelli.jpg" alt="Imegn de un resorte" style="border-radius: 3%;" ></a>
					</div>
					<div class="contenedor-texto">
						<div>
							<h2 class="titulo">
								<a href="Hooke.php">Principio de Torricelli</a>
							</h2>
							<p class="fecha">
								<time>----------------------------------------------------------------------</time>
							</p>
						</div>
						<p class="extracto">
							<table border=1 >
								<thead>
									<tr bgcolor='#1dc983' align="center">
										<td width="140" align="center"><b>Nombre</b></td>
										<td><b>Tema</b></td>
										<td width="50" align="center"><b>Resultados</b></td>
										<td><b>Fecha</b></td>
									</tr>
								</thead>
									<tbody>
										<?php
											require('con_db.php');	
											$query="SELECT * FROM resultados WHERE tema LIKE '%i'";
											$resultado=mysqli_query($conexion,$query);
										?>
										<?php while($row=$resultado->fetch_assoc()){ ?>
											<tr>
												<td width="140" align="center"><?php echo $row['nombre'];?></td>
							
												<td width="140" align="center"><?php echo $row['tema'];?></td>
							
												<td width="140" align="center"><?php echo $row['resultado'];?></td>
							
												<td width="140" align="center"><?php echo $row['fecha'];?></td>
							
											</tr>
										<?php } ?>
									</tbody>
							</table>
						</p>
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
