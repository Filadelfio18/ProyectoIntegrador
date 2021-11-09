<?php
include ("con_db.php");

if (isset($_POST['register'])){
	if (strlen($_POST['name']) >=1 && strlen($_POST['email']) >=1){
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$password=($_POST['password']);
		$fechareg=date("d/m/y");

		$consulta="INSERT INTO datosusuarios(nombre, email, contraseña, fecha) VALUES ('$name','$email','$password','$fechareg')";
		$resultado=mysqli_query($conexion,$consulta);

		if($resultado){
			header("location:loginvista1.php");
			?>
			<?php 
		}else{
			?>
			<h1 style="color: white; background:black; font-family: var(--fuenteP);">Registro FALLIDO</h1>
			<?php
		}
	}else{
		?>
		<h1 style="color: white; background:black; font-family: var(--fuenteP);">COMPLETA LOS CAMPOS</h1>
		<?php
	}
}
?>