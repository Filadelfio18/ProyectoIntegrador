<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/registro.css">
</head> 
<body>
	<form class="formulario" method="POST">
    
    <h1>Ingresar los datos necesarios</h1>
    <div class="contenedor">
     
    <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" name="usuario" placeholder="Usuario">
        <i class="fas fa-user icon"></i>
        <input type="text" name="contraseña" placeholder="Nueva Contraseña">
        <button type="submit" class="button" name="search" href="loginvista.php" text=>Comprobar</button>
        <p>¿Quieres iniciar seccion?<a class="link" href="loginvista.php"><ins>Iniciar seccion<ins></a></p>
        <?php
        include ("con_db.php");
        $contraseña=$_POST['contraseña'];
        $usuario=$_POST['usuario'];

		$conexion=mysqli_connect("localhost","root","","registro");
		$consulta="UPDATE datosusuarios SET contraseña='$contraseña' WHERE nombre='$usuario'";
		$resultado=mysqli_query($conexion,$consulta);
	
		$filas=mysqli_num_rows($resultado);

		if ($filas == TRUE) {
		    header("location:loginvista.php");

		} else {

		    echo "Error al cambiar la contraseña: ";
		}

		mysqli_free_result($resultado);
		mysqli_close($conexion);
		?>
    </div>
    </div>
    </form>
</body>
</html>