<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		 Cuestionario Bloqueado
	</title>

	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

	<style>
		body{
			background-image: url(fondo-login.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
		}

		a{
			text-decoration: none;
		}

		h1{
			text-align: center;
		}

		#alert{
			margin: 170px auto;
		}

	</style>
</head>
<body>
	<?php 

		require 'header.php';

	 ?>
	<div class="alert alert-danger" id="alert">
		<h1><strong>Ups</strong> Parece que este cuestionario esta bloqueado</h1>
		<a href="#">Manda un mensaje al Administrador</a>
	</div>



</body>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>