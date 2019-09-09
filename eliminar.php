<?php 

	include'conexion.php';

	$id = $_REQUEST['id'];


	$insertar = "DELETE FROM registros WHERE id='$id' ";

	$resultado = mysqli_query($conexion,$insertar);
	if (!$resultado) {
		echo "Error al Eliminar";
	}else{
		echo "Exito al Eliminar ";
		echo "<br>";
		echo "<a href='admin.php'>Regresar</a>";
	}
	
	mysqli_close($conexion);

 ?>