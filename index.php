<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<style>
		body{
			margin: 0;
			padding: 0;
		}

		.ah{	
			background-color:#fff;
			border: 1px solid #D8D8D8;
			border-radius: 5px;
			color:#000;
			margin:5px;
			padding: 15px;
			text-decoration: none;
		}

		.ah:hover{	
			background-color: #A4A4A4;
			color:#fff;
		}

	</style>
</head>
<body>

	<?php 

		require 'header.php';

	 ?>

		<h1>Bienvenido</h1>

		<strong><a class="ah" href="login.php">Login</a></strong> or
		<strong><a class="ah" href="signup.php">Sign Up</a></strong>
		<br>
		<br>

		<a href="login_admin.php"><input type="button" class="btn btn-warning" value="Administrador"></a>

	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>