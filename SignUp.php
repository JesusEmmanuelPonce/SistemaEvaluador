<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
		<style>

		body{

			font-family: 'Roboto', sans-serif;	
			text-align: center;	
		}

		input[type="text"], input[type="password"]{
			border: 1px solid #D8D8D8;
			border-radius: 3px;
			margin: 8px;
			outline: none;
			padding: 12px;
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
<h1>Sign Up</h1>
<span>o <a href="login.php">Login</a></span>
	 <form method="post" name="" action="registrar.php">
		
			<br>
			<input type="text" name="nombre-txt"  id="nombre" placeholder="Nombre" >
			<br>
			
			<input type="text" name="apellido-txt"  id="apP" placeholder="Apellido Paterno">
			<br>
			
			<input type="text" name="apellidoM-txt"  id="apM" placeholder="Apellido Materno">
			<br>
		
			<input type="text" name="edad-txt"  id="edad" placeholder="Edad">
			<br>
		
			<input type="text" name="email-txt" id="email"  placeholder="E-mail">
			<br>
		
			<input type="password" name="pass-txt"  id="pass" placeholder="Contraseña">
			<br>
			<input type="submit" name="enviar">

		</form>



	
</body>
</html>