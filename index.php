<?php

session_start();
if(isset($_SESSION['email'])){
  header("location : /Task-list/bienvenido.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
<form  action="./php/includes/login_user.php" method="POST">
    <h1>¡Iniciar Sesion!</h1>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password"  placeholder="Contraseña">
    <input type="submit" value="Siguiente" name="login">

    <div class="#">
    <span class="#">
		Si aun no tiene una cuenta?
    </span>
    <a href="./registrar/Sing_Up.php" class="txt3">
         Registrarse ahora!
	</a>
	</div>

</form>
    
   
</body>
</html>