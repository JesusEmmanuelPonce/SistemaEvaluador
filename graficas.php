<?php 

    include('conexion.php');
      session_start();
            #if (isset($_SESSION['u_usuario'])) {
            #   echo"<h1>Hola Admin</h1>";
            #   echo "<a href='cerrar.php'>Salir</a>";
            #}else{
            #   header("Location: index.php");
            #}

        if(!$_SESSION["u_usuario"]){
        header("Location: salir.php");}


 ?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Graficas de Resultados</title>

	<script src="js/jquery.js"></script>
		<style type="text/css">
${demo.css}
		</style>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Inventario Metacognitivo'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'IM', 'R3', 'RD', 'RC', 'RI', 'RP', 'CM', 'CC', 'CP', 'CD'
                
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'GC',
            data: [


<?php 
            $query = "SELECT * FROM bd_mai";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
 ?>

 [<?php echo $row['indiceInv'] ?>],
 [<?php echo $row['evaluacion'] ?>],
 [<?php echo $row['depuracion']?>],
 [<?php echo $row['monitoreo'] ?>],
 [<?php echo $row['informacion']?>],
 [<?php echo $row['planeacion'] ?>],
    [<?php echo $row['conocimientoMetaco'] ?>],
 [<?php echo $row['condicional']?>],
 [<?php echo $row['procedural'] ?>],
 [<?php echo $row['declarativo']?>]

 <?php 
    }   
  ?>

            ]

        }]
    });
});
        </script>
    <script type="text/javascript">
$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Actividad Metacognitiva'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'TC',
                'CL',
                'AU',
                'VM',
                'AM'
                
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'GC',
            data: [


<?php 
            $query2 = "SELECT * FROM bd_am";
            $resultado2 = $conexion->query($query2);
            while ($row2 = $resultado2->fetch_assoc()) {
 ?>

 [<?php echo $row2['conciencia'] ?>],
 [<?php echo $row2['control'] ?>],
 [<?php echo $row2['autopoiesis']?>],
 [<?php echo $row2['metacognitivo'] ?>],
 [<?php echo $row2['indiceAct']?>]

 <?php 
    }   
  ?>
            ]
        }]
    });
});
        </script>
	</head>
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 700px; height: 300px; margin: 0 auto"></div>

<div id="container2" style="min-width: 310px; max-width: 700px; height: 300px; margin: 0 auto"></div>

	</body>
</html>


