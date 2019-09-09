<?php 
	session_start();

	$usuario = $_POST['usuario_txt'];
	$pass = $_POST['password_txt'];

	include("conexion.php");

	$proceso = $conexion->query("SELECT * FROM registros WHERE email = '$usuario' AND pass = '$pass' AND status = 1");

	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;

		
		header("Location: menu.php");
	}
	else{
		header("Location: bloqueado.php");
	}
 ?>