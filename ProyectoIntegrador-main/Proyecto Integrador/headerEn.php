<?php  ?>
			<div class="logo">
					<p class="iniciales-logo"><img src="img/logo.png" class="img-logo"></p>
					<h1>Programmed Physics</h1>

				</div>
				<span class="menu-icon">M E N U</span>
				<nav class="menu">
					
					<ul class="menu">
						
						<li><a href="indexEn.php">Home</a></li>
						<li><a href="#">Topics</a>
							<ul class="submenu">
								<li><a href="HookeEn.php">Hooke's Model</a></li>
								<li><a href="PascalEn.php">Pascal's Principle</a></li>
								<li><a href="#">Torricelli</a></li>
							</ul></li>
						<li><a href="ejerciciosEn.php"> Excercises</a></li>
						<li><a href="registrarvista.php">   Profile: <?php echo $_SESSION['username'] ?>   </a></li>
						
					</ul>
					
				</nav>
<?php ?>