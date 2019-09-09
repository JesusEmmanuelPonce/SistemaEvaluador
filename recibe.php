<?php 	

#Cuestionario MAi
include 'conexion.php';

$declarativoArray = $_REQUEST['resuldecla'];
$proceduralArray = $_REQUEST['resulproce'];
$condicionalArray = $_REQUEST['resulcond'];
$planeacionArray = $_REQUEST['resulplan'];
$informacionArray = $_REQUEST['resulinfo'];
$monitoreoArray = $_REQUEST['resulplan'];
$depuracionArray = $_REQUEST['resuldepu'];
$evaluacionArray = $_REQUEST['resuleval'];
$conocimientoMeta = $_REQUEST['conmeta'];
$indice = $_REQUEST['indiceM'];

$insertar2 = "INSERT INTO bd_mai(declarativo,procedural,condicional,planeacion,informacion,monitoreo,depuracion,evaluacion,conocimientoMetaco,indiceInv) VALUES ('$declarativoArray','$proceduralArray','$condicionalArray','$planeacionArray','$informacionArray','$monitoreoArray','$depuracionArray','$evaluacionArray','$conocimientoMeta','$indice')";

$resultado = mysqli_query($conexion,$insertar2);


$insertar3 = "INSERT INTO bd_am(total) VALUES ('$indice')";

$resultado1 = mysqli_query($conexion,$insertar3);

if (!$resultado && $resultado1) {
	echo "Error al registrar";
} else{
	header("Location: menu.php");
}


 ?>