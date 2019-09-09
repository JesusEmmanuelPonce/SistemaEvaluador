<?php 

include("conexion.php");

	$proceso = $conexion->query("SELECT * FROM registros WHERE mai = 1");
	
	if ($resultado = mysqli_fetch_array($proceso)) {


		
		header("Location: cuestionarioMAI.php");
	}
	else{
		header("Location: cuestionariobloqueado.php");
	}



 ?>