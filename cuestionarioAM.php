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
	<title>Cuestionario AM</title>
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
	    <h1 class="display-4">Cuestionaro AM</h1>
	    <p class="lead">Dev 4</p>
	  </div>
	</div>
	<div class="container">

		<br><br>
	<a href="menu.php"><input type="button" id="salir-btn"  class="btn btn-default" value="Menu"></a>
		<br><br>
	<a href="salir.php"><input type="button" id="salir-btn"  class="btn btn-danger" value="Salir"></a>


	<div class="wrap">
		<form action="javascript:make_json(this)" class="formulario" onsubmit="return make_json(this)";>
		<div class="radios">
				<h3>01. Cuando tengo que prestar atención, me doy cuenta de que estoy concentrado y de lo que estoy haciendo para mantenerme de esa forma</h3>
					<input type="radio" name="am1" id="nada1" value="1">
					<label for="nada1">Nunca</label>

					<input type="radio" name="am1" id="casinada1" value="2">
					<label for="casinada1">Pocas Veces</label>

					<input type="radio" name="am1" id="algo1" value="3">
					<label for="algo1">Frecuentemente</label>

					<input type="radio" name="am1" id="mucho1" value="4">
					<label for="mucho1">Muchas veces</label>

					<input type="radio" name="am1" id="todo1" value="5">
					<label for="todo1">Siempre</label>
			</div>

			<div class="radios">
				<h3>02. Cuando tengo que prestar atención en una clase, me doy cuenta si estoy siendo eficiente o no</h3>
					<input type="radio" name="am2" id="nada2" value="1">
					<label for="nada2">Nunca</label>

					<input type="radio" name="am2" id="casinada2" value="2">
					<label for="casinada2">Pocas Veces</label>

					<input type="radio" name="am2" id="algo2" value="3">
					<label for="algo2">Frecuentemente</label>

					<input type="radio" name="am2" id="mucho2" value="4">
					<label for="mucho2">Muchas veces</label>

					<input type="radio" name="am2" id="todo2" value="5">
					<label for="todo2">Siempre</label>
				</div>

			<div class="radios">
				<h3>03. Cuando me doy cuenta de como presto atención, soy capaz de mejorar mi atención</h3>
					<input type="radio" name="am3" id="nada3" value="1">
					<label for="nada3">Nunca</label>

					<input type="radio" name="am3" id="casinada3" value="2">
					<label for="casinada3">Pocas Veces </label>

					<input type="radio" name="am3" id="algo3" value="3">
					<label for="algo3">Frecuentemente</label>

					<input type="radio" name="am3" id="mucho3" value="4">
					<label for="mucho3">Muchas veces</label>

					<input type="radio" name="am3" id="todo3" value="5">
					<label for="todo3">Siempre</label>
			</div>

			<div class="radios">
				<h3>04. Cuando tengo que hablar, me doy cuenta si soy oportuno o no</h3>
					<input type="radio" name="am4" id="nada4" value="1">
					<label for="nada4">Nunca</label>

					<input type="radio" name="am4" id="casinada4" value="2">
					<label for="casinada4">Pocas Veces</label>

					<input type="radio" name="am4" id="algo4" value="3">
					<label for="algo4">Frecuentemente</label>

					<input type="radio" name="am4" id="mucho4" value="4">
					<label for="mucho4">Muchas veces</label>

					<input type="radio" name="am4" id="todo4" value="5">
					<label for="todo4">Siempre</label>
			</div>

			<div class="radios">
				<h3>05. Al exponer un trabajo en clase, controlo la manera de hablar</h3>
					<input type="radio" name="am5" id="nada5" value="1">
					<label for="nada5">Nunca</label>

					<input type="radio" name="am5" id="casinada5" value="2">
					<label for="casinada5">Pocas Veces</label>

					<input type="radio" name="am5" id="algo5" value="3">
					<label for="algo5">Frecuentemente</label>

					<input type="radio" name="am5" id="mucho5" value="4">
					<label for="mucho5">Muchas veces</label>

					<input type="radio" name="am5" id="todo5" value="5">
					<label for="todo5">Siempre</label>
			</div>

			<div class="radios">
				<h3>06. Consigo percibir la reacción del auditorio en clase cuando expongo un trabajo</h3>
					<input type="radio" name="am6" id="nada6" value="1">
					<label for="nada6">Nunca</label>

					<input type="radio" name="am6" id="casinada6" value="2">
					<label for="casinada6">Pocas Veces</label>

					<input type="radio" name="am6" id="algo6" value="3">
					<label for="algo6">Frecuentemente</label>

					<input type="radio" name="am6" id="mucho6" value="4">
					<label for="mucho6">Muchas veces</label>

					<input type="radio" name="am6" id="todo6" value="5">
					<label for="todo6">Siempre</label>
			</div>

			<div class="radios">
				<h3>07. Cuando tengo que memorizar algo, se si resultará fácil o difícil recordarlo después</h3>
					<input type="radio" name="am7" id="nada7" value="1">
					<label for="nada7">Nunca</label> 

					<input type="radio" name="am7" id="casinada7" value="2">
					<label for="casinada7">Pocas Veces</label>

					<input type="radio" name="am7" id="algo7" value="3">
					<label for="algo7">Frecuentemente</label>

					<input type="radio" name="am7" id="mucho7" value="4">
					<label for="mucho7">Muchas veces</label>

					<input type="radio" name="am7" id="todo7" value="5">
					<label for="todo7">Siempre</label>
			</div>

			<div class="radios">
				<h3>08. Cuando tengo que recordar una materia recibida en el aula, evalúo si soy o no eficiente al recordarla</h3>
					<input type="radio" name="am8" id="nada8" value="1">
					<label for="nada8">Nunca</label>

					<input type="radio" name="am8" id="casinada8" value="2">
					<label for="casinada8">Pocas Veces</label>

					<input type="radio" name="am8" id="algo8" value="3">
					<label for="algo8">Frecuentemente</label>

					<input type="radio" name="am8" id="mucho8" value="4">
					<label for="mucho8">Muchas veces</label>

					<input type="radio" name="am8" id="todo8" value="5">
					<label for="todo8">Siempre</label>
			</div>

			<div class="radios">
				<h3>09. Al recordar alguna cosa, percibo si el tema en cuestión se relaciona con otros</h3>
					<input type="radio" name="am9" id="nada9" value="1">
					<label for="nada9">Nunca</label>

					<input type="radio" name="am9" id="casinada9" value="2">
					<label for="casinada9">Pocas Veces</label>

					<input type="radio" name="am9" id="algo9" value="3">
					<label for="algo9">Frecuentemente</label>

					<input type="radio" name="am9" id="mucho9" value="4">
					<label for="mucho9">Muchas veces</label>

					<input type="radio" name="am9" id="todo9" value="5">
					<label for="todo9">Siempre</label>
			</div>

			<div class="radios">
				<h3>10. Cuando voy a resolver un problema, tengo conciencia de los pasos que debo seguir </h3>
					<input type="radio" name="am10" id="nada10" value="1">
					<label for="nada10">Nunca</label>

					<input type="radio" name="am10" id="casinada10" value="2">
					<label for="casinada10">Pocas Veces</label>

					<input type="radio" name="am10" id="algo10" value="3">
					<label for="algo10">Frecuentemente</label>

					<input type="radio" name="am10" id="mucho10" value="4">
					<label for="mucho10">Muchas veces</label>

					<input type="radio" name="am10" id="todo10" value="5">
					<label for="todo10">Siempre</label>
			</div>

			<div class="radios">
				<h3>11. Cuando tengo que pensar en algo, controlo mi pensamiento</h3>
					<input type="radio" name="am11" id="nada11" value="1">
					<label for="nada11">Nunca</label>

					<input type="radio" name="am11" id="casinada11" value="2">
					<label for="casinada11">Pocas Veces</label>

					<input type="radio" name="am11" id="algo11" value="3">
					<label for="algo11">Frecuentemente</label>

					<input type="radio" name="am11" id="mucho11" value="4">
					<label for="mucho11">Muchas veces</label>

					<input type="radio" name="am11" id="todo11" value="5">
					<label for="todo11">Siempre</label>
			</div>

			<div class="radios">
				<h3>12. Cuando pienso en algo, me doy cuenta de lo que hago para pensar</h3>
					<input type="radio" name="am12" id="nada12" value="1">
					<label for="nada12">Nunca</label>

					<input type="radio" name="am12" id="casinada12" value="2">
					<label for="casinada12">Pocas Veces</label>

					<input type="radio" name="am12" id="algo12" value="3">
					<label for="algo12">Frecuentemente</label>

					<input type="radio" name="am12" id="mucho12" value="4">
					<label for="mucho12">Muchas veces</label>

					<input type="radio" name="am12" id="todo12" value="5">
					<label for="todo12">Siempre</label>
			</div>

			<div class="radios">
				<h3>13. Cuando conozco algo, procuro saber para qué sirve este conocimiento </h3>
					<input type="radio" name="am13" id="nada13" value="1">
					<label for="nada13">Nunca</label>

					<input type="radio" name="am13" id="casinada13" value="2">
					<label for="casinada13">Pocas Veces</label>

					<input type="radio" name="am13" id="algo13" value="3">
					<label for="algo13">Frecuentemente</label>

					<input type="radio" name="am13" id="mucho13" value="4">
					<label for="mucho13">Muchas veces</label>

					<input type="radio" name="am13" id="todo13" value="5">
					<label for="todo13">Siempre</label>
			</div>

			<div class="radios">
				<h3>14. Cuando decido pensar en alguna cosa, me preocupo en saber cuáles son las causas que me llevan a pensar</h3>
					<input type="radio" name="am14" id="nada14" value="1">
					<label for="nada14">Nunca</label>

					<input type="radio" name="am14" id="casinada14" value="2">
					<label for="casinada14">Pocas Veces</label>

					<input type="radio" name="am14" id="algo14" value="3">
					<label for="algo14">Frecuentemente</label>

					<input type="radio" name="am14" id="mucho14" value="4">
					<label for="mucho14">Muchas veces</label>

					<input type="radio" name="am14" id="todo14" value="5">
					<label for="todo14">Siempre</label>
			</div>

			<div class="radios">
				<h3>15. Cuando estoy pensando, tengo consciencia que una cosa es el pensamiento y otra es la Realidad </h3>
					<input type="radio" name="am15" id="nada15" value="1">
					<label for="nada15">Nunca</label>

					<input type="radio" name="am15" id="casinada15" value="2">
					<label for="casinada15">Pocas Veces</label>

					<input type="radio" name="am15" id="algo15" value="3">
					<label for="algo15">Frecuentemente</label>

					<input type="radio" name="am15" id="mucho15" value="4">
					<label for="mucho15">Muchas veces</label>

					<input type="radio" name="am15" id="todo15" value="5">
					<label for="todo15">Siempre</label>
			</div>

			<div class="radios">
				<h3>16. Cuando tengo conciencia de un problema, percibo que la realidad puede ser diferente </h3>
					<input type="radio" name="am16" id="nada16" value="1">
					<label for="nada16">Nunca</label>

					<input type="radio" name="am16" id="casinada16" value="2">
					<label for="casinada16">Pocas Veces</label>

					<input type="radio" name="am16" id="algo16" value="3">
					<label for="algo16">Frecuentemente</label>

					<input type="radio" name="am16" id="mucho16" value="4">
					<label for="mucho16">Muchas veces</label>

					<input type="radio" name="am16" id="todo16" value="5">
					<label for="todo16">Siempre</label>
			</div>

			<div class="radios">
				<h3>17. Para distinguir entre lo que pienso y lo que veo, utilizo estrategias </h3>
					<input type="radio" name="am17" id="nada17" value="1">
					<label for="nada17">Nunca</label>

					<input type="radio" name="am17" id="casinada17" value="2">
					<label for="casinada17">Pocas Veces</label>

					<input type="radio" name="am17" id="algo17" value="3">
					<label for="algo17">Frecuentemente</label>

					<input type="radio" name="am17" id="mucho17" value="4">
					<label for="mucho17">Muchas veces</label>

					<input type="radio" name="am17" id="todo17" value="5">
					<label for="todo17">Siempre</label>
			</div>

			<div class="radios">
				<h3>18. La comprensión de la diferencia entre lo que pienso sobre algo y lo que realmente es ese algo, me facilita el desarrollo de las actividades diarias </h3>
					<input type="radio" name="am18" id="nada18" value="1">
					<label for="nada18">Nunca</label>

					<input type="radio" name="am18" id="casinada18" value="2">
					<label for="casinada18">Pocas Veces</label>

					<input type="radio" name="am18" id="algo18" value="3">
					<label for="algo18">Frecuentemente</label>

					<input type="radio" name="am18" id="mucho18" value="4">
					<label for="mucho18">Muchas veces</label>

					<input type="radio" name="am18" id="todo18" value="5">
					<label for="todo18">Siempre</label>
			</div>

			<div class="radios">
				<h3>19. Cuando soy consciente de alguna realidad, aprecio que esa realidad tiene sus propias reglas </h3>
					<input type="radio" name="am19" id="nada19" value="1">
					<label for="nada19">Nunca</label>

					<input type="radio" name="am19" id="casinada19" value="2">
					<label for="casinada19">Pocas Veces</label>

					<input type="radio" name="am19" id="algo19" value="3">
					<label for="algo19">Frecuentemente</label>

					<input type="radio" name="am19" id="mucho19" value="4">
					<label for="mucho19">Muchas veces</label>

					<input type="radio" name="am19" id="todo19" value="5">
					<label for="todo19">Siempre</label>
			</div>

			<div class="radios">
				<h3>20. Para descubrir la existencia del orden y las reglas que norman un tema, utilizo estrategias </h3>
					<input type="radio" name="am20" id="nada20" value="1">
					<label for="nada20">Nunca</label>

					<input type="radio" name="am20" id="casinada20" value="2">
					<label for="casinada20">Pocas Veces</label>

					<input type="radio" name="am20" id="algo20" value="3">
					<label for="algo20">Frecuentemente</label>

					<input type="radio" name="am20" id="mucho20" value="4">
					<label for="mucho20">Muchas veces</label>

					<input type="radio" name="am20" id="todo20" value="5">
					<label for="todo20">Siempre</label>
			</div>

			<div class="radios">
				<h3>21. Al descubrir que existen orden y reglas en la realidad, me siento mejor </h3>
					<input type="radio" name="am21" id="nada21" value="1">
					<label for="nada21">Nunca</label>

					<input type="radio" name="am21" id="casinada21" value="2">
					<label for="casinada21">Pocas Veces</label>
 
					<input type="radio" name="am21" id="algo21" value="3">
					<label for="algo21">Frecuentemente</label>

					<input type="radio" name="am21" id="mucho21" value="4">
					<label for="mucho21">Muchas veces</label>

					<input type="radio" name="am21" id="todo21" value="5">
					<label for="todo21">Siempre</label>
			</div>

			<div class="radios">
				<h3>22. Me doy cuenta de que para ser consciente de algo, preciso adaptarme a la realidad </h3>
					<input type="radio" name="am22" id="nada22" value="1">
					<label for="nada22">Nunca</label>

					<input type="radio" name="am22" id="casinada22" value="2">
					<label for="casinada22">Pocas Veces</label>

					<input type="radio" name="am22" id="algo22" value="3">
					<label for="algo22">Frecuentemente</label>

					<input type="radio" name="am22" id="mucho22" value="4">
					<label for="mucho22">Muchas veces</label>

					<input type="radio" name="am22" id="todo22" value="5">
					<label for="todo22">Siempre</label>
			</div>

			<div class="radios">
				<h3>23. Cuando lo que pienso se adapta a las exigencias de la realidad, se el porqué de la adaptación </h3>
					<input type="radio" name="am23" id="nada23" value="1">
					<label for="nada23">Nunca</label>

					<input type="radio" name="am23" id="casinada23" value="2">
					<label for="casinada23">Pocas Veces</label>

					<input type="radio" name="am23" id="algo23" value="3">
					<label for="algo23">Frecuentemente</label> 

					<input type="radio" name="am23" id="mucho23" value="4">
					<label for="mucho23">Muchas veces</label>

					<input type="radio" name="am23" id="todo23" value="5">
					<label for="todo23">Siempre</label>
			</div>

			<div class="radios">
				<h3>24. Cuando mis pensamientos se adaptan a la realidad, siento que la realidad se impone a mis intenciones </h3>
					<input type="radio" name="am24" id="nada24" value="1">
					<label for="nada24">Nunca</label>

					<input type="radio" name="am24" id="casinada24" value="2">
					<label for="casinada24">Pocas Veces</label>

					<input type="radio" name="am24" id="algo24" value="3">
					<label for="algo24">Frecuentemente</label>

					<input type="radio" name="am24" id="mucho24" value="4">
					<label for="mucho24">Muchas veces</label>

					<input type="radio" name="am24" id="todo24" value="5">
					<label for="todo24">Siempre</label>
			</div>

 			<div class="radios">
				<h3>25. Tengo conciencia de que todo lo que hago (pensar, recordar, prestar atención) está relacionado entre sí</h3>
					<input type="radio" name="am25" id="nada25" value="1">
					<label for="nada25">Nunca</label>

					<input type="radio" name="am25" id="casinada25" value="2">
					<label for="casinada25">Pocas Veces</label>

					<input type="radio" name="am25" id="algo25" value="3">
					<label for="algo25">Frecuentemente</label>

					<input type="radio" name="am25" id="mucho25" value="4">
					<label for="mucho25">Muchas veces</label>

					<input type="radio" name="am25" id="todo25" value="5">
					<label for="todo25">Siempre</label>
				</div>

			<div class="radios">
				<h3>26. Cuando organizo mis conocimientos, utilizo estrategias</h3>
					<input type="radio" name="am26" id="nada26" value="1">
					<label for="nada26">Nunca</label>

					<input type="radio" name="am26" id="casinada26" value="2">
					<label for="casinada26">Pocas Veces</label>

					<input type="radio" name="am26" id="algo26" value="3">
					<label for="algo26">Frecuentemente</label>

					<input type="radio" name="am26" id="mucho26" value="4">
					<label for="mucho26">Muchas veces</label>

					<input type="radio" name="am26" id="todo26" value="5">
					<label for="todo26">Siempre</label>
			</div>

			<div class="radios">
				<h3>27. La organización de mi pensamiento, facilita mi trabajo intelectual</h3>
					<input type="radio" name="am27" id="nada27" value="1">
					<label for="nada27">Nunca</label>

					<input type="radio" name="am27" id="casinada27" value="2">
					<label for="casinada27">Pocas Veces</label>

					<input type="radio" name="am27" id="algo27" value="3">
					<label for="algo27">Frecuentemente</label>

					<input type="radio" name="am27" id="mucho27" value="4">
					<label for="mucho27">Muchas veces</label>

					<input type="radio" name="am27" id="todo27" value="5">
					<label for="todo27">Siempre</label>
			</div>

			<div class="radios">
				<h3>28. Cuando soy consciente de alguna cosa, siento que esta conciencia se modifica según la situación</h3>
					<input type="radio" name="am28" id="nada28" value="1">
					<label for="nada28">Nunca</label>

					<input type="radio" name="am28" id="casinada28" value="2">
					<label for="casinada28">Pocas Veces</label>

					<input type="radio" name="am28" id="algo28" value="3">
					<label for="algo28">Frecuentemente</label>

					<input type="radio" name="am28" id="mucho28" value="4">
					<label for="mucho28">Muchas veces</label>

					<input type="radio" name="am28" id="todo28" value="5">
					<label for="todo28">Siempre</label>
			</div>

			<div class="radios">
				<h3>29. Para que mis pensamientos sean flexibles, utilizo estrategias y procedimientos</h3>
					<input type="radio" name="am29" id="nada29" value="1">
					<label for="nada29">Nunca</label>

					<input type="radio" name="am29" id="casinada29" value="2">
					<label for="casinada29">Pocas Veces</label>

					<input type="radio" name="am29" id="algo29" value="3">
					<label for="algo29">Frecuentemente</label>

					<input type="radio" name="am29" id="mucho29" value="4">
					<label for="mucho29">Muchas veces</label>

					<input type="radio" name="am29" id="todo29" value="5">
					<label for="todo29">Siempre</label>
			</div>

			<div class="radios">
				<h3>30. Cuando soy flexible, siento que las cosas se vuelven más seguras y eficaces</h3>
					<input type="radio" name="am30" id="nada30" value="1">
					<label for="nada30">Nunca</label>

					<input type="radio" name="am30" id="casinada30" value="2">
					<label for="casinada30">Pocas Veces</label>

					<input type="radio" name="am30" id="algo30" value="3">
					<label for="algo30">Frecuentemente</label>

					<input type="radio" name="am30" id="mucho30" value="4">
					<label for="mucho30">Muchas veces</label>

					<input type="radio" name="am30" id="todo30" value="5">
					<label for="todo30">Siempre</label>
			</div>

			<div class="radios">
				<h3>31. Cuando conozco algo, soy consciente de que lo conozco</h3>
					<input type="radio" name="am31" id="nada31" value="1">
					<label for="nada31">Nunca</label>

					<input type="radio" name="am31" id="casinada31" value="2">
					<label for="casinada31">Pocas Veces</label>

					<input type="radio" name="am31" id="algo31" value="3">
					<label for="algo31">Frecuentemente</label>

					<input type="radio" name="am31" id="mucho31" value="4">
					<label for="mucho31">Muchas veces</label>

					<input type="radio" name="am31" id="todo31" value="5">
					<label for="todo31">Siempre</label>
			</div>

			<div class="radios">
				<h3>32. Cuando tengo que auto-controlarme, utilizo estrategias</h3>
					<input type="radio" name="am32" id="nada32" value="1">
					<label for="nada32">Nunca</label>

					<input type="radio" name="am32" id="casinada32" value="2">
					<label for="casinada32">Pocas Veces</label>

					<input type="radio" name="am32" id="algo32" value="3">
					<label for="algo32">Frecuentemente</label>

					<input type="radio" name="am32" id="mucho32" value="4">
					<label for="mucho32">Muchas veces</label>

					<input type="radio" name="am32" id="todo32" value="5">
					<label for="todo32">Siempre</label>
			</div>

			<div class="radios">
				<h3>33. Al auto-controlarme, me siento más seguro y eficiente</h3>
					<input type="radio" name="am33" id="nada33" value="1">
					<label for="nada33">Nunca</label>

					<input type="radio" name="am33" id="casinada33" value="2">
					<label for="casinada33">Pocas Veces</label>

					<input type="radio" name="am33" id="algo33" value="3">
					<label for="algo33">Frecuentemente</label>

					<input type="radio" name="am33" id="mucho33" value="4">
					<label for="mucho33">Muchas veces</label>

					<input type="radio" name="am33" id="todo33" value="5">
					<label for="todo33">Siempre</label>
			</div>

			<div class="radios">
				<h3>34. Tengo consciencia del conocimiento que poseo de las otras personas </h3>
					<input type="radio" name="am34" id="nada34" value="1">
					<label for="nada34">Nunca</label>

					<input type="radio" name="am34" id="casinada34" value="2">
					<label for="casinada34">Pocas Veces</label>

					<input type="radio" name="am34" id="algo34" value="3">
					<label for="algo34">Frecuentemente</label>

					<input type="radio" name="am34" id="mucho34" value="4">
					<label for="mucho34">Muchas veces</label>

					<input type="radio" name="am34" id="todo34" value="5">
					<label for="todo34">Siempre</label>
			</div>

			<div class="radios">
				<h3>35. Cuando tengo que hacer algún trabajo académico, se escoger los procedimientos necesarios conforme a lo que pide cada trabajo</h3>
					<input type="radio" name="am35" id="nada35" value="1">
					<label for="nada35">Nunca</label>

					<input type="radio" name="am35" id="casinada35" value="2">
					<label for="casinada35">Pocas Veces</label>

					<input type="radio" name="am35" id="algo35" value="3">
					<label for="algo35">Frecuentemente</label>

					<input type="radio" name="am35" id="mucho35" value="4">
					<label for="mucho35">Muchas veces</label>

					<input type="radio" name="am35" id="todo35" value="5">
					<label for="todo35">Siempre</label>
			</div>

			<div class="radios">
				<h3>36. Cuando pienso en mi mismo, considero las observaciones hechas por otras personas sobre mi </h3>
					<input type="radio" name="am36" id="nada36" value="1">
					<label for="nada36">Nunca</label>

					<input type="radio" name="am36" id="casinada36" value="2">
					<label for="casinada36">Pocas Veces</label>

					<input type="radio" name="am36" id="algo36" value="3">
					<label for="algo36">Frecuentemente</label>

					<input type="radio" name="am36" id="mucho36" value="4">
					<label for="mucho36">Muchas veces</label>

					<input type="radio" name="am36" id="todo36" value="5">
					<label for="todo36">Siempre</label>
			</div>

			<div class="radios">
				<h3>37. Los conocimientos previos que tengo sobre algo, me facilitan pensar o recordar sobre ello</h3>
					<input type="radio" name="am37" id="nada37" value="1">
					<label for="nada37">Nunca</label>

					<input type="radio" name="am37" id="casinada37" value="2">
					<label for="casinada37">Pocas Veces</label>

					<input type="radio" name="am37" id="algo37" value="3">
					<label for="algo37">Frecuentemente</label>

					<input type="radio" name="am37" id="mucho37" value="4">
					<label for="mucho37">Muchas veces</label>

					<input type="radio" name="am37" id="todo37" value="5">
					<label for="todo37">Siempre</label>
			</div>

			<div class="radios">
				<h3>38. Cuando tomo consciencia que tengo dificultades para recordar algo, dedico un esfuerzo mayor para recordar</h3>
					<input type="radio" name="am38" id="nada38" value="1">
					<label for="nada38">Nunca</label>

					<input type="radio" name="am38" id="casinada38" value="2">
					<label for="casinada38">Pocas Veces</label>

					<input type="radio" name="am38" id="algo38" value="3">
					<label for="algo38">Frecuentemente</label>

					<input type="radio" name="am38" id="mucho38" value="4">
					<label for="mucho38">Muchas veces</label>

					<input type="radio" name="am38" id="todo38" value="5">
					<label for="todo38">Siempre</label>
			</div>

			<div class="radios">
				<h3>39. Cuando tengo que recordar o prestar atención en algo, sólo lo hago si con esto tengo algún beneficio </h3>
					<input type="radio" name="am39" id="nada39" value="1">
					<label for="nada39">Nunca</label>

					<input type="radio" name="am39" id="casinada39" value="2">
					<label for="casinada39">Pocas Veces</label>

					<input type="radio" name="am39" id="algo39" value="3">
					<label for="algo39">Frecuentemente</label>

					<input type="radio" name="am39" id="mucho39" value="4">
					<label for="mucho39">Muchas veces</label>

					<input type="radio" name="am39" id="todo39" value="5">
					<label for="todo39">Siempre</label>
			</div>

			<div class="radios">
				<h3>40. Cuando tengo que pensar, recordar o prestar atención con eficiencia, se cuáles son los materiales importantes y cuáles no</h3>
					<input type="radio" name="am40" id="nada40" value="1">
					<label for="nada40">Nunca</label>

					<input type="radio" name="am40" id="casinada40" value="2">
					<label for="casinada40">Pocas Veces</label>

					<input type="radio" name="am40" id="algo40" value="3">
					<label for="algo40">Frecuentemente</label>

					<input type="radio" name="am40" id="mucho40" value="4">
					<label for="mucho40">Muchas veces</label>

					<input type="radio" name="am40" id="todo40" value="5">
					<label for="todo40">Siempre</label>
			</div>

			<div class="radios">
				<h3>41. Cuando tengo que pensar, recordar o prestar atención con eficiencia, lo hago de forma diferente en cada nueva situación</h3>
					<input type="radio" name="am41" id="nada41" value="1">
					<label for="nada41">Nunca</label>

					<input type="radio" name="am41" id="casinada41" value="2">
					<label for="casinada41">Pocas Veces</label>

					<input type="radio" name="am41" id="algo41" value="3">
					<label for="algo41">Frecuentemente</label>

					<input type="radio" name="am41" id="mucho41" value="4">
					<label for="mucho41">Muchas veces</label>

					<input type="radio" name="am41" id="todo41" value="5">
					<label for="todo41">Siempre</label>
			</div>

			<div class="radios">
				<h3>42. Cuando tengo que pensar, recordar o prestar atención con eficiencia, tomo en cuenta el contexto socio-cultural en que me encuentro</h3>
					<input type="radio" name="am42" id="nada42" value="1">
					<label for="nada42">Nunca</label>

					<input type="radio" name="am42" id="casinada42" value="2">
					<label for="casinada42">Pocas Veces</label>

					<input type="radio" name="am42" id="algo42" value="3">
					<label for="algo42">Frecuentemente</label>

					<input type="radio" name="am42" id="mucho42" value="4">
					<label for="mucho42">Muchas veces</label>

					<input type="radio" name="am42" id="todo42" value="5">
					<label for="todo42">Siempre</label>
			</div>

			<div class="radios">
				<h3>43. Cuando tengo que pensar, recordar o prestar atención, lo hago de forma diferente según la actividad que tengo que realizar</h3>
					<input type="radio" name="am43" id="nada43" value="1">
					<label for="nada43">Nunca</label>

					<input type="radio" name="am43" id="casinada43" value="2">
					<label for="casinada43">Pocas Veces</label>

					<input type="radio" name="am43" id="algo43" value="3">
					<label for="algo43">Frecuentemente</label>

					<input type="radio" name="am43" id="mucho43" value="4">
					<label for="mucho43">Muchas veces</label>

					<input type="radio" name="am43" id="todo43" value="5">
					<label for="todo43">Siempre</label>
			</div>

			<div class="radios">
				<h3>44. Al pensar, recordar o prestar atención, si fuese necesario, busco estrategias nuevas</h3>
					<input type="radio" name="am44" id="nada44" value="1">
					<label for="nada44">Nunca</label>

					<input type="radio" name="am44" id="casinada44" value="2">
					<label for="casinada44">Pocas Veces</label>

					<input type="radio" name="am44" id="algo44" value="3">
					<label for="algo44">Frecuentemente</label>

					<input type="radio" name="am44" id="mucho44" value="4">
					<label for="mucho44">Muchas veces</label>

					<input type="radio" name="am44" id="todo44" value="5">
					<label for="todo44">Siempre</label>
			</div>

			<div class="radios">
				<h3>45. Al pensar, recordar o prestar atención, considero importante la concentración y el esfuerzo </h3>
					<input type="radio" name="am45" id="nada45" value="1">
					<label for="nada45">Nunca</label>

					<input type="radio" name="am45" id="casinada45" value="2">
					<label for="casinada45">Pocas Veces</label>

					<input type="radio" name="am45" id="algo45" value="3">
					<label for="algo45">Frecuentemente</label>

					<input type="radio" name="am45" id="mucho45" value="4">
					<label for="mucho45">Muchas veces</label>

					<input type="radio" name="am45" id="todo45" value="5">
					<label for="todo45">Siempre</label>
			</div>

			<div class="radios">
				<h3>46. Cuando tengo consciencia de que tengo dudas de algo, busco ayuda para resolverlas </h3>
					<input type="radio" name="am46" id="nada46" value="1">
					<label for="nada46">Nunca</label>

					<input type="radio" name="am46" id="casinada46" value="2">
					<label for="casinada46">Pocas Veces</label>

					<input type="radio" name="am46" id="algo46" value="3">
					<label for="algo46">Frecuentemente</label>

					<input type="radio" name="am46" id="mucho46" value="4">
					<label for="mucho46">Muchas veces</label>

					<input type="radio" name="am46" id="todo46" value="5">
					<label for="todo46">Siempre</label>
			</div>

			<div class="radios">
				<h3>47. Piensas antes lo que vas a decir y luego lo dices </h3>
					<input type="radio" name="am47" id="nada47" value="1">
					<label for="nada47">Nunca</label>

					<input type="radio" name="am47" id="casinada47" value="2">
					<label for="casinada47">Pocas Veces</label>

					<input type="radio" name="am47" id="algo47" value="3">
					<label for="algo47">Frecuentemente</label>

					<input type="radio" name="am47" id="mucho47" value="4">
					<label for="mucho47">Muchas veces</label>

					<input type="radio" name="am47" id="todo47" value="5">
					<label for="todo47">Siempre</label>
			</div>
			<div class="radios">
				<h3>48. Cuando te están preguntando algo esperas a que termine de hablar para responderle</h3>
					<input type="radio" name="am48" id="nada48" value="1">
					<label for="nada48">Nunca</label>

					<input type="radio" name="am48" id="casinada48" value="2">
					<label for="casinada48">Pocas Veces</label>

					<input type="radio" name="am48" id="algo48" value="3">
					<label for="algo48">Frecuentemente</label>

					<input type="radio" name="am48" id="mucho48" value="4">
					<label for="mucho48">Muchas veces</label>

					<input type="radio" name="am48" id="todo48" value="5">
					<label for="todo48">Siempre</label>
			</div>
			<div class="radios">
				<h3>49. Cuando te están hablando observas el lenguaje corporal de la persona </h3>
					<input type="radio" name="am49" id="nada49" value="1">
					<label for="nada49">Nunca</label>

					<input type="radio" name="am49" id="casinada49" value="2">
					<label for="casinada49">Pocas Veces</label>

					<input type="radio" name="am49" id="algo49" value="3">
					<label for="algo49">Frecuentemente</label>

					<input type="radio" name="am49" id="mucho49" value="4">
					<label for="mucho49">Muchas veces</label>

					<input type="radio" name="am49" id="todo49" value="5">
					<label for="todo49">Siempre</label>
			</div>
			<div class="radios">
				<h3>50. Cuando respondes a una pregunta usas el mismo lenguaje corporal que uso la persona</h3>
					<input type="radio" name="am50" id="nada50" value="1">
					<label for="nada50">Nunca</label>

					<input type="radio" name="am50" id="casinada50" value="2">
					<label for="casinada50">Pocas Veces</label>

					<input type="radio" name="am50" id="algo50" value="3">
					<label for="algo50">Frecuentemente</label>

					<input type="radio" name="am50" id="mucho50" value="4">
					<label for="mucho50">Muchas veces</label>

					<input type="radio" name="am50" id="todo50" value="5">
					<label for="todo50">Siempre</label>
			</div>
