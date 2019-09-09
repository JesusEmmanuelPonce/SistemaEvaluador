<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Administrador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<style>
		body{
			background-image: url("fondo-login.jpg");
			font-family: "arial";
			margin: 0;
			padding: 0;
			text-align: center;
		}

				#menu{
			background-color: #585858;
			border-radius: 5px;
		}

		#menu ul{
			list-style: none;
			margin: 0;
			padding: 0;
		}

		#menu ul li{
			display: inline-block;
		}

		#menu ul li a{
			color: white;
			display: block;
			padding: 20px 20px;
			text-decoration: none;
		}

		#menu ul li a:hover{
			background-color: #FFF;
			color:#000;
		}

		.item-r{
			float: right;
		}

		.table{
			margin-left: 100px;
			margin-top: 50px;
			width: 1100px;
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
			header("Location: cerrar.php");}

?>
	
	<h1>Hola Admin</h1>
	<a href="cerrar.php">Cerrar	</a>

	
		<table class="table">
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellido Materno</td>
				<td>Apellido Paterno</td>
				<td>Edad</td>
				<td>E-mail</td>
				<td>Contraseña</td>
				<td>Status</td>
				<td>MAI</td>
				<td>SR</td>
				<td>AM</td>
				<td>EA</td>
				<td colspan="2"><a href="nuevo_admin.php"><input type="button" class="btn btn-success" value="Nuevo Admin"> </a></td>
			</tr>



			<?php 	

			include("conexion.php");

			$query = "SELECT * FROM registros";
			$resultado = $conexion->query($query);
				while ($row = $resultado->fetch_assoc()) {
			?>		
			

			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['nombre']?></td>
				<td><?php echo $row['apellidoPa'] ?></td>
				<td><?php echo $row['apellidoMa'] ?></td>
				<td><?php echo $row['edad'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['pass'] ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['mai'] ?></td>
				<td><?php echo $row['sr'] ?></td>
				<td><?php echo $row['am'] ?></td>
				<td><?php echo $row['ea']; ?></td>
				<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-warning" value="Modificar"> </a></td>
				<td><a href="eliminar.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-danger"value="Elminar"></a></td>
			</tr>
			 <?php 
			 	}
			  ?>
		</table>


	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>