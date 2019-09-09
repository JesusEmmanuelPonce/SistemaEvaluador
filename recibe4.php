<?php 
#Cuestionario EA
include 'conexion.php';

$activoArray = $_REQUEST['resulacti'];
$reflexivoArray = $_REQUEST['resulrefle'];
$teoricoArray = $_REQUEST['resulteo'];
$pragmaticoArray =$_REQUEST['resulpagma'];

$insertar3 = "INSERT INTO bd_ea(activo,reflexivo,teorico,pragmatico) VALUES ('$activoArray','$reflexivoArray','$teoricoArray','$pragmaticoArray')";


$resultado = mysqli_query($conexion,$insertar3);
	if (!$resultado) {
		echo "Error al registrar";
	}else{
		header("Location: menu.php");
	}

	mysqli_close($conexion);

	 ?>