<!---->
			<div class="form-group">	
				<input type="submit" class="btn btn-defualt center-block">
			</div>

		</form>
		</div>
	</div>
	<script>
		function make_json(form){

			var verificar = true;
			var nada1 = document.getElementById('nada1').checked;
			var casinada1 = document.getElementById('casinada1').checked;
			var algo1 = document.getElementById('algo1').checked;
			var mucho1 = document.getElementById('mucho1').checked;
			var todo1 = document.getElementById('todo1').checked;

			if(!nada1 && !casinada1 && !algo1 && !mucho1 && !todo1){
				alert("Completa la pregunta 1");
				verificar = false;
				nada1.focus();
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

		

			var conciencia = {
				"pregunta1":form.am1.value,
				"pregunta4":form.am4.value,
				"pregunta7":form.am7.value,
				"pregunta10":form.am10.value,
				"pregunta13":form.am13.value,
				"pregunta16":form.am16.value,
				"pregunta19":form.am19.value,
				"pregunta22":form.am22.value,
				"pregunta25":form.am25.value,
				"pregunta28":form.am28.value,
				"pregunta31":form.am31.value,
				"pregunta34":form.am34.value
			};


			var sistematico = {
				"pregunta47":form.am47.value,
				"pregunta48":form.am48.value,
				"pregunta49":form.am49.value,
				"pregunta50":form.am50.value
			};

			var control = {
				"pregunta2":form.am2.value,
				"pregunta5":form.am5.value,
				"pregunta8":form.am8.value,
				"pregunta11":form.am11.value,
				"pregunta14":form.am14.value,
				"pregunta17":form.am17.value,
				"pregunta20":form.am20.value,
				"pregunta23":form.am23.value,
				"pregunta26":form.am26.value,
				"pregunta29":form.am29.value,
				"pregunta32":form.am32.value,
				"pregunta35":form.am35.value
			};

			var autopoiesis = {
				"pregunta3":form.am3.value,
				"pregunta6":form.am6.value,
				"pregunta9":form.am9.value,
				"pregunta12":form.am12.value,
				"pregunta15":form.am15.value,
				"pregunta18":form.am18.value,
				"pregunta21":form.am21.value,
				"pregunta24":form.am24.value,
				"pregunta27":form.am27.value,
				"pregunta30":form.am30.value,
				"pregunta33":form.am33.value,
				"pregunta36":form.am36.value
			}

			var metacognitivas = {
				"pregunta37":form.am37.value,
				"pregunta38":form.am38.value,
				"pregunta39":form.am39.value,
				"pregunta40":form.am40.value,
				"pregunta41":form.am41.value,
				"pregunta42":form.am42.value,
				"pregunta43":form.am43.value,
				"pregunta44":form.am44.value,
				"pregunta45":form.am45.value,
				"pregunta46":form.am46.value
			}
	

			var concienciaArray = parseInt(conciencia.pregunta1) + parseInt(conciencia.pregunta4) + parseInt(conciencia.pregunta7) + parseInt(conciencia.pregunta10) + parseInt(conciencia.pregunta13) + parseInt(conciencia.pregunta16) + parseInt(conciencia.pregunta19) + parseInt(conciencia.pregunta22) + parseInt(conciencia.pregunta25) + parseInt(conciencia.pregunta28) + parseInt(conciencia.pregunta31) + parseInt(conciencia.pregunta34);

			
			var controlArray = parseInt(control.pregunta2) + parseInt(control.pregunta5) + parseInt(control.pregunta8) + parseInt(control.pregunta11) + parseInt(control.pregunta14) + parseInt(control.pregunta17) + parseInt(control.pregunta20) + parseInt(control.pregunta23) + parseInt(control.pregunta26) + parseInt(control.pregunta29) + parseInt(control.pregunta32) + parseInt(control.pregunta35);

			var autopoiesisArray = parseInt(autopoiesis.pregunta3) + parseInt(autopoiesis.pregunta6) + parseInt(autopoiesis.pregunta9) + parseInt(autopoiesis.pregunta12) + parseInt(autopoiesis.pregunta15) + parseInt(autopoiesis.pregunta18) + parseInt(autopoiesis.pregunta21) + parseInt(autopoiesis.pregunta24) + parseInt(autopoiesis.pregunta27) + parseInt(autopoiesis.pregunta30) + parseInt(autopoiesis.pregunta33) + parseInt(autopoiesis.pregunta36);

			var metacognitivasArray = parseInt(metacognitivas.pregunta37) + parseInt(metacognitivas.pregunta38) + parseInt(metacognitivas.pregunta39) + parseInt(metacognitivas.pregunta40) + parseInt(metacognitivas.pregunta41) + parseInt(metacognitivas.pregunta42) + parseInt(metacognitivas.pregunta43) + parseInt(metacognitivas.pregunta44) + parseInt(metacognitivas.pregunta45) + parseInt(metacognitivas.pregunta46);

			var sistematicoArray = parseInt(sistematico.pregunta47) + parseInt(sistematico.pregunta48) + parseInt(sistematico.pregunta49) + parseInt(sistematico.pregunta50);


//Operacion finales
			var opCon = (concienciaArray * 100) / 60;
			var opCtrl = (controlArray * 100) / 60;
			var opAuto = (autopoiesisArray * 100) / 60;
			var opMeta = (metacognitivasArray * 100) / 50;
			var opSis = (sistematicoArray * 100) / 20;

			var indiceAct = (opCon + opCtrl + opAuto + opMeta) / 4;


//Resultados redondeados

			var fx_opCon = opCon.toFixed(2);
			var fx_opCtrl = opCtrl.toFixed(2);
			var fx_opAuto = opAuto.toFixed(2);
			var fx_opMeta = opMeta.toFixed(2);
			var fx_opSis = opSis.toFixed(2);
			var fx_indiceAct = indiceAct.toFixed(2);


			/*	alert("El resultado de Con"+fx_opCon);
			alert("El resultado de Ctrl"+fx_opCtrl);
			alert("El resultado de Auto"+fx_opAuto);
			alert("El resultado de Meta"+fx_opMeta);
			alert("El resultado de Sis"+fx_opSis);
			alert("El resultado de diceAct"+fx_indiceAct);
*/


			window.location = "recibe3.php?resulcon="+fx_opCon+"&resulcont="+fx_opCtrl+"&resulauto="+fx_opAuto+"&resulmeta="+fx_opMeta+"&resulsist="+fx_opSis+"&indiceActividad="+fx_indiceAct;
	/*	



			document.write("Total conciencia "+concienciaArray);
			document.write("Total sistematico "+sistematicoArray);
			document.write("Total control "+controlArray);
			document.write("Total autopoiesis "+autopoiesisArray);
			document.write("Total metacognitivas "+metacognitivasArray);


	
		var html = JSON.stringify(metacognitivas,0,6);


		document.getElementById('output').innerHTML=html;

		document.write(typeof html);
*/

		return false;


}
	</script>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>