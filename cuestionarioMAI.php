<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cuestionario MAI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/radios/estilos.css">
<style>
	body{
		background-image: url('fondo-login.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>

</head>


<body>
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Cuestionaro MAI</h1>
	    <p class="lead">Dev 4</p>
	  </div>
	</div>

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
<div class="container">
		<br><br>
	<a href="menu.php"><input type="button" id="salir-btn"  class="btn btn-default" value="Menu"></a>
	<br><br>
<a href="#ventana" class="btn btn-primary" data-toggle="modal"> Instrucciones </a>
		<div class="modal fade" id="ventana">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						<h4 class="modal-title">Instrucciones</h4>
					</div>
					<div class="modal-body">
						<p>
						Marque con una  X  la letra que considere representa la actividad que prefiere.  
						Marque solo una letra por pregunta.
						Lo importante es que seas muy sincero contigo mismo en las respuestas
						</p>
						
					</div>
				</div>
			</div>
		</div>	

		<br><br>

	<a href="salir.php"><input type="button" id="salir-btn"  class="btn btn-danger" value="Salir"></a>
		
	<div class="wrap">
		<form action="javascript:make_json(this)" class="formulario" onsubmit="return make_json(this)";>
			<h3>1) Durante el aprendizaje: generalmente me pregunto periódicamente ¿si estoy alcanzando mis metas?</h3>
			<div class="radios">	
					
					<input type="radio" name="mai1" id="nada" value="1">
					<label for="nada">Nunca</label>

					<input type="radio" name="mai1" id="casinada" value="2">
					<label for="casinada">Pocas veces</label>

					<input type="radio" name="mai1" id="algo" value="3">
					<label for="algo">Frecuentemente</label>

					<input type="radio" name="mai1" id="mucho" value="4">
					<label for="mucho">Muchas veces</label>

					<input type="radio" name="mai1" id="todo" value="5">
					<label for="todo">Siempre</label>
			</div>

			<div class="radios">
				<h3>2) Antes de contestar: generalmente considero varias alternativas </h3>
					<input type="radio" name="mai2" id="nada2" value="1">
					<label for="nada2">Nunca</label>

					<input type="radio" name="mai2" id="casinada2" value="2">
					<label for="casinada2">Pocas veces</label>

					<input type="radio" name="mai2" id="algo2" value="3">
					<label for="algo2">Algo</label>

					<input type="radio" name="mai2" id="mucho2" value="4">
					<label for="mucho2">Muchas veces</label>

					<input type="radio" name="mai2" id="todo2" value="5">
					<label for="todo2">Siempre</label>
				</div>

			<div class="radios">
				<h3>3) Generalmente trato de usar estrategias que me han funcionado antes </h3>
					<input type="radio" name="mai3" id="nada3" value="1">
					<label for="nada3">Nunca</label>

					<input type="radio" name="mai3" id="casinada3" value="2">
					<label for="casinada3">Pocas veces</label>

					<input type="radio" name="mai3" id="algo3" value="3">
					<label for="algo3">Frecuentemente</label>

					<input type="radio" name="mai3" id="mucho3" value="4">
					<label for="mucho3">Muchas veces</label>

					<input type="radio" name="mai3" id="todo3" value="5">
					<label for="todo3">Siempre</label>
			</div>

			<div class="radios">
				<h3>4) Generalmente me administro mientras aprendo para tener tiempo suficiente </h3>
					<input type="radio" name="mai4" id="nada4" value="1">
					<label for="nada4">Nunca</label>

					<input type="radio" name="mai4" id="casinada4" value="2">
					<label for="casinada4">Pocas veces</label>

					<input type="radio" name="mai4" id="algo4" value="3">
					<label for="algo4">Frecuentemente</label>

					<input type="radio" name="mai4" id="mucho4" value="4">
					<label for="mucho4">Muchas veces</label>

					<input type="radio" name="mai4" id="todo4" value="5">
					<label for="todo4">Siempre</label>
			</div>

			<div class="radios">
				<h3>5) Conozco mis fortalezas y debilidades intelectuales</h3>
					<input type="radio" name="mai5" id="nada5" value="1">
					<label for="nada5">Nunca</label>

					<input type="radio" name="mai5" id="casinada5" value="2">
					<label for="casinada5">Pocas veces</label>

					<input type="radio" name="mai5" id="algo5" value="3">
					<label for="algo5">Frecuentemente</label>

					<input type="radio" name="mai5" id="mucho5" value="4">
					<label for="mucho5">Muchas veces</label>

					<input type="radio" name="mai5" id="todo5" value="5">
					<label for="todo5">Siempre</label>
			</div>

			<div class="radios">
				<h3>6) Antes de comenzar una tarea: generalmente pienso acerca de lo que realmente necesito aprender</h3>
					<input type="radio" name="mai6" id="nada6" value="1">
					<label for="nada6">Nunca</label>

					<input type="radio" name="mai6" id="casinada6" value="2">
					<label for="casinada6">Pocas veces</label>

					<input type="radio" name="mai6" id="algo6" value="3">
					<label for="algo6">Frecuentemente</label>

					<input type="radio" name="mai6" id="mucho6" value="4">
					<label for="mucho6">Muchas veces</label>

					<input type="radio" name="mai6" id="todo6" value="5">
					<label for="todo6">Siempre</label>
			</div>

			<div class="radios">
				<h3>7) Una vez que termino un examen: generalmente se que tan bien lo hice </h3>
					<input type="radio" name="mai7" id="nada7" value="1">
					<label for="nada7">Nunca</label>

					<input type="radio" name="mai7" id="casinada7" value="2"> 
					<label for="casinada7">Pocas veces</label>

					<input type="radio" name="mai7" id="algo7" value="3">
					<label for="algo7">Frecuentemente</label>

					<input type="radio" name="mai7" id="mucho7" value="4">
					<label for="mucho7">Muchas veces</label>

					<input type="radio" name="mai7" id="todo7" value="5">
					<label for="todo7">Siempre</label>
			</div>

			<div class="radios">
				<h3>8) Antes de comenzar una tarea: generalmente establezco metas especificas </h3>
					<input type="radio" name="mai8" id="nada8" value="1">
					<label for="nada8">Nunca</label>

					<input type="radio" name="mai8" id="casinada8" value="2">
					<label for="casinada8">Pocas veces</label>

					<input type="radio" name="mai8" id="algo8" value="3">
					<label for="algo8">Frecuentemente</label>

					<input type="radio" name="mai8" id="mucho8" value="4">
					<label for="mucho8">Muchas veces</label>

					<input type="radio" name="mai8" id="todo8" value="5">
					<label for="todo8">Siempre</label>
			</div>

			<div class="radios">
				<h3>09. Al encontrar información importante: generalmente me voy más despacio</h3>
					<input type="radio" name="mai9" id="nada9" value="1">
					<label for="nada9">Nunca</label>

					<input type="radio" name="mai9" id="casinada9" value="2">
					<label for="casinada9">Pocas veces</label>

					<input type="radio" name="mai9" id="algo9" value="3">
					<label for="algo9">Frecuentemente</label>

					<input type="radio" name="mai9" id="mucho9" value="4">
					<label for="mucho9">Muchas veces</label>

					<input type="radio" name="mai9" id="todo9" value="5">
					<label for="todo9">Siempre</label>
			</div>

			<div class="radios">
				<h3>10. Generalmente se que clase de información es la más importante para aprender </h3>
					<input type="radio" name="mai10" id="nada10" value="1">
					<label for="nada10">Nunca</label>

					<input type="radio" name="mai10" id="casinada10" value="2">
					<label for="casinada10">Pocas veces</label>

					<input type="radio" name="mai10" id="algo10" value="3">
					<label for="algo10">Frecuentemente</label>

					<input type="radio" name="mai10" id="mucho10" value="4">
					<label for="mucho10">Muchas veces</label>

					<input type="radio" name="mai10" id="todo10" value="5">
					<label for="todo10">Siempre</label>
			</div>

			<div class="radios">
				<h3>11. Al estar resolviendo un problema: generalmente me pregunto ¿si estoy  considerado todas las opciones? </h3>
					<input type="radio" name="mai11" id="nada11" value="1">
					<label for="nada11">Nunca</label>

					<input type="radio" name="mai11" id="casinada11" value="2">
					<label for="casinada11">Pocas veces</label>

					<input type="radio" name="mai11" id="algo11" value="3">
					<label for="algo11">Frecuentemente</label>

					<input type="radio" name="mai11" id="mucho11" value="4">
					<label for="mucho11">Muchas veces</label>

					<input type="radio" name="mai11" id="todo11" value="5">
					<label for="todo11">Siempre</label>
			</div>

			<div class="radios">
				<h3>12. Soy bueno para organizar información </h3>
					<input type="radio" name="mai12" id="nada12" value="1">
					<label for="nada12">Nunca</label>

					<input type="radio" name="mai12" id="casinada12" value="2">
					<label for="casinada12">Pocas veces</label>

					<input type="radio" name="mai12" id="algo12" value="3">
					<label for="algo12">Frecuentemente</label>

					<input type="radio" name="mai12" id="mucho12" value="4">
					<label for="mucho12">Muchas veces</label>

					<input type="radio" name="mai12" id="todo12" value="5">
					<label for="todo12">Siempre</label>
			</div>

			<div class="radios">
				<h3>13. Generalmente enfoco conscientemente mi atención en información importante </h3>
					<input type="radio" name="mai13" id="nada13" value="1">
					<label for="nada13">Nunca</label>

					<input type="radio" name="mai13" id="casinada13" value="2">
					<label for="casinada13">Pocas veces</label>

					<input type="radio" name="mai13" id="algo13" value="3">
					<label for="algo13">Frecuentemente</label>

					<input type="radio" name="mai13" id="mucho13" value="4">
					<label for="mucho13">Muchas veces</label>

					<input type="radio" name="mai13" id="todo13" value="5">
					<label for="todo13">Siempre</label>
			</div>

			<div class="radios">
				<h3>14. Generalmente tengo un propósito específico para cada estrategia que uso </h3>
					<input type="radio" name="mai14" id="nada14" value="1">
					<label for="nada14">Nunca</label>

					<input type="radio" name="mai14" id="casinada14" value="2">
					<label for="casinada14">Pocas veces</label>

					<input type="radio" name="mai14" id="algo14" value="3">
					<label for="algo14">Frecuentemente</label>

					<input type="radio" name="mai14" id="mucho14" value="4">
					<label for="mucho14">Muchas veces</label>

					<input type="radio" name="mai14" id="todo14" value="5">
					<label for="todo14">Siempre</label>
			</div>

			<div class="radios">
				<h3>15. Aprendo mejor cuando ya conozco algo acerca del tema </h3>
					<input type="radio" name="mai15" id="nada15" value="1">
					<label for="nada15">Nunca</label>

					<input type="radio" name="mai15" id="casinada15" value="2">
					<label for="casinada15">Pocas veces</label>

					<input type="radio" name="mai15" id="algo15" value="3">
					<label for="algo15">Frecuentemente</label>

					<input type="radio" name="mai15" id="mucho15" value="4">
					<label for="mucho15">Muchas veces</label>

					<input type="radio" name="mai15" id="todo15" value="5">
					<label for="todo15">Siempre</label>
			</div>

			<div class="radios">
				<h3>16. Generalmente se que espera el maestro que yo aprenda </h3>
					<input type="radio" name="mai16" id="nada16" value="1">
					<label for="nada16">Nunca</label>

					<input type="radio" name="mai16" id="casinada16" value="2">
					<label for="casinada16">Pocas veces</label>

					<input type="radio" name="mai16" id="algo16" value="3">
					<label for="algo16">Frecuentemente</label>

					<input type="radio" name="mai16" id="mucho16" value="4">
					<label for="mucho16">Muchas veces</label>

					<input type="radio" name="mai16" id="todo16" value="5">
					<label for="todo16">Siempre</label>
			</div>

			<div class="radios">
				<h3>17. Soy bueno recordando información </h3>
					<input type="radio" name="mai17" id="nada17" value="1">
					<label for="nada17">Nunca</label>

					<input type="radio" name="mai17" id="casinada17" value="2">
					<label for="casinada17">Pocas veces</label>

					<input type="radio" name="mai17" id="algo17" value="3">
					<label for="algo17">Frecuentemente</label>

					<input type="radio" name="mai17" id="mucho17" value="4">
					<label for="mucho17">Muchas veces</label>

					<input type="radio" name="mai17" id="todo17" value="5">
					<label for="todo17">Siempre</label>
			</div>

			<div class="radios">
				<h3>18. Dependiendo de la situación: generalmente uso diferentes estrategias de aprendizaje  </h3>
					<input type="radio" name="mai18" id="nada18" value="1">
					<label for="nada18">Nunca</label>

					<input type="radio" name="mai18" id="casinada18" value="2">
					<label for="casinada18">Pocas veces</label>

					<input type="radio" name="mai18" id="algo18" value="3">
					<label for="algo18">Frecuentemente</label>

					<input type="radio" name="mai18" id="mucho18" value="4">
					<label for="mucho18">Muchas veces</label>

					<input type="radio" name="mai18" id="todo18" value="5">
					<label for="todo18">Siempre</label>
			</div>

			<div class="radios">
				<h3>19. Después que finalizo una tarea: generalmente me pregunto ¿si había una forma más fácil? </h3>
					<input type="radio" name="mai19" id="nada19" value="1">
					<label for="nada19">Nunca</label>

					<input type="radio" name="mai19" id="casinada19" value="2">
					<label for="casinada19">Pocas veces</label>

					<input type="radio" name="mai19" id="algo19" value="3">
					<label for="algo19">Frecuentemente</label>

					<input type="radio" name="mai19" id="mucho19" value="4">
					<label for="mucho19">Muchas veces</label>

					<input type="radio" name="mai19" id="todo19" value="5">
					<label for="todo19">Siempre</label>
			</div>

			<div class="radios">
				<h3>20. Generalmente tengo el control sobre mi proceso de aprendizaje </h3>
					<input type="radio" name="mai20" id="nada20" value="1">
					<label for="nada20">Nunca</label>

					<input type="radio" name="mai20" id="casinada20" value="2">
					<label for="casinada20">Pocas veces</label>

					<input type="radio" name="mai20" id="algo20" value="3">
					<label for="algo20">Frecuentemente</label>

					<input type="radio" name="mai20" id="mucho20" value="4">
					<label for="mucho20">Muchas veces</label>

					<input type="radio" name="mai20" id="todo20" value="5">
					<label for="todo20">Siempre</label>
			</div>

			<div class="radios">
				<h3>21. Frecuentemente reviso periódicamente para ayudarme a entender relaciones importantes. </h3>
					<input type="radio" name="mai21" id="nada21" value="1">
					<label for="nada21">Nunca</label>

					<input type="radio" name="mai21" id="casinada21" value="2">
					<label for="casinada21">Pocas veces</label>

					<input type="radio" name="mai21" id="algo21" value="3">
					<label for="algo21">Frecuentemente</label>

					<input type="radio" name="mai21" id="mucho21" value="4">
					<label for="mucho21">Muchas veces</label>

					<input type="radio" name="mai21" id="todo21" value="5">
					<label for="todo21">Siempre</label>
			</div>

			<div class="radios">
				<h3>22. Antes de comenzar : generalmente me hago preguntas acerca del material </h3>
					<input type="radio" name="mai22" id="nada22" value="1">
					<label for="nada22">Nunca</label>

					<input type="radio" name="mai22" id="casinada22" value="2">
					<label for="casinada22">Pocas veces</label>

					<input type="radio" name="mai22" id="algo22" value="3">
					<label for="algo22">Frecuentemente</label>

					<input type="radio" name="mai22" id="mucho22" value="4">
					<label for="mucho22">Muchas veces</label>

					<input type="radio" name="mai22" id="todo22" value="5">
					<label for="todo22">Siempre</label>
			</div>

			<div class="radios">
				<h3>23. Generalmente pienso en varias formas de resolver un problema y elijo la mejor </h3>
					<input type="radio" name="mai23" id="nada23" value="1">
					<label for="nada23">Nunca</label>

					<input type="radio" name="mai23" id="casinada23" value="2">
					<label for="casinada23">Pocas veces</label>

					<input type="radio" name="mai23" id="algo23" value="3">
					<label for="algo23">Frecuentemente</label>

					<input type="radio" name="mai23" id="mucho23" value="4">
					<label for="mucho23">Muchas veces</label>

					<input type="radio" name="mai23" id="todo23" value="5">
					<label for="todo23">Siempre</label>
			</div>

			<div class="radios">
				<h3>24. Después de terminar: generalmente resumo lo que aprendí </h3>
					<input type="radio" name="mai24" id="nada24" value="1">
					<label for="nada24">Nunca</label>

					<input type="radio" name="mai24" id="casinada24" value="2">
					<label for="casinada24">Pocas veces</label>

					<input type="radio" name="mai24" id="algo24" value="3">
					<label for="algo24">Frecuentemente</label>

					<input type="radio" name="mai24" id="mucho24" value="4">
					<label for="mucho24">Muchas veces</label>

					<input type="radio" name="mai24" id="todo24" value="5">
					<label for="todo24">Siempre</label>
			</div>

			<div class="radios">
				<h3>25. Cuando no entiendo algo:  generalmente pido ayuda a otros </h3>
					<input type="radio" name="mai25" id="nada25" value="1">
					<label for="nada25">Nunca</label>

					<input type="radio" name="mai25" id="casinada25" value="2">
					<label for="casinada25">Pocas veces</label>

					<input type="radio" name="mai25" id="algo25" value="3">
					<label for="algo25">Frecuentemente</label>

					<input type="radio" name="mai25" id="mucho25" value="4">
					<label for="mucho25">Muchas veces</label>

					<input type="radio" name="mai25" id="todo25" value="5">
					<label for="todo25">Siempre</label>
			</div>

			<div class="radios">
				<h3>26. Cuando necesito hacerlo: me puedo motivar a mi mismo para aprender </h3>
					<input type="radio" name="mai26" id="nada26" value="1">
					<label for="nada26">Nunca</label>

					<input type="radio" name="mai26" id="casinada26" value="2">
					<label for="casinada26">Pocas veces</label>

					<input type="radio" name="mai26" id="algo26" value="3">
					<label for="algo26">Frecuentemente</label>

					<input type="radio" name="mai26" id="mucho26" value="4">
					<label for="mucho26">Muchas veces</label>

					<input type="radio" name="mai26" id="todo26" value="5">
					<label for="todo26">Siempre</label>
			</div>

			<div class="radios">
				<h3>27. Cuando estudio: generalmente estoy consciente de las estrategias que uso </h3>
					<input type="radio" name="mai27" id="nada27" value="1">
					<label for="nada27">Nunca</label>

					<input type="radio" name="mai27" id="casinada27" value="2">
					<label for="casinada27">Pocas veces</label>

					<input type="radio" name="mai27" id="algo27" value="3">
					<label for="algo27">Frecuentemente</label>

					<input type="radio" name="mai27" id="mucho27" value="4">
					<label for="mucho27">Muchas veces</label>

					<input type="radio" name="mai27" id="todo27" value="5">
					<label for="todo27">Siempre</label>
			</div>

			<div class="radios">
				<h3>28. Mientras estudio: frecuentemente me descubro analizando la utilidad de las estrategias que empleo </h3>
					<input type="radio" name="mai28" id="nada28" value="1">
					<label for="nada28">Nunca</label>

					<input type="radio" name="mai28" id="casinada28" value="2">
					<label for="casinada28">Pocas veces</label>

					<input type="radio" name="mai28" id="algo28" value="3">
					<label for="algo28">Frecuentemente</label>

					<input type="radio" name="mai28" id="mucho28" value="4">
					<label for="mucho28">Muchas veces</label>

					<input type="radio" name="mai28" id="todo28" value="5">
					<label for="todo28">Siempre</label>
			</div>

			<div class="radios">
				<h3>29. Utilizó mis fortalezas intelectuales para compensar mis debilidades intelectuales </h3>
					<input type="radio" name="mai29" id="nada29" value="1">
					<label for="nada29">Nunca</label>

					<input type="radio" name="mai29" id="casinada29" value="2">
					<label for="casinada29">Pocas veces</label>

					<input type="radio" name="mai29" id="algo29" value="3">
					<label for="algo29">Frecuentemente</label>

					<input type="radio" name="mai29" id="mucho29" value="4">
					<label for="mucho29">Muchas veces</label>

					<input type="radio" name="mai29" id="todo29" value="5">
					<label for="todo29">Siempre</label>
			</div>

			<div class="radios">
				<h3>30. Generalmente me enfoco en el significado y relevancia de nueva información </h3>
					<input type="radio" name="mai30" id="nada30" value="1">
					<label for="nada30">Nunca</label>

					<input type="radio" name="mai30" id="casinada30" value="2">
					<label for="casinada30">Pocas veces</label>

					<input type="radio" name="mai30" id="algo30" value="3">
					<label for="algo30">Frecuentemente</label>

					<input type="radio" name="mai30" id="mucho30" value="4">
					<label for="mucho30">Muchas veces</label>

					<input type="radio" name="mai30" id="todo30" value="5">
					<label for="todo30">Siempre</label>
			</div>

			<div class="radios">
				<h3>31. Generalmente creo mis propios ejemplos para hacer que la información adquiera mayor significado </h3>
					<input type="radio" name="mai31" id="nada31" value="1">
					<label for="nada31">Nunca</label>

					<input type="radio" name="mai31" id="casinada31" value="2">
					<label for="casinada31">Pocas veces</label>

					<input type="radio" name="mai31" id="algo31" value="3">
					<label for="algo31">Frecuentemente</label>

					<input type="radio" name="mai31" id="mucho31" value="4">
					<label for="mucho31">Muchas veces</label>

					<input type="radio" name="mai31" id="todo31" value="5">
					<label for="todo31">Siempre</label>
			</div>

			<div class="radios">
				<h3>32. Soy bueno para juzgar qué tan bien entendí algo </h3>
					<input type="radio" name="mai32" id="nada32" value="1">
					<label for="nada32">Nunca</label>

					<input type="radio" name="mai32" id="casinada32" value="2">
					<label for="casinada32">Pocas veces</label>

					<input type="radio" name="mai32" id="algo32" value="3">
					<label for="algo32">Frecuentemente</label>

					<input type="radio" name="mai32" id="mucho32" value="4">
					<label for="mucho32">Muchas veces</label>

					<input type="radio" name="mai32" id="todo32" value="5">
					<label for="todo32">Siempre</label>
			</div>

			<div class="radios">
				<h3>33. Frecuentemente me descubro usando útiles estrategias de aprendizaje de manera automática (en forma natural- inconciente) </h3>
					<input type="radio" name="mai33" id="nada33" value="1">
					<label for="nada33">Nunca</label>

					<input type="radio" name="mai33" id="casinada33" value="2">
					<label for="casinada33">Pocas veces</label>

					<input type="radio" name="mai33" id="algo33" value="3">
					<label for="algo33">Frecuentemente</label>

					<input type="radio" name="mai33" id="mucho33" value="4">
					<label for="mucho33">Muchas veces</label>

					<input type="radio" name="mai33" id="todo33" value="5">
					<label for="todo33">Siempre</label>
			</div>

			<div class="radios">
				<h3>34. Frecuentemente me descubro haciendo regularmente pausas para confirmar mi comprensión </h3>
					<input type="radio" name="mai34" id="nada34" value="1">
					<label for="nada34">Nunca</label>

					<input type="radio" name="mai34" id="casinada34" value="2">
					<label for="casinada34">Pocas veces</label>

					<input type="radio" name="mai34" id="algo34" value="3">
					<label for="algo34">Frecuentemente</label>

					<input type="radio" name="mai34" id="mucho34" value="4">
					<label for="mucho34">Muchas veces</label>

					<input type="radio" name="mai34" id="todo34" value="5">
					<label for="todo34">Siempre</label>
			</div>

			<div class="radios">
				<h3>35. Generalmente sé cuando cada estrategia de aprendizaje que uso será más efectiva </h3>
					<input type="radio" name="mai35" id="nada35" value="1">
					<label for="nada35">Nunca</label>

					<input type="radio" name="mai35" id="casinada35" value="2">
					<label for="casinada35">Pocas veces</label>

					<input type="radio" name="mai35" id="algo35" value="3">
					<label for="algo35">Frecuentemente</label>

					<input type="radio" name="mai35" id="mucho35" value="4">
					<label for="mucho35">Muchas veces</label>

					<input type="radio" name="mai35" id="todo35" value="5">
					<label for="todo35">Siempre</label>
			</div>
			<div class="radios">
				<h3>36. Una vez que he finalizado: generalmente me pregunto ¿cuán bien logré mis metas?  </h3>
					<input type="radio" name="mai36" id="nada36" value="1">
					<label for="nada36">Nunca</label>

					<input type="radio" name="mai36" id="casinada36" value="2">
					<label for="casinada36">Pocas veces</label>

					<input type="radio" name="mai36" id="algo36" value="3">
					<label for="algo36">Frecuentemente</label>

					<input type="radio" name="mai36" id="mucho36" value="4">
					<label for="mucho36">Muchas veces</label>

					<input type="radio" name="mai36" id="todo36" value="5">
					<label for="todo36">Siempre</label>
			</div>

			<div class="radios">
				<h3>37. Mientras aprendo:  frecuentemente hago dibujos o diagramas para ayudarme a entender</h3>
					<input type="radio" name="mai37" id="nada37" value="1">
					<label for="nada37">Nunca</label>

					<input type="radio" name="mai37" id="casinada37" value="2">
					<label for="casinada37">Pocas veces</label>

					<input type="radio" name="mai37" id="algo37" value="3">
					<label for="algo37">Frecuentemente</label>

					<input type="radio" name="mai37" id="mucho37" value="4">
					<label for="mucho37">Muchas veces</label>

					<input type="radio" name="mai37" id="todo37" value="5">
					<label for="todo37">Siempre</label>
			</div>

			<div class="radios">
				<h3>38. Después de resolver un problema: generalmente me pregunto ¿si  consideré todas las opciones? </h3>
					<input type="radio" name="mai38" id="nada38" value="1">
					<label for="nada38">Nunca</label>

					<input type="radio" name="mai38" id="casinada38" value="2">
					<label for="casinada38">Pocas veces</label>

					<input type="radio" name="mai38" id="algo38" value="3">
					<label for="algo38">Frecuentemente</label>

					<input type="radio" name="mai38" id="mucho38" value="4">
					<label for="mucho38">Muchas veces</label>

					<input type="radio" name="mai38" id="todo38" value="5">
					<label for="todo38">Siempre</label>
			</div>

			<div class="radios">
				<h3>39. Generalmente trato de expresar la nueva información en mis propias palabras </h3>
					<input type="radio" name="mai39" id="nada39" value="1">
					<label for="nada39">Nunca</label>

					<input type="radio" name="mai39" id="casinada39" value="2">
					<label for="casinada39">Pocas veces</label>

					<input type="radio" name="mai39" id="algo39" value="3">
					<label for="algo39">Frecuentemente</label>

					<input type="radio" name="mai39" id="mucho39" value="4">
					<label for="mucho39">Muchas veces</label>

					<input type="radio" name="mai39" id="todo39" value="5">
					<label for="todo39">Siempre</label>
			</div>

			<div class="radios">
				<h3>40. Cuando fallo en entender: generalmente cambio las estrategias  </h3>
					<input type="radio" name="mai40" id="nada40" value="1">
					<label for="nada40">Nunca</label>

					<input type="radio" name="mai40" id="casinada40" value="2">
					<label for="casinada40">Pocas veces</label>

					<input type="radio" name="mai40" id="algo40" value="3">
					<label for="algo40">Frecuentemente</label>

					<input type="radio" name="mai40" id="mucho40" value="4">
					<label for="mucho40">Muchas veces</label>

					<input type="radio" name="mai40" id="todo40" value="5">
					<label for="todo40">Siempre</label>
			</div>

			<div class="radios">
				<h3>41. Generalmente utilizo la estructura organizacional del texto para ayudarme a aprenderlo </h3>
					<input type="radio" name="mai41" id="nada41" value="1">
					<label for="nada41">Nunca</label>

					<input type="radio" name="mai41" id="casinada41" value="2">
					<label for="casinada41">Pocas veces</label>

					<input type="radio" name="mai41" id="algo41" value="3">
					<label for="algo41">Frecuentemente</label>

					<input type="radio" name="mai41" id="mucho41" value="4">
					<label for="mucho41">Muchas veces</label>

					<input type="radio" name="mai41" id="todo41" value="5">
					<label for="todo41">Siempre</label>
			</div>

			<div class="radios">
				<h3>42. Antes de comenzar una tarea: generalmente leo cuidadosamente las instrucciones </h3>
					<input type="radio" name="mai42" id="nada42" value="1">
					<label for="nada42">Nunca</label>

					<input type="radio" name="mai42" id="casinada42" value="2">
					<label for="casinada42">Pocas veces</label>

					<input type="radio" name="mai42" id="algo42" value="3">
					<label for="algo42">Frecuentemente</label>

					<input type="radio" name="mai42" id="mucho42" value="4">
					<label for="mucho42">Muchas veces</label>

					<input type="radio" name="mai42" id="todo42" value="5">
					<label for="todo42">Siempre</label>
			</div>

			<div class="radios">
				<h3>43. Generalmente me pregunto: ¿Si lo que estoy leyendo se relaciona con lo que ya conozco? </h3>
					<input type="radio" name="mai43" id="nada43" value="1">
					<label for="nada43">Nunca</label>

					<input type="radio" name="mai43" id="casinada43" value="2">
					<label for="casinada43">Pocas veces</label>

					<input type="radio" name="mai43" id="algo43" value="3">
					<label for="algo43">Frecuentemente</label>

					<input type="radio" name="mai43" id="mucho43" value="4">
					<label for="mucho43">Muchas veces</label>

					<input type="radio" name="mai43" id="todo43" value="5">
					<label for="todo43">Siempre</label>
			</div>

			<div class="radios">
				<h3>44. Cuando me confundo: generalmente reevalúo mis supuestos (presuposiciones) </h3>
					<input type="radio" name="mai44" id="nada44" value="1">
					<label for="nada44">Nunca</label>

					<input type="radio" name="mai44" id="casinada44" value="2">
					<label for="casinada44">Pocas veces</label>

					<input type="radio" name="mai44" id="algo44" value="3">
					<label for="algo44">Frecuentemente</label>

					<input type="radio" name="mai44" id="mucho44" value="4">
					<label for="mucho44">Muchas veces</label>

					<input type="radio" name="mai44" id="todo44" value="5">
					<label for="todo44">Siempre</label>
			</div>

			<div class="radios">
				<h3>45. Generalmente organizo mi tiempo para cumplir mis metas lo mejor posible  </h3>
					<input type="radio" name="mai45" id="nada45" value="1">
					<label for="nada45">Nunca</label>

					<input type="radio" name="mai45" id="casinada45" value="2">
					<label for="casinada45">Pocas veces</label>

					<input type="radio" name="mai45" id="algo45" value="3">
					<label for="algo45">Frecuentemente</label>

					<input type="radio" name="mai45" id="mucho45" value="4">
					<label for="mucho45">Muchas veces</label>

					<input type="radio" name="mai45" id="todo45" value="5">
					<label for="todo45">Siempre</label>
			</div>

			<div class="radios">
				<h3>46. Aprendo más cuando estoy interesado en el tema </h3>
					<input type="radio" name="mai46" id="nada46" value="1">
					<label for="nada46">Nunca</label>

					<input type="radio" name="mai46" id="casinada46" value="2">
					<label for="casinada46">Pocas veces</label>

					<input type="radio" name="mai46" id="algo46" value="3">
					<label for="algo46">Frecuentemente</label>

					<input type="radio" name="mai46" id="mucho46" value="4">
					<label for="mucho46">Muchas veces</label>

					<input type="radio" name="mai46" id="todo46" value="5">
					<label for="todo46">Siempre</label>
			</div>

			<div class="radios">
				<h3>47. Frecuentemente trato de dividir el estudio en pequeñas partes </h3>
					<input type="radio" name="mai47" id="nada47" value="1">
					<label for="nada47">Nunca</label>

					<input type="radio" name="mai47" id="casinada47" value="2">
					<label for="casinada47">Pocas veces</label>

					<input type="radio" name="mai47" id="algo47" value="3">
					<label for="algo47">Frecuentemente</label>

					<input type="radio" name="mai47" id="mucho47" value="4">
					<label for="mucho47">Muchas veces</label>

					<input type="radio" name="mai47" id="todo47" value="5">
					<label for="todo47">Siempre</label>
			</div>

			<div class="radios">
				<h3>48. Generalmente me enfoco en el significado general en vez que en los específicos </h3>
					<input type="radio" name="mai48" id="nada48" value="1">
					<label for="nada48">Nunca</label>

					<input type="radio" name="mai48" id="casinada48" value="2">
					<label for="casinada48">Pocas veces</label>

					<input type="radio" name="mai48" id="algo48" value="3">
					<label for="algo48">Frecuentemente</label>

					<input type="radio" name="mai48" id="mucho48" value="4">
					<label for="mucho48">Muchas veces</label>

					<input type="radio" name="mai48" id="todo48" value="5">
					<label for="todo48">Siempre</label>
			</div>

			<div class="radios">
				<h3>49. Mientras aprendo algo nuevo: frecuentemente me hago preguntas acerca de ¿cuán bien lo estoy  haciendo? </h3>
					<input type="radio" name="mai49" id="nada49" value="1">
					<label for="nada49">Nunca</label>

					<input type="radio" name="mai49" id="casinada49" value="2">
					<label for="casinada49">Pocas veces</label>

					<input type="radio" name="mai49" id="algo49" value="3">
					<label for="algo49">Frecuentemente</label>

					<input type="radio" name="mai49" id="mucho49" value="4">
					<label for="mucho49">Muchas veces</label>

					<input type="radio" name="mai49" id="todo49" value="5">
					<label for="todo49">Siempre</label>
			</div>

			<div class="radios">
				<h3>50. Una vez que termino una tarea: generalmente me pregunto ¿si aprendí tanto como hubiera podido?  </h3>
					<input type="radio" name="mai50" id="nada50" value="1">
					<label for="nada50">Nunca</label>

					<input type="radio" name="mai50" id="casinada50" value="2">
					<label for="casinada50">Pocas veces</label>

					<input type="radio" name="mai50" id="algo50" value="3">
					<label for="algo50">Frecuentemente</label>

					<input type="radio" name="mai50" id="mucho50" value="4">
					<label for="mucho50">Muchas veces</label>

					<input type="radio" name="mai50" id="todo50" value="5">
					<label for="todo50">Siempre</label>
			</div>

			<div class="radios">
				<h3>51. Cuando  la nueva información no es clara: generalmente hago un alto y regreso a revisarla </h3>
					<input type="radio" name="mai51" id="nada51" value="1">
					<label for="nada51">Nunca</label>

					<input type="radio" name="mai51" id="casinada51" value="2">
					<label for="casinada51">Pocas veces</label>

					<input type="radio" name="mai51" id="algo51" value="3">
					<label for="algo51">Frecuentemente</label>

					<input type="radio" name="mai51" id="mucho51" value="4">
					<label for="mucho51">Muchas veces</label>

					<input type="radio" name="mai51" id="todo51" value="5">
					<label for="todo51">Siempre</label>
			</div>

			<div class="radios">
				<h3>52. Cuando  me confundo: generalmente hago un alto y releo  </h3>
					<input type="radio" name="mai52" id="nada52" value="1">
					<label for="nada52">Nunca</label>

					<input type="radio" name="mai52" id="casinada52" value="2">
					<label for="casinada52">Pocas veces</label>

					<input type="radio" name="mai52" id="algo52" value="3">
					<label for="algo52">Frecuentemente</label>

					<input type="radio" name="mai52" id="mucho52" value="4">
					<label for="mucho52">Muchas veces</label>

					<input type="radio" name="mai52" id="todo52" value="5">
					<label for="todo52">Siempre</label>
			</div>			

			<div class="form-group">	
				<input type="submit" class="btn btn-defualt center-block" value="Enviar">
			</div>
		</form>
	</div>

