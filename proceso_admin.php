<?php 
	session_start();

	$usuario = $_POST['usuario_txt'];
	$pass = $_POST['password_txt'];

	include("conexion.php");

	$proceso = $conexion->query("SELECT * FROM administradores WHERE email = '$usuario' AND pass = '$pass'");

	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;
		header("Location: admin.php");
	}
	else{
		header("Location: login.php");
	}
 ?>