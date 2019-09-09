<?php 

include("conexion.php");

	$proceso = $conexion->query("SELECT * FROM registros WHERE sr = 1");

	if ($resultado = mysqli_fetch_array($proceso)) {
				
		header("Location: cuestionarioSR.php");
	}
	else{
		header("Location: cuestionariobloqueado.php");
	}



 ?>