<?php 

		session_start();
			#if (isset($_SESSION['u_usuario'])) {
			#	echo"<h1>Hola Admin</h1>";
			#	echo "<a href='cerrar.php'>Salir</a>";
			#}else{
			#	header("Location: index.php");
			#}

			if(!$_SESSION["u_usuario"]){
			header("Location: salir.php");}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	
	<style>
		body{
		    margin: 0;
		    padding: 0;
		    background: url(fondo-login.jpg);
		    background-repeat: no-repeat;
    		background-attachment: fixed;
		    background-size: cover;
		    background-position: center;
		    font-family: sans-serif;
		    text-align: center;

	}

	.table, h2{
		margin: auto;
		text-align: center;
		width: 650px;
	}

	.btn{
		margin: 20px;
		padding: 8px;
	}

	
	</style>
</head>
<body>
	<div id="HTMLtoPDF">

	<strong><h1>Hoja de Resultados</h1></strong>
	<table class="table table-striped table-bordered "">
			<tr>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Edad</td>
				<td>Email</td>
			</tr>

			<?php 	

			include("conexion.php");

			$query0 = "SELECT * FROM registros";
			$resultado0= $conexion->query($query0);
				while ($row0 = $resultado0->fetch_assoc()) {
			?>		
		
			<tr>
				<td><?php echo $row0['nombre'] ?></td>
				<td><?php echo $row0['apellidoPa'] ?></td>
				<td><?php echo $row0['apellidoMa'] ?></td>
				<td><?php echo $row0['edad'] ?></td>
				<td><?php echo $row0['email'] ?></td>
			</tr>
			<?php 
				}
			 ?>
	</table>
	<br>

	
		<!--Cuestionario MAI-->
	<strong><h2>Inventario Metagnitivo</h2></strong>
	<table class="table table-striped table-bordered " id="tabla 1">
			<tr>
				<td>Concepto</td>
				<td>Clave</td>
				<td>GC</td>
				<td>Referencia</td>
			</tr>
			<?php 	

			include("conexion.php");

			$query = "SELECT * FROM bd_mai";
			$resultado = $conexion->query($query);
				while ($row = $resultado->fetch_assoc()) {
			?>		
			<tr>
				<td>Conocimiento Declarativo</td>
				<td>CD</td>
				<td><?php echo $row['declarativo'] ?></td>
				<td>69.21</td>
			</tr>
			<tr>
				<td>Conocimiento Procedimental</td>
				<td>CP</td>
				<td><?php echo $row['procedural'] ?></td>
				<td>67</td>
			</tr>
			<tr>
				<td>Conocimiento condicional</td>
				<td>CC</td>
				<td><?php echo $row['condicional'] ?></td>
				<td>70.55</td>
			</tr>


			<tr>
				<td><strong>Conocimiento Metacognitivo</strong></td>
				<td>CM</td>
				<td><strong><?php echo $row['conocimientoMetaco'] ?></strong></td>
				<td>69.83</td>
			</tr>

			<tr>
				<td>Planeacion</td>
				<td>RP</td>
				<td><?php echo $row['planeacion'] ?></td>
				<td>63.6</td>
			</tr>
			<tr>
				<td>Informacion Estrategica</td>
				<td>RI</td>
				<td><?php echo $row['informacion'] ?></td>
				<td>69.86</td>
			</tr>
			<tr>
				<td>Monitoreo</td>
				<td>RC</td>
				<td><?php echo $row['monitoreo'] ?></td>
				<td>65.03</td>
			</tr>
			<tr>
				<td>Depuracion</td>
				<td>RD</td>
				<td><?php echo $row['depuracion'] ?></td>
				<td>75.85</td>
			</tr>
			<tr>
				<td>Evaluacion</td>
				<td>RE</td>
				<td><?php echo $row['evaluacion'] ?></td>
				<td>63.15</td>
			</tr>
			<tr>
				<td><strong>Indice Inventario Metac.</strong></td>
				<td>IM</td>
				<td><strong><?php echo $row['indiceInv'] ?></strong></td>
				<td>68.37</td>
			</tr>
			<?php 
				}
			 ?>
	</table>
	<br>

	<!--Cuestionario SR-->

	<table class="table table-striped table-bordered " id="tabla2">
			<tr>
				<td>Visual</td>
				<td>Auditivo</td>
				<td>Kinestesico</td>
			</tr>

			<?php 	

			include("conexion.php");

			$query1 = "SELECT * FROM bd_sr";
			$resultado1 = $conexion->query($query1);
				while ($row1 = $resultado1->fetch_assoc()) {
			?>		
		
			<tr>
				<td><?php echo $row1['srA'] ?></td>
				<td><?php echo $row1['srB'] ?></td>
				<td><?php echo $row1['srC'] ?></td>
			</tr>
			<?php 
				}
			 ?>
	</table>
	<br>

	

	<!--Cuestionario AM-->
	<table class="table table-striped table-bordered ">
			<tr>
				<td>Concepto</td>
				<td>Clave</td>
				<td>GC</td>
				<td>Referencia</td>
			</tr>
			<?php 	

			include("conexion.php");

			$query2 = "SELECT * FROM bd_am";
			$resultado2 = $conexion->query($query2);
				while ($row2 = $resultado2->fetch_assoc()) {
			?>		
			<tr>
				<td>Toma de conciencia</td>
				<td>TC</td>
				<td><?php echo $row2['conciencia'] ?></td>
				<td>73.96</td>
			</tr>
			<tr>
				<td>Control</td>
				<td>CL</td>
				<td><?php echo $row2['control'] ?></td>
				<td>63.99</td>
			</tr>
			<tr>
				<td>Autopoiesis</td>
				<td>AU</td>
				<td><?php echo $row2['autopoiesis'] ?></td>
				<td>70.06</td>
			</tr>
			<tr>
				<td>Variables de metacognicion</td>
				<td>VM</td>
				<td><?php echo $row2['metacognitivo'] ?></td>
				<td>69.37</td>
			</tr>
			<tr>
				<td><strong>Indice Actividad Metac.</strong></td>
				<td>AM</td>
				<td><?php echo $row2['indiceAct'] ?></td>
				<td><strong>69.28</strong></td>
			</tr>
			<br>
			
			<?php 
				}
			 ?>
	</table>


	<!--Total-->
	<table class="table table-striped table-bordered ">
			<tr>
				<td>Indicador Metacognitivo</td>
				<td>ICM</td>
				<td>Referencia</td>
			</tr>
			<br>
			<?php 	

			include("conexion.php");

			$query3 = "SELECT * FROM bd_am";
			$resultado3 = $conexion->query($query3);
				while ($row3 = $resultado3->fetch_assoc()) {
			?>		
			<tr>
				<td></td>
				<td><?php 

					$res1 = $row3['total'];
					$res2 = $row3['indiceAct'];

				echo  ($res1 + $res2) / 2 ?></td>
				<td>69.03</td>
			
			</tr>
		
			
			<?php 
				}
			 ?>
	</table>

<!--Graficas-->

	<div class="btn">
		<a href="menu.php"><input type="button" class="btn btn-default" value="Menu"></a>
		<input type="button" class="btn btn-warning" id="boton" onclick="HTMLtoPDF()" value="Imprimir">
		<a href="graficas.php"><input type="button" class="btn btn-primary" value="Ver Grafica"></a>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

<!--modulo PDF-->
	<script src="js2/jquery2.js"></script>
	<script src="js2/pdfFromHTML.js"></script>
	<script src="js2/jspdf.js"></script>
</body>
</html>