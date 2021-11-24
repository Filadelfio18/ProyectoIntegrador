<?php 
@session_start();
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
					<p class="iniciales-logo"><img src="logo.png" class="img-logo"></p>
					<h1>Programmed Physics</h1>

				</div>
				<span class="menu-icon">M E N U</span>
				<nav class="menu">
					
					<ul class="menu">
						
						<li><a href="indexEn.php"> Home  </a></li>
						<li><a href="indexEn.php #topics">   Topics  </a>
							<ul class="submenu">
								<li><a href="HookeEn.php">Hooke's Model</a></li>
								<li><a href="PascalEn.php">Pascal's Principle</a></li>
								<li><a href="TorricelliEn.php">Torricelli's Theorem</a></li>
							</ul></li>
						<li><a href="#"> Excercises </a>
							<ul class="submenu">
								<li><a href="ejerciciosHookeEn.php">Hooke's Model</a></li>
								<li><a href="ejerciciosPascalEn.php">Pascal's Principle</a></li>
								<li><a href="ejerciciosTorricelliEn.php">Torricelli's Theorem</a></li>
							</ul></li>
						<li><a href="registrarvista.php">   <?php echo "User: $usuario"; ?> </a></li>
						<li><a href="salir.php">  Close session </a></li>
						<?php if ($_SESSION['username']=="maestro"){
							?><li><a href="maestro.php">  Evaluations </a></li><?php 
						} ?>
						
						
					</ul>
				</nav>