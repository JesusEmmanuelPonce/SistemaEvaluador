<?php 

#Cuestionario SR

include 'conexion.php';

$resultadoA = $_REQUEST['resula'];
$resultadoB = $_REQUEST['resulb'];
$resultadoC = $_REQUEST['resulc'];


$insertar1 = "INSERT INTO bd_sr(srA,srB,srC) VALUES ('$resultadoA','$resultadoB','$resultadoC')";

$resultado = mysqli_query($conexion,$insertar1);
	if (!$resultado) {
		echo "Error al registrar";
	}else{
		header("Location: menu.php");
	}

	mysqli_close($conexion);
 ?>