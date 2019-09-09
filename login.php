<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: 'Roboto', sans-serif;	
			text-align: center;	
		}

		input[type="text"], input[type="password"]{
			border: 1px solid #D8D8D8;
			border-radius: 3px;
			margin: 10px;
			outline: none;
			padding: 20px;
			width: 300px;
			text-align: center;	
		}

		input[type="submit"]{
			border: 0;
			border-radius: 5px;
			border-top: 0;
			background-color: #0704EB;
			color: #fff;
			cursor: pointer;	
			margin: 20px auto;
			padding: 10px 30px;
			width: 330px;
		}

		input[type="submit"]:hover{
			background-color: #3E3BE8;
			color: #fff;
		}
	</style>
</head>
<body>

	<?php 

		require 'header.php';

	 ?>
<div>

	<form name="autentificacion_frm" action="proceso.php" method="post" enctype="application/x-www-form-urlencoded">
		
		<h1>Login</h1>
		<span>o <a href="SignUp.php">Sign Up</a></span>
		<br>
		<br> <input type="text" name="usuario_txt" placeholder="Ingresa Username"/><br>
		<br><input type="password" name="password_txt" placeholder="Ingresa Contraseña"/><br>
		<input type="submit" name="entrar_btn" value="Entrar" />
	</form>
</div>


</body>
</html>