<br>
<br>
<br>			


</div>
	<script>


		function make_json(form){

			var verificar = true;
			var nada = document.getElementById('nada').checked;
			var casinada = document.getElementById('casinada').checked;
			var algo = document.getElementById('algo').checked;
			var mucho = document.getElementById('mucho').checked;
			var todo = document.getElementById('todo').checked;

			if(!nada && !casinada && !algo && !mucho && !todo){
				alert("Completa la pregunta 1");
				verificar = false;
				nada.focus();
			}

			var nada2 = document.getElementById('nada2').checked;
			var casinada2 = document.getElementById('casinada2').checked;
			var algo2 = document.getElementById('algo2').checked;
			var mucho2 = document.getElementById('mucho2').checked;
			var todo2 = document.getElementById('todo2').checked;

			if(!nada2 && !casinada2 && !algo2 && !mucho2 && !todo2){
				alert("Completa la pregunta 2");
				verificar = false;
				nada1.focus();

			}

			var nada3 = document.getElementById('nada3').checked;
			var casinada3 = document.getElementById('casinada3').checked;
			var algo3 = document.getElementById('algo3').checked;
			var mucho3 = document.getElementById('mucho3').checked;
			var todo3 = document.getElementById('todo3').checked;

			if(!nada3 && !casinada3 && !algo3 && !mucho3 && !todo3){
				alert("Completa la pregunta 3");
				verificar = false;
				nada3.focus();

			}

			var nada4 = document.getElementById('nada4').checked;
			var casinada4 = document.getElementById('casinada4').checked;
			var algo4 = document.getElementById('algo4').checked;
			var mucho4 = document.getElementById('mucho4').checked;
			var todo4 = document.getElementById('todo4').checked;

			if(!nada4 && !casinada4 && !algo4 && !mucho4 && !todo4){
				alert("Completa pregunta 4");
				verificar = false;
				nada4.focus();

			}

			var nada5 = document.getElementById('nada5').checked;
			var casinada5 = document.getElementById('casinada5').checked;
			var algo5 = document.getElementById('algo5').checked;
			var mucho5 = document.getElementById('mucho5').checked;
			var todo5 = document.getElementById('todo5').checked;

			if(!nada5 && !casinada5 && !algo5 && !mucho5 && !todo5){
				alert("Completa la pregunta 5");
				verificar = false;
				nada5.focus();


			}

			var nada6 = document.getElementById('nada6').checked;
			var casinada6 = document.getElementById('casinada6').checked;
			var algo6 = document.getElementById('algo6').checked;
			var mucho6 = document.getElementById('mucho6').checked;
			var todo6 = document.getElementById('todo6').checked;

			if(!nada6 && !casinada6 && !algo6 && !mucho6 && !todo6){
				alert("Completa la pregunta 6");
				verificar = false;
				nada6.focus();

			}

			var nada7 = document.getElementById('nada7').checked;
			var casinada7 = document.getElementById('casinada7').checked;
			var algo7 = document.getElementById('algo7').checked;
			var mucho7 = document.getElementById('mucho7').checked;
			var todo7 = document.getElementById('todo7').checked;

			if(!nada7 && !casinada7 && !algo7 && !mucho7 && !todo7){
				alert("Completa la pregunta 7");
				verificar = false;
				nada7.focus();

			}


			var nada8 = document.getElementById('nada8').checked;
			var casinada8 = document.getElementById('casinada8').checked;
			var algo8 = document.getElementById('algo8').checked;
			var mucho8 = document.getElementById('mucho8').checked;
			var todo8 = document.getElementById('todo8').checked;

			if(!nada8 && !casinada8 && !algo8 && !mucho8 && !todo8){
				alert("Completa la pregunta 8");
				verificar = false;
				nada8.focus();


			}

			var nada9 = document.getElementById('nada9').checked;
			var casinada9 = document.getElementById('casinada9').checked;
			var algo9 = document.getElementById('algo9').checked;
			var mucho9 = document.getElementById('mucho9').checked;
			var todo9 = document.getElementById('todo9').checked;

			if(!nada9 && !casinada9 && !algo9 && !mucho9 && !todo9){
				alert("Completa la pregunta 9");
				verificar = false;
				nada9.focus();


			}

			var nada10 = document.getElementById('nada10').checked;
			var casinada10 = document.getElementById('casinada10').checked;
			var algo10 = document.getElementById('algo10').checked;
			var mucho10 = document.getElementById('mucho10').checked;
			var todo10 = document.getElementById('todo10').checked;

			if(!nada10 && !casinada10 && !algo10 && !mucho10 && !todo10){
				alert("Completa la pregunta 10");
				verificar = false;
				nada10.focus();

			}

			var nada11 = document.getElementById('nada11').checked;
			var casinada11 = document.getElementById('casinada11').checked;
			var algo11 = document.getElementById('algo11').checked;
			var mucho11 = document.getElementById('mucho11').checked;
			var todo11 = document.getElementById('todo11').checked;

			if(!nada11 && !casinada11 && !algo11 && !mucho11 && !todo11){
				alert("Completa la pregunta 11");
				verificar = false;
				nada11.focus();

			}

			var nada12 = document.getElementById('nada12').checked;
			var casinada12 = document.getElementById('casinada12').checked;
			var algo12 = document.getElementById('algo12').checked;
			var mucho12 = document.getElementById('mucho12').checked;
			var todo12 = document.getElementById('todo12').checked;

			if(!nada12 && !casinada12 && !algo12 && !mucho12 && !todo12){
				alert("Completa la pregunta 12");
				verificar = false;
				nada12.focus();

			}

			var nada13 = document.getElementById('nada13').checked;
			var casinada13 = document.getElementById('casinada13').checked;
			var algo13 = document.getElementById('algo13').checked;
			var mucho13 = document.getElementById('mucho13').checked;
			var todo13 = document.getElementById('todo13').checked;

			if(!nada13 && !casinada13 && !algo13 && !mucho13 && !todo13){
				alert("Completa la pregunta 13");
				verificar = false;
				nada13.focus();

			}

			var nada14 = document.getElementById('nada14').checked;
			var casinada14 = document.getElementById('casinada14').checked;
			var algo14 = document.getElementById('algo14').checked;
			var mucho14 = document.getElementById('mucho14').checked;
			var todo14 = document.getElementById('todo14').checked;

			if(!nada14 && !casinada14 && !algo14 && !mucho14 && !todo14){
				alert("Completa la pregunta 14");
				verificar = false;
				nada14.focus();

			}

			var nada15 = document.getElementById('nada15').checked;
			var casinada15 = document.getElementById('casinada15').checked;
			var algo15 = document.getElementById('algo15').checked;
			var mucho15 = document.getElementById('mucho15').checked;
			var todo15 = document.getElementById('todo15').checked;

			if(!nada15 && !casinada15 && !algo15 && !mucho15 && !todo15){
				alert("Completa la pregunta 15");
				verificar = false;
				nada15.focus();

			}

			var nada16 = document.getElementById('nada16').checked;
			var casinada16 = document.getElementById('casinada16').checked;
			var algo16 = document.getElementById('algo16').checked;
			var mucho16 = document.getElementById('mucho16').checked;
			var todo16 = document.getElementById('todo16').checked;

			if(!nada16 && !casinada16 && !algo16 && !mucho16 && !todo16){
				alert("Completa la pregunta 16");
				verificar = false;
				nada16.focus();

			}

			var nada17 = document.getElementById('nada17').checked;
			var casinada17 = document.getElementById('casinada17').checked;
			var algo17 = document.getElementById('algo17').checked;
			var mucho17 = document.getElementById('mucho17').checked;
			var todo17 = document.getElementById('todo17').checked;

			if(!nada17 && !casinada17 && !algo17 && !mucho17 && !todo17){
				alert("Completa la pregunta 17");
				verificar = false;
				nada17.focus();

			}

			var nada18 = document.getElementById('nada18').checked;
			var casinada18 = document.getElementById('casinada18').checked;
			var algo18 = document.getElementById('algo18').checked;
			var mucho18 = document.getElementById('mucho18').checked;
			var todo18 = document.getElementById('todo18').checked;

			if(!nada18 && !casinada18 && !algo18 && !mucho18 && !todo18){
				alert("Completa la pregunta 18");
				verificar = false;
				nada18.focus();

			}

			var nada19 = document.getElementById('nada19').checked;
			var casinada19 = document.getElementById('casinada19').checked;
			var algo19 = document.getElementById('algo19').checked;
			var mucho19 = document.getElementById('mucho19').checked;
			var todo19 = document.getElementById('todo19').checked;

			if(!nada19 && !casinada19 && !algo19 && !mucho19 && !todo19){
				alert("Completa la pregunta 19");
				verificar = false;
				nada19.focus();

			}

			var nada20 = document.getElementById('nada20').checked;
			var casinada20 = document.getElementById('casinada20').checked;
			var algo20 = document.getElementById('algo20').checked;
			var mucho20 = document.getElementById('mucho20').checked;
			var todo20 = document.getElementById('todo20').checked;

			if(!nada20 && !casinada20 && !algo20 && !mucho20 && !todo20){
				alert("Completa la pregunta 20");
				verificar = false;
				nada20.focus();

			}

			var nada21 = document.getElementById('nada21').checked;
			var casinada21 = document.getElementById('casinada21').checked;
			var algo21 = document.getElementById('algo21').checked;
			var mucho21 = document.getElementById('mucho21').checked;
			var todo21 = document.getElementById('todo21').checked;

			if(!nada21 && !casinada21 && !algo21 && !mucho21 && !todo21){
				alert("Completa la pregunta 21");
				verificar = false;
				nada21.focus();


			}

			var nada22 = document.getElementById('nada22').checked;
			var casinada22 = document.getElementById('casinada22').checked;
			var algo22 = document.getElementById('algo22').checked;
			var mucho22 = document.getElementById('mucho22').checked;
			var todo22 = document.getElementById('todo22').checked;

			if(!nada22 && !casinada22 && !algo22 && !mucho22 && !todo22){
				alert("Completa la pregunta 22");
				verificar = false;
				nada22.focus();


			}

			var nada23 = document.getElementById('nada23').checked;
			var casinada23 = document.getElementById('casinada23').checked;
			var algo23 = document.getElementById('algo23').checked;
			var mucho23 = document.getElementById('mucho23').checked;
			var todo23 = document.getElementById('todo23').checked;

			if(!nada23 && !casinada23 && !algo23 && !mucho23 && !todo23){
				alert("Completa la pregunta 23");
				verificar = false;
				nada23.focus();


			}

			var nada24 = document.getElementById('nada24').checked;
			var casinada24 = document.getElementById('casinada24').checked;
			var algo24 = document.getElementById('algo24').checked;
			var mucho24 = document.getElementById('mucho24').checked;
			var todo24 = document.getElementById('todo24').checked;

			if(!nada24 && !casinada24 && !algo24 && !mucho24 && !todo24){
				alert("Completa la pregunta 24");
				verificar = false;
				nada24.focus();

			}

			var nada25 = document.getElementById('nada25').checked;
			var casinada25 = document.getElementById('casinada25').checked;
			var algo25 = document.getElementById('algo25').checked;
			var mucho25 = document.getElementById('mucho25').checked;
			var todo25 = document.getElementById('todo25').checked;

			if(!nada25 && !casinada25 && !algo25 && !mucho25 && !todo25){
				alert("Completa la pregunta 25");
				verificar = false;
				nada25.focus();
			}

			var nada26 = document.getElementById('nada26').checked;
			var casinada26 = document.getElementById('casinada26').checked;
			var algo26 = document.getElementById('algo26').checked;
			var mucho26 = document.getElementById('mucho26').checked;
			var todo26 = document.getElementById('todo26').checked;

			if(!nada26 && !casinada26 && !algo26 && !mucho26 && !todo26){
				alert("Completa la pregunta 26");
				verificar = false;
				nada26.focus();
			}

			var nada27 = document.getElementById('nada27').checked;
			var casinada27 = document.getElementById('casinada27').checked;
			var algo27 = document.getElementById('algo27').checked;
			var mucho27 = document.getElementById('mucho27').checked;
			var todo27 = document.getElementById('todo27').checked;

			if(!nada27 && !casinada27 && !algo27 && !mucho27 && !todo27){
				alert("Completa la pregunta 27");
				verificar = false;
				nada27.focus();
			}

			var nada28 = document.getElementById('nada28').checked;
			var casinada28 = document.getElementById('casinada28').checked;
			var algo28 = document.getElementById('algo28').checked;
			var mucho28 = document.getElementById('mucho28').checked;
			var todo28 = document.getElementById('todo28').checked;

			if(!nada28 && !casinada28 && !algo28 && !mucho28 && !todo28){
				alert("Completa la pregunta 28");
				verificar = false;
				nada28.focus();
			}

			var nada29 = document.getElementById('nada29').checked;
			var casinada29 = document.getElementById('casinada29').checked;
			var algo29 = document.getElementById('algo29').checked;
			var mucho29 = document.getElementById('mucho29').checked;
			var todo29 = document.getElementById('todo29').checked;

			if(!nada29 && !casinada29 && !algo29 && !mucho29 && !todo29){
				alert("Completa la pregunta 29");
				verificar = false;
				nada29.focus();

			}

			var nada30 = document.getElementById('nada30').checked;
			var casinada30 = document.getElementById('casinada30').checked;
			var algo30 = document.getElementById('algo30').checked;
			var mucho30 = document.getElementById('mucho30').checked;
			var todo30 = document.getElementById('todo30').checked;

			if(!nada30 && !casinada30 && !algo30 && !mucho30 && !todo30){
				alert("Completa la pregunta 30");
				verificar = false;
				nada30.focus();
			}

			var nada31 = document.getElementById('nada31').checked;
			var casinada31 = document.getElementById('casinada31').checked;
			var algo31 = document.getElementById('algo31').checked;
			var mucho31 = document.getElementById('mucho31').checked;
			var todo31 = document.getElementById('todo31').checked;

			if(!nada31 && !casinada31 && !algo31 && !mucho31 && !todo31){
				alert("Completa la pregunta 31");
				verificar = false;
				nada31.focus();
			}


			var nada32 = document.getElementById('nada32').checked;
			var casinada32 = document.getElementById('casinada32').checked;
			var algo32 = document.getElementById('algo32').checked;
			var mucho32 = document.getElementById('mucho32').checked;
			var todo32 = document.getElementById('todo32').checked;

			if(!nada32 && !casinada32 && !algo32 && !mucho32 && !todo32){
				alert("Completa la pregunta 32");
				verificar = false;
				nada32.focus();
			}

			var nada33 = document.getElementById('nada33').checked;
			var casinada33 = document.getElementById('casinada33').checked;
			var algo33 = document.getElementById('algo33').checked;
			var mucho33 = document.getElementById('mucho33').checked;
			var todo33 = document.getElementById('todo33').checked;

			if(!nada33 && !casinada33 && !algo33 && !mucho33 && !todo33){
				alert("Completa la pregunta 33");
				verificar = false;
				nada33.focus();
			}

			var nada34 = document.getElementById('nada34').checked;
			var casinada34 = document.getElementById('casinada34').checked;
			var algo34 = document.getElementById('algo34').checked;
			var mucho34 = document.getElementById('mucho34').checked;
			var todo34 = document.getElementById('todo34').checked;

			if(!nada34 && !casinada34 && !algo34 && !mucho34 && !todo34){
				alert("Completa la pregunta 34");
				verificar = false;
				nada34.focus();
			}

			var nada35 = document.getElementById('nada35').checked;
			var casinada35 = document.getElementById('casinada35').checked;
			var algo35 = document.getElementById('algo35').checked;
			var mucho35 = document.getElementById('mucho35').checked;
			var todo35 = document.getElementById('todo35').checked;

			if(!nada35 && !casinada35 && !algo35 && !mucho35 && !todo35){
				alert("Completa la pregunta 35");
				verificar = false;
				nada35.focus();
			}

			var nada36 = document.getElementById('nada36').checked;
			var casinada36 = document.getElementById('casinada36').checked;
			var algo36 = document.getElementById('algo36').checked;
			var mucho36 = document.getElementById('mucho36').checked;
			var todo36 = document.getElementById('todo36').checked;

			if(!nada36 && !casinada36 && !algo36 && !mucho36 && !todo36){
				alert("Completa la pregunta 36");
				verificar = false;
				nada36.focus();
			}

			var nada37 = document.getElementById('nada37').checked;
			var casinada37 = document.getElementById('casinada37').checked;
			var algo37 = document.getElementById('algo37').checked;
			var mucho37 = document.getElementById('mucho37').checked;
			var todo37 = document.getElementById('todo37').checked;

			if(!nada37 && !casinada37 && !algo37 && !mucho37 && !todo37){
				alert("Completa la pregunta 37");
				verificar = false;
				nada37.focus();
			}

			var nada38 = document.getElementById('nada38').checked;
			var casinada38 = document.getElementById('casinada38').checked;
			var algo38 = document.getElementById('algo38').checked;
			var mucho38 = document.getElementById('mucho38').checked;
			var todo38 = document.getElementById('todo38').checked;

			if(!nada38 && !casinada38 && !algo38 && !mucho38 && !todo38){
				alert("Completa la pregunta 38");
				verificar = false;
				nada38.focus();
			}

			var nada39 = document.getElementById('nada39').checked;
			var casinada39 = document.getElementById('casinada39').checked;
			var algo39 = document.getElementById('algo39').checked;
			var mucho39 = document.getElementById('mucho39').checked;
			var todo39 = document.getElementById('todo39').checked;

			if(!nada39 && !casinada39 && !algo39 && !mucho39 && !todo39){
				alert("Completa la pregunta 39");
				verificar = false;
				nada39.focus();
			}

			var nada40 = document.getElementById('nada40').checked;
			var casinada40 = document.getElementById('casinada40').checked;
			var algo40 = document.getElementById('algo40').checked;
			var mucho40 = document.getElementById('mucho40').checked;
			var todo40 = document.getElementById('todo40').checked;

			if(!nada40 && !casinada40 && !algo40 && !mucho40 && !todo40){
				alert("Completa la pregunta 40");
				verificar = false;
				nada40.focus();
			}

			var nada41 = document.getElementById('nada41').checked;
			var casinada41 = document.getElementById('casinada41').checked;
			var algo41 = document.getElementById('algo41').checked;
			var mucho41 = document.getElementById('mucho41').checked;
			var todo41 = document.getElementById('todo41').checked;

			if(!nada41 && !casinada41 && !algo41 && !mucho41 && !todo41){
				alert("Completa la pregunta 41");
				verificar = false;
				nada41.focus();
			}

			var nada42 = document.getElementById('nada42').checked;
			var casinada42 = document.getElementById('casinada42').checked;
			var algo42 = document.getElementById('algo42').checked;
			var mucho42 = document.getElementById('mucho42').checked;
			var todo42 = document.getElementById('todo42').checked;

			if(!nada42 && !casinada42 && !algo42 && !mucho42 && !todo42){
				alert("Completa la pregunta 42");
				verificar = false;
				nada42.focus();
			}

			var nada43 = document.getElementById('nada43').checked;
			var casinada43 = document.getElementById('casinada43').checked;
			var algo43 = document.getElementById('algo43').checked;
			var mucho43 = document.getElementById('mucho43').checked;
			var todo43 = document.getElementById('todo43').checked;

			if(!nada43 && !casinada43 && !algo43 && !mucho43 && !todo43){
				alert("Completa la pregunta 43");
				verificar = false;
				nada43.focus();
			}

			var nada44 = document.getElementById('nada44').checked;
			var casinada44 = document.getElementById('casinada44').checked;
			var algo44 = document.getElementById('algo44').checked;
			var mucho44 = document.getElementById('mucho44').checked;
			var todo44 = document.getElementById('todo44').checked;

			if(!nada44 && !casinada44 && !algo44 && !mucho44 && !todo44){
				alert("Completa la pregunta 44");
				verificar = false;
				nada44.focus();
			}

			var nada45 = document.getElementById('nada45').checked;
			var casinada45 = document.getElementById('casinada45').checked;
			var algo45 = document.getElementById('algo45').checked;
			var mucho45 = document.getElementById('mucho45').checked;
			var todo45 = document.getElementById('todo45').checked;

			if(!nada45 && !casinada45 && !algo45 && !mucho45 && !todo45){
				alert("Completa la pregunta 45");
				verificar = false;
				nada45.focus();
			}

			var nada46 = document.getElementById('nada46').checked;
			var casinada46 = document.getElementById('casinada46').checked;
			var algo46 = document.getElementById('algo46').checked;
			var mucho46 = document.getElementById('mucho46').checked;
			var todo46 = document.getElementById('todo46').checked;

			if(!nada46 && !casinada46 && !algo46 && !mucho46 && !todo46){
				alert("Completa la pregunta 46");
				verificar = false;
				nada46.focus();
			}

			var nada47 = document.getElementById('nada47').checked;
			var casinada47 = document.getElementById('casinada47').checked;
			var algo47 = document.getElementById('algo47').checked;
			var mucho47 = document.getElementById('mucho47').checked;
			var todo47 = document.getElementById('todo47').checked;

			if(!nada47 && !casinada47 && !algo47 && !mucho47 && !todo47){
				alert("Completa la pregunta 47");
				verificar = false;
				nada47.focus();
			}

			var nada48 = document.getElementById('nada48').checked;
			var casinada48 = document.getElementById('casinada48').checked;
			var algo48 = document.getElementById('algo48').checked;
			var mucho48 = document.getElementById('mucho48').checked;
			var todo48 = document.getElementById('todo48').checked;

			if(!nada48 && !casinada48 && !algo48 && !mucho48 && !todo48){
				alert("Completa la pregunta 48");
				verificar = false;
				nada48.focus();

			}

			var nada49 = document.getElementById('nada49').checked;
			var casinada49 = document.getElementById('casinada49').checked;
			var algo49 = document.getElementById('algo49').checked;
			var mucho49 = document.getElementById('mucho49').checked;
			var todo49 = document.getElementById('todo49').checked;

			if(!nada49 && !casinada49 && !algo49 && !mucho49 && !todo49){
				alert("Completa la pregunta 49");
				verificar = false;
				nada49.focus();
			}

			var nada50 = document.getElementById('nada50').checked;
			var casinada50 = document.getElementById('casinada50').checked;
			var algo50 = document.getElementById('algo50').checked;
			var mucho50 = document.getElementById('mucho50').checked;
			var todo50 = document.getElementById('todo50').checked;

			if(!nada50 && !casinada50 && !algo50 && !mucho50 && !todo50){
				alert("Completa la pregunta 50");
				verificar = false;
				nada50.focus();
			}

			var nada51 = document.getElementById('nada51').checked;
			var casinada51 = document.getElementById('casinada51').checked;
			var algo51 = document.getElementById('algo51').checked;
			var mucho51 = document.getElementById('mucho51').checked;
			var todo51 = document.getElementById('todo51').checked;

			if(!nada51 && !casinada51 && !algo51 && !mucho51 && !todo51){
				alert("Completa la pregunta 51");
				verificar = false;
				nada51.focus();
			}

			var nada52 = document.getElementById('nada52').checked;
			var casinada52 = document.getElementById('casinada52').checked;
			var algo52 = document.getElementById('algo52').checked;
			var mucho52 = document.getElementById('mucho52').checked;
			var todo52 = document.getElementById('todo52').checked;

			if(!nada52 && !casinada52 && !algo52 && !mucho52 && !todo52){
				alert("Completa la pregunta 52");
				verificar = false;
				nada52.focus();
			}
			

			var declarativo = { 
				"pregunta5":form.mai5.value,
				"pregunta10":form.mai10.value,
				"pregunta12":form.mai12.value,
				"pregunta16":form.mai16.value,
				"pregunta17":form.mai17.value,
				"pregunta20":form.mai20.value,
				"pregunta32":form.mai32.value,
				"pregunta46":form.mai46.value
			};

			var procedural = {
				"pregunta3":form.mai3.value,
				"pregunta14":form.mai14.value,
				"pregunta27":form.mai27.value,
				"pregunta33":form.mai33.value
			};

			var condicional = {
				"pregunta15":form.mai15.value,
				"pregunta18":form.mai18.value,
				"pregunta26":form.mai26.value,
				"pregunta29":form.mai29.value,
				"pregunta35":form.mai35.value
			};

			var planeacion = {
				"pregunta4":form.mai4.value,
				"pregunta6":form.mai6.value,
				"pregunta8":form.mai8.value,
				"pregunta22":form.mai22.value,
				"pregunta23":form.mai23.value,
				"pregunta42":form.mai42.value,
				"pregunta45":form.mai45.value
			};

			var informacion = {
				"pregunta9":form.mai9.value,
				"pregunta13":form.mai13.value,
				"pregunta30":form.mai30.value,
				"pregunta31":form.mai31.value,
				"pregunta37":form.mai37.value,
				"pregunta39":form.mai39.value,
				"pregunta41":form.mai41.value,
				"pregunta43":form.mai43.value,
				"pregunta47":form.mai47.value,
				"pregunta48":form.mai48.value
			};

			var monitoreo = {
				"pregunta1":form.mai1.value,
				"pregunta2":form.mai2.value,
				"pregunta11":form.mai11.value,
				"pregunta21":form.mai21.value,
				"pregunta28":form.mai28.value,
				"pregunta34":form.mai34.value,
				"pregunta49":form.mai49.value
			};

			var depuracion = {
				"pregunta25":form.mai25.value,
				"pregunta40":form.mai40.value,
				"pregunta44":form.mai44.value,
				"pregunta51":form.mai51.value,
				"pregunta52":form.mai52.value
			};

			var evaluacion = {
			"pregunta7":form.mai7.value,
			"pregunta19":form.mai19.value,
			"pregunta24":form.mai24.value,
			"pregunta36":form.mai36.value,
			"pregunta38":form.mai38.value,
			"pregunta50":form.mai50.value,
			};
		


		/*
		var html = JSON.stringify(declarativo,0,6);
		var html1 = JSON.stringify(procedural,0,6);
		var html2 = JSON.stringify(condicional,0,6);
		var html3 = JSON.stringify(planeacion,0,6);
		var html4 = JSON.stringify(informacion,0,6);
		var html5 = JSON.stringify(monitoreo,0,6);
		var html6 = JSON.stringify(depuracion,0,6);
		var html7 = JSON.stringify(evaluacion,0,6);
	*/


		var declarativoArray = parseInt(declarativo.pregunta5) + parseInt(declarativo.pregunta10) + parseInt(declarativo.pregunta12) + parseInt(declarativo.pregunta16) + parseInt(declarativo.pregunta17) + parseInt(declarativo.pregunta20) + parseInt(declarativo.pregunta32) + parseInt(declarativo.pregunta46); 

		var proceduralArray = parseInt(procedural.pregunta3) + parseInt(procedural.pregunta14) + parseInt(procedural.pregunta27) + parseInt(procedural.pregunta33);

		var condicionalArray = parseInt(condicional.pregunta15) + parseInt(condicional.pregunta18) + parseInt(condicional.pregunta26) + parseInt(condicional.pregunta29) + parseInt(condicional.pregunta35); 

		var planeacionArray = parseInt(planeacion.pregunta4) + parseInt(planeacion.pregunta6) + parseInt(planeacion.pregunta8) + parseInt(planeacion.pregunta22) + parseInt(planeacion.pregunta23) + parseInt(planeacion.pregunta42) + parseInt(planeacion.pregunta45);

		var informacionArray = parseInt(informacion.pregunta9) + parseInt(informacion.pregunta13) + parseInt(informacion.pregunta30) + parseInt(informacion.pregunta31) + parseInt(informacion.pregunta37) + parseInt(informacion.pregunta39) + parseInt(informacion.pregunta41) + parseInt(informacion.pregunta43) + parseInt(informacion.pregunta47) + parseInt(informacion.pregunta48);


		var monitoreoArray = parseInt(monitoreo.pregunta1) + parseInt(monitoreo.pregunta2) + parseInt(monitoreo.pregunta11) + parseInt(monitoreo.pregunta21) + parseInt(monitoreo.pregunta28) + parseInt(monitoreo.pregunta34) + parseInt(monitoreo.pregunta49);
		
		var depuracionArray = parseInt(depuracion.pregunta25) + parseInt(depuracion.pregunta40) + parseInt(depuracion.pregunta44) + parseInt(depuracion.pregunta51) + parseInt(depuracion.pregunta52);

		var evaluacionArray = parseInt(evaluacion.pregunta7) + parseInt(evaluacion.pregunta19) + parseInt(evaluacion.pregunta24) + parseInt(evaluacion.pregunta36) + parseInt(evaluacion.pregunta38) + parseInt(evaluacion.pregunta50);


//Operaciones Finales

		var opDecla = (declarativoArray * 100) / 40;
		var opProce = (proceduralArray * 100) / 20;
		var opCondi = (condicionalArray * 100) / 25;
		var opPlane = (planeacionArray * 100) / 35;
		var opInfo = (informacionArray * 100) / 50;
		var opMoni = (monitoreoArray * 100) / 35;
		var opDepu = (depuracionArray * 100) / 25;
		var opEva = (evaluacionArray * 100) / 30;

		var conocimientoMeta = (opDecla + opProce + opCondi) / 3;
		var indice = (opPlane + opInfo + opMoni + opDepu + opEva) / 5;


//Redondeo
		var fx_opDecla = opDecla.toFixed(2);
		var fx_opProce = opProce.toFixed(2);
		var fx_opCondi = opCondi.toFixed(2);
		var fx_opPlane = opPlane.toFixed(2);
		var fx_opInfo = opInfo.toFixed(2);
		var fx_opMoni = opMoni.toFixed(2);
		var fx_opDepu = opDepu.toFixed(2);
		var fx_opEva = opEva.toFixed(2);

		var fx_conocimientoMeta = conocimientoMeta.toFixed(2); 
		var fx_indice = indice.toFixed(2); 




	/*	alert("El resultado de opDecla "+fx_opDecla);
		alert("El resultado de opProce "+fx_opProce);
		alert("El resultado de opCondi "+fx_opCondi);
		alert("El resultado de opPlane "+fx_opPlane);
		alert("El resultado de opInfo "+fx_opInfo);
		alert("El resultado de opMoni "+fx_opMoni);
		alert("El resultado de opDepu "+fx_opDepu);
		alert("El resultado de opEva "+fx_opEva);
		alert("El resultado de conocimientoMeta "+fx_conocimientoMeta);
		alert("El resultado de indice "+fx_indice);
*/

			window.location = "recibe.php?resuldecla=" + fx_opDecla + "&resulproce=" + fx_opProce + "&resulcond=" + fx_opCondi + "&resulplan=" +fx_opPlane+"&resulinfo=" +fx_opInfo+"&resulmoni="+fx_opMoni+"&resuldepu="+fx_opDepu+"&resuleval="+fx_opEva+"&conmeta="+fx_conocimientoMeta+"&indiceM="+fx_indice;

		return false;


}
	</script>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
