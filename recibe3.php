
<?php 

#Cuestionario AM
include 'conexion.php';
	
$concienciaArray = $_REQUEST['resulcon'];
$controlArray = $_REQUEST['resulcont'];
$autopoiesisArray = $_REQUEST['resulauto'];
$metacognitivasArray = $_REQUEST['resulmeta'];
$sistematicoArray = $_REQUEST['resulsist'];
$indiceAct = $_REQUEST['indiceActividad'];

$insertar4 = "UPDATE bd_am SET conciencia = '$concienciaArray', control = '$controlArray', autopoiesis = '$autopoiesisArray', metacognitivo = '$metacognitivasArray', sistematico = '$sistematicoArray', indiceAct = '$indiceAct' ";

$resultado = mysqli_query($conexion,$insertar4);
	if (!$resultado) {
		echo "Error al registrar";
	}else{
		header("Location: menu.php");
	}

	mysqli_close($conexion); 

?>
