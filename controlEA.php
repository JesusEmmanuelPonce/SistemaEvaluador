<?php 

include("conexion.php");

	$proceso = $conexion->query("SELECT * FROM registros WHERE ea = 1");

	if ($resultado = mysqli_fetch_array($proceso)) {
				
		header("Location: cuestionarioEA.php");
	}
	else{
		header("Location: cuestionariobloqueado.php");
	}



 ?>