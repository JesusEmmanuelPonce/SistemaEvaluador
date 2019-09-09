<?php 

	include'conexion.php';

	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre-txt'];
	$apellido = $_POST['apellido-txt'];
	$apellidoM = $_POST['apellidoM-txt'];
	$edad = $_POST['edad-txt'];
	$email = $_POST['email-txt'];
	$pass = $_POST['pass-txt'];
	$status = $_POST['status'];
	$mai = $_POST['mai'];
	$sr = $_POST['sr'];
	$am = $_POST['am'];
	$ea = $_POST['ea'];


	$insertar = "UPDATE registros SET nombre='$nombre', apellidoPa='$apellido', apellidoMa='$apellidoM',edad='$edad', email='$email', pass='$pass', status='$status', mai='$mai', sr='$sr', am='$am', ea='$ea' WHERE id='$id' ";

	$resultado = mysqli_query($conexion,$insertar);
	if (!$resultado) {
		echo "Error al actualizar";
	}else{
		echo "Exito al actualizar ";
		echo "<br>";
		echo "<a href='admin.php'>Regresar</a>";
	}

	mysqli_close($conexion);

 ?>