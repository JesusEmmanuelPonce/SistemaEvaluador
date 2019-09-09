<?php 

	include'conexion.php';

	$nombre = $_POST['nombre-txt'];
	$apellido = $_POST['apellido-txt'];
	$apellidoM = $_POST['apellidoM-txt'];
	$email = $_POST['email-txt'];
	$pass = $_POST['pass-txt'];


	$insertar = "INSERT INTO administradores(nombre,apellidoPa,apellidoMa,email,pass) VALUES ('$nombre','$apellido','$apellidoM','$email','$pass')";

	$resultado = mysqli_query($conexion,$insertar);
	if (!$resultado) {
		echo "Error al registrar";

	}else{
		header("Location: admin.php");
	}

	mysqli_close($conexion);

 ?>