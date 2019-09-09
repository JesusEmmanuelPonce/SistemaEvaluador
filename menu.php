<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina Principal</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<style>
		body{    
			background-image: url(fondo-login.jpg);
			padding: 40px; font-family: Arial;}
		
		#menu{
			background-color: #585858;
			border-radius: 5px;
		}

		#menu ul{
			list-style: none;
			margin: 0;
			padding: 0;
		}

		#menu li{
			position: relative;
		}
		#menu li ul{
			position: absolute;
		}

		#menu li ul {
			display: none;
		}

		#menu ul li{
			display: inline-block;
		}

		#menu ul li a{
			color: white;
			display: block;
			padding: 20px 20px;
			text-align: center;
			text-decoration: none;
		}

		#menu ul li a:hover{

			background-color: #fff;
			border-radius: 5px;
			color:#000;
			transition: .5s;
		}

		#menu li:hover ul{
			text-align: center;
			display: block;
		}
		

		#menu li li{
			border-radius: 5px;
			border: .5px solid #fff; 
			background-color: #585858;
			color: #fff;
			width: 100%;
		}

	
		.item-r{
			float: right;
		}
	</style>
</head>
<body>

	<?php 

		session_start();
			#if (isset($_SESSION['u_usuario'])) {
			#	echo"<h1>Hola Admin</h1>";
			#	echo "<a href='cerrar.php'>Salir</a>";
			#}else{
			#	header("Location: index.php");
			#}

			if(!$_SESSION["u_usuario"]){
			header("Location: salir.php");}

?>
	<div id="menu">
		<ul>
			<li><a href="menu.php">Inicio</a></li>
			<li><a href="#">Cuestionario</a>
				<ul>
					<li><a href="controlMAI.php">MAI</a></li>
					<li><a href="controlSR.php">SR</a></li>
					<li><a href="controlAM.php">AM</a></li>
					<li><a href="controlEA.php">EA</a></li>
				</ul>
			</li>
			<li><a href="resultados.php">Resultados</a></li>
			<li class="item-r"><a href="salir.php">Salir</a></li>
		</ul>
	</div>

	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>