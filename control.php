<?php
	if($_POST["usuario_txt"]=="Alumno" && $_POST["password_txt"]=="12345"){
		//inicio la sesión
		session_start();
		
		//Declarocion de variables de sesión
		$_SESSION["autentificado"] = true;
		$_SESSION["usuario"] = $_POST["usuario_txt"];
		
		header("Location: menu.php");
	}else{
		header("Location: login.php?error=si");
	}
?>