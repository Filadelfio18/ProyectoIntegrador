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
    <form class="formulario" method="POST" action="buscar.php">
    
    <h1>Login</h1>
     <div class="contenedor">
     
        <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" name="name" placeholder="nombre de usuario">
        </div>

        <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input type="text" name="email" placeholder="Correo Electronico de Gmail">
        </div>
         
        <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" name="password" placeholder="Contraseña">
        </div>
         <button type="submit" class="button" name="search" href="index.php">Login</button>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Se te olvido la contraseña?<a class="link" href="camcontra.php"><ins>Cambiar contraseña<ins></a></p>
     </div>
    </form>
</body>
</html>