<?php 

include("conexion.php");

	$proceso = $conexion->query("SELECT * FROM registros WHERE am = 1");

	if ($resultado = mysqli_fetch_array($proceso)) {
				
		header("Location: cuestionarioAM.php");
	}
	else{
		header("Location: cuestionariobloqueado.php");
	}



 ?>