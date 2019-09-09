<?php 

	include'conexion.php';

	$nombre = $_POST['nombre-txt'];
	$apellido = $_POST['apellido-txt'];
	$apellidoM = $_POST['apellidoM-txt'];
	$edad = $_POST['edad-txt'];
	$email = $_POST['email-txt'];
	$pass = $_POST['pass-txt'];
	$status = 1;
	$mai = 1;
	$sr = 1;
	$am = 1;
	$ea = 1 ;


	$insertar = "INSERT INTO registros(nombre,apellidoPa,apellidoMa,edad,email,pass,status,mai,sr,am,ea) VALUES ('$nombre','$apellido','$apellidoM','$edad','$email','$pass','$status','$mai','$sr','$am','$ea')";

	$resultado = mysqli_query($conexion,$insertar);
	if (!$resultado) {
		echo "Error al registrar";
	}else{
		header("Location: login.php");
	}

	mysqli_close($conexion);

 ?>