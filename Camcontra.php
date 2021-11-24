<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="registro.css">
</head> 
<body>
	<form class="formulario" method="POST">
    
    <h1>Ingresar Tu Correo Electronico</h1>
    <div class="contenedor">
     
    <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" name="correo" placeholder="Email">
        <button type="submit" class="button" name="search" href="J_Jordan/index.php" text=>Comprobar</button>
        <?php
        include ("con_db.php");
        $correo=$_POST['correo'];

		$conexion=mysqli_connect("localhost","root","","registro");
		$consulta="SELECT*FROM datosusuarios WHERE email='$correo'";
		$resultado=mysqli_query($conexion,$consulta);
	
		
		$filas=mysqli_num_rows($resultado);

		if ($filas == TRUE) {
		    header("location:Contracam.php");

		} else {

		    echo "Error al borrar registro: ";
		}

		mysqli_free_result($resultado);
		mysqli_close($conexion);
		?>
    </div>
    </div>
    </form>
</body>
</html>