<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Usuario</title>
	<style>

		body{
			background-image: url("fondo-login.jpg");
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

		.status input[type="text"]{
			text-align: center;
			width: 260px;

		}
	</style>



</head>
<body>
	<h1>Modificar</h1>

	 		<?php 	

 			$id = $_REQUEST['id'];

			include("conexion.php");

				$query = "SELECT * FROM registros WHERE id = '$id'";
				$resultado = $conexion->query($query);
				$row = $resultado->fetch_assoc();
			?>	

	 <form method="post" name="" action="modificar_procesos.php?id=<?php echo $row['id']; ?>">

		
				<br>
				<input type="text" name="nombre-txt" placeholder="Nombre" value="<?php echo $row['nombre']; ?>">
				<br>
				
				<input type="text" name="apellido-txt" placeholder="Apellido Paterno" value="<?php echo $row['apellidoPa']; ?>">
				<br>
				
				<input type="text" name="apellidoM-txt" placeholder="Apellido Materno" value="<?php echo $row['apellidoMa']; ?>">
				<br>
			
				<input type="text" name="edad-txt" placeholder="Edad" value="<?php echo $row['edad']; ?>">
				<br>
			
				<input type="text" name="email-txt" placeholder="E-mail" value="<?php echo $row['email']; ?>">
				<br>

				<input type="text" name="pass-txt" placeholder="Contraseña" value="<?php echo $row['pass']; ?>">
				<br>

				<input type="text" name="status" value="<?php echo $row['status']; ?>"> 
				<br>

<div class="status">
				<i>MAI</i> 
				<input type="text" name="mai" value="<?php echo $row['mai']; ?>"> 
				<br>
				<i>SR </i>
				<input  type="text" name="sr" value="<?php echo $row['sr']; ?>"> 
				<br>
				<i>AM </i>
				<input  type="text" name="am" value="<?php echo $row['am']; ?>"> 
				<br>
				<i>EA </i>
				<input  type="text" name="ea" value="<?php echo $row['ea']; ?>"> 
				<br>
</div>
				<input type="submit" name="enviar">

		</form>
	
</body>
</html>
