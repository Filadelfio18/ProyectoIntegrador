<?php 
session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
	session_destroy();
	session_start();
	$_SESSION['username']="invitado";

}else{
	$usuario = $_SESSION['username'];
}


?>
				<div class="logo">
					<p class="iniciales-logo"><img src="img/logo.png" class="img-logo"></p>
					<h1>Programmed Physics</h1>

				</div>
				<span class="menu-icon">M E N U</span>
				<nav class="menu">
					
					<ul class="menu">
						
						<li><a href="index.php"> Inicio  </a></li>
						<li><a href="index.php #temas">   Temas  </a>
							<ul class="submenu">
								<li><a href="Hooke.php">Modelo de Hooke</a></li>
								<li><a href="Pascal.php">Principio de Pascal</a></li>
								<li><a href="#">Torricelli</a></li>
							</ul></li>
						<li><a href="#"> Ejercicios </a>
							<ul class="submenu">
								<li><a href="ejerciciosHooke.php">Modelo de Hooke</a></li>
								<li><a href="ejerciciosPascal.php">Principio de Pascal</a></li>
								<li><a href="#">Principio de Torricelli</a></li>
							</ul></li>
						<li><a href="registrarvista.php">   <?php echo "Usuario: $usuario"; ?> </a></li>
						<li><a href="salir.php">  Cerrar sesión </a></li>
						
						
					</ul>
					
				</nav>
		


<!--<header class="header">
				<div class="logo">
					<p class="iniciales-logo"><img src="img/logo.png" class="img-logo"></p>
					<h1>Programmed Physics</h1>

				</div>
				<span class="menu-icon">M E N U</span>
				<nav class="menu">
					
					<ul>
						
						<li><a href="index.php">   Home   </a></li>
						<li><a href="#">   Topics  </a></li>
						<li><a href="index.php">   Change to: Spanish  </a></li>
						<li><a href="registrarvista.php">   Profile   </a></li>
						<li style="color:#fff; margin-left: 300px"><?php //echo "<h1>Welcome $usuario !</h1>";?></li>
						<li style="color:#fff; margin-left: 50px"><?php// echo "<a href= 'salir.php'>Close Session</a>";}?></li>
					</ul>
					
				</nav>
			</header>
-->