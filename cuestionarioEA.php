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
	<title>Cuestionario EA</title>
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
	<?php 
/*
		session_start();
			#if (isset($_SESSION['u_usuario'])) {
			#	echo"<h1>Hola Admin</h1>";
			#	echo "<a href='cerrar.php'>Salir</a>";
			#}else{
			#	header("Location: index.php");
			#}

			if(!$_SESSION["u_usuario"]){
			header("Location: salir.php");}*/

?>
<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Cuestionaro EA</h1>
	    <p class="lead">Dev 4</p>
	  </div>
	</div>

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
									<p>Este cuestionario ha sido diseñado para identificar su Estilo preferido de Aprendizaje. No es un test </p>	de inteligencia , ni de personalidad</p>	
									<p>No hay límite de tiempo para contestar al Cuestionario. No le ocupará más de 15 minutos.</p>	
									<p>No hay respuestas correctas o erróneas. Será útil en la medida que sea sincero(a) en sus respuestas.</p>	
									<p>Si está más de acuerdo que en desacuerdo con el ítem seleccione 'Mas (+)'.</p>	
									<p>Si, por el contrario, está más en desacuerdo que de acuerdo, seleccione 'Menos (-)'.</p>	
									<p>Por favor conteste a todos los items</p>					
							</div>
						</div>
					</div>
				</div>
				<br><br>

				<a href="salir.php"><input type="button" id="salir-btn"  class="btn btn-danger" value="Salir"></a>
			


	<div class="wrap">
		<form action="javascript:make_json(this);" class="formulario" onsubmit="return make_json(this);">
			
			<div class="radios">
				<h3>1. Tengo fama de decir lo que pienso claramente y sin rodeos</h3>
				<input type="radio" name="ea1" id="si1" value="1">
				<label for="si1">Mas</label>

				<input type="radio" name="ea1" id="no1" value="0">
				<label for="no1">Menos</label>
			</div>

			<div class="radios">
				<h3>2. Estoy seguro lo que es bueno y lo que es malo, lo que está bien y lo que está mal.</h3>
				<input type="radio" name="ea2" id="si2" value="1">
				<label for="si2">Mas</label>

				<input type="radio" name="ea2" id="no2" value="0">
				<label for="no2">Menos</label>
			</div>

			<div class="radios">
				<h3>3. Muchas veces actúo sin mirar las consecuencias</h3>
				<input type="radio" name="ea3" id="si3" value="1">
				<label for="si3">Mas</label>

				<input type="radio" name="ea3" id="no3" value="0">
				<label for="no3">Menos</label>
			</div>

			<div class="radios">
				<h3>4. Normalmente trato de resolver los problemas metódicamente y paso a paso</h3>
				<input type="radio" name="ea4" id="si4" value="1">
				<label for="si4">Mas</label>

				<input type="radio" name="ea4" id="no4" value="0">
				<label for="no4">Menos</label>
			</div>

			<div class="radios">
				<h3>5. Creo que los formalismos coartan y limitan la actuación libre de las personas</h3>
				<input type="radio" name="ea5" id="si5" value="1">
				<label for="si5">Mas</label>

				<input type="radio" name="ea5" id="no5" value="0">
				<label for="no5">Menos</label>
			</div>

			<div class="radios">
				<h3>6. Me interesa saber cuáles son los sistemas de valores de los demás y con qué criterios actúan</h3>
				<input type="radio" name="ea6" id="si6" value="1">
				<label for="si6">Mas</label>

				<input type="radio" name="ea6" id="no6" value="0">
				<label for="no6">Menos</label>
			</div>

			<div class="radios">
				<h3>7. Pienso que el actuar intuitivamente puede ser siempre tan válido como actuar reflexivamente</h3>
				<input type="radio" name="ea7" id="si7" value="1">
				<label for="si7">Mas</label>

				<input type="radio" name="ea7" id="no7" value="0">
				<label for="no7">Menos</label>
			</div>

			<div class="radios">
				<h3>8. Creo que lo más importante es que las cosas funcionen</h3>
				<input type="radio" name="ea8" id="si8" value="1">
				<label for="si8">Mas</label>

				<input type="radio" name="ea8" id="no8" value="0">
				<label for="no8">Menos</label>
			</div>

			<div class="radios">
				<h3>9. Procuro estar al tanto de lo que ocurre aquí y ahora.</h3>
				<input type="radio" name="ea9" id="si9" value="1">
				<label for="si9">Mas</label>

				<input type="radio" name="ea9" id="no9" value="0">
				<label for="no9">Menos</label>
			</div>

			<div class="radios">
				<h3>10. Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a conciencia</h3>
				<input type="radio" name="ea10" id="si10" value="1">
				<label for="si10">Mas</label>

				<input type="radio" name="ea10" id="no10" value="0">
				<label for="no10">Menos</label>
			</div>

			<div class="radios">
				<h3>11. Estoy a gusto siguiendo un orden, en las comidas, en el estudio, haciendo ejercicio regularmente</h3>
				<input type="radio" name="ea11" id="si11" value="1">
				<label for="si11">Mas</label>

				<input type="radio" name="ea11" id="no11" value="0">
				<label for="no11">Menos</label>
			</div>

			<div class="radios">
				<h3>12. Cuando escucho una nueva idea en seguida comienzo a pensar cómo ponerla en práctica</h3>
				<input type="radio" name="ea12" id="si12" value="1">
				<label for="si12">Mas</label>

				<input type="radio" name="ea12" id="no12" value="0">
				<label for="no12">Menos</label>
			</div>

			<div class="radios">
				<h3>13. Prefiero las ideas originales y novedosas aunque no sean prácticas</h3>
				<input type="radio" name="ea13" id="si13" value="1">
				<label for="si13">Mas</label>

				<input type="radio" name="ea13" id="no13" value="0">
				<label for="no13">Menos</label>
			</div>

			<div class="radios">
				<h3>14. Admito y me ajusto a las normas sólo si me sirven para lograr mis objetivos</h3>
				<input type="radio" name="ea14" id="si14" value="1">
				<label for="si14">Mas</label>

				<input type="radio" name="ea14" id="no14" value="0">
				<label for="no14">Menos</label>
			</div>

			<div class="radios">
				<h3>15. Normalmente encajo bien con personas reflexivas, analíticas y me cuesta sintonizar con personas demasiado espontáneas, imprevisibles</h3>
				<input type="radio" name="ea15" id="si15" value="1">
				<label for="si15">Mas</label>

				<input type="radio" name="ea15" id="no15" value="0">
				<label for="no15">Menos</label>
			</div>

			<div class="radios">
				<h3>16. Escucho con más frecuencia que hablo</h3>
				<input type="radio" name="ea16" id="si16" value="1">
				<label for="si16">Mas</label>

				<input type="radio" name="ea16" id="no16" value="0">
				<label for="no16">Menos</label>
			</div>

			<div class="radios">
				<h3>17. Prefiero las cosas estructuradas a las desordenadas</h3>
				<input type="radio" name="ea17" id="si17" value="1">
				<label for="si17">Mas</label>

				<input type="radio" name="ea17" id="no17" value="0">
				<label for="no17">Menos</label>
			</div>

			<div class="radios">
				<h3>18. Cuando poseo cualquier información, trato de interpretarla bien antes de manifestar alguna conclusión</h3>
				<input type="radio" name="ea18" id="si18" value="1">
				<label for="si18">Mas</label>

				<input type="radio" name="ea18" id="no18" value="0">
				<label for="no18">Menos</label>
			</div>

			<div class="radios">
				<h3>19. Antes de tomar una decisión estudio con cuidado sus ventajas e inconvenientes</h3>
				<input type="radio" name="ea19" id="si19" value="1">
				<label for="si19">Mas</label>

				<input type="radio" name="ea19" id="no19" value="0">
				<label for="no19">Menos</label>
			</div>

			<div class="radios">
				<h3>20. Me crezco con el reto de hacer algo nuevo y diferente</h3>
				<input type="radio" name="ea20" id="si20" value="1">
				<label for="si20">Mas</label>

				<input type="radio" name="ea20" id="no20" value="0">
				<label for="no20">Menos</label>
			</div>

			<div class="radios">
				<h3>21. Casi siempre procuro ser coherente con mis criterios y sistemas de valores. Tengo principios y los sigo</h3>
				<input type="radio" name="ea21" id="si21" value="1">
				<label for="si21">Mas</label>

				<input type="radio" name="ea21" id="no21" value="0">
				<label for="no21">Menos</label>
			</div>

			<div class="radios">
				<h3>22. Cuando hay una discusión no me gusta ir con rodeos</h3>
				<input type="radio" name="ea22" id="si22" value="1">
				<label for="si22">Mas</label>

				<input type="radio" name="ea22" id="no22" value="0">
				<label for="no22">Menos</label>
			</div>

			<div class="radios">
				<h3>23. Me disgusta implicarme afectivamente en mi ambiente de trabajo. Prefiero mantener relaciones distantes</h3>
				<input type="radio" name="ea23" id="si23" value="1">
				<label for="si23">Mas</label>

				<input type="radio" name="ea23" id="no23" value="0">
				<label for="no23">Menos</label>
			</div>

			<div class="radios">
				<h3>24. Me gustan más las personas realistas y concretas que las teóricas</h3>
				<input type="radio" name="ea24" id="si24" value="1">
				<label for="si24">Mas</label>

				<input type="radio" name="ea24" id="no24" value="0">
				<label for="no24">Menos</label>
			</div>

			<div class="radios">
				<h3>25. Me cuesta ser creativo/a, romper estructuras</h3>
				<input type="radio" name="ea25" id="si25" value="1">
				<label for="si25">Mas</label>

				<input type="radio" name="ea25" id="no25" value="0">
				<label for="no25">Menos</label>
			</div>

			<div class="radios">
				<h3>26. Me siento a gusto con personas espontáneas y divertidas</h3>
				<input type="radio" name="ea26" id="si26" value="1">
				<label for="si26">Mas</label>

				<input type="radio" name="ea26" id="no26" value="0">
				<label for="no26">Menos</label>
			</div>

			<div class="radios">
				<h3>27. La mayoría de las veces expreso abiertamente cómo me siento</h3>
				<input type="radio" name="ea27" id="si27" value="1">
				<label for="si27">Mas</label>

				<input type="radio" name="ea27" id="no27" value="0">
				<label for="no27">Menos</label>
			</div>

			<div class="radios">
				<h3>28. Me gusta analizar y dar vueltas a las cosas</h3>
				<input type="radio" name="ea28" id="si28" value="1">
				<label for="si28">Mas</label>

				<input type="radio" name="ea28" id="no28" value="0">
				<label for="no28">Menos</label>
			</div>

			<div class="radios">
				<h3>29. Me molesta que la gente no se tome en serio las cosas</h3>
				<input type="radio" name="ea29" id="si29" value="1">
				<label for="si29">Mas</label>

				<input type="radio" name="ea29" id="no29" value="0">
				<label for="no29">Menos</label>
			</div>

			<div class="radios">
				<h3>30. Me atrae experimentar y practicar las últimas técnicas y novedades</h3>
				<input type="radio" name="ea30" id="si30" value="1">
				<label for="si30">Mas</label>

				<input type="radio" name="ea30" id="no30" value="0">
				<label for="no30">Menos</label>
			</div>

			<div class="radios">
				<h3>31. Soy cauteloso/a a la hora de sacar conclusiones</h3>
				<input type="radio" name="ea31" id="si31" value="1">
				<label for="si31">Mas</label>

				<input type="radio" name="ea31" id="no31" value="0">
				<label for="no31">Menos</label>
			</div>

			<div class="radios">
				<h3>32. Prefiero contar con el mayor número de fuentes de información. Cuantos más datos reúna para reflexionar, mejor</h3>
				<input type="radio" name="ea32" id="si32" value="1">
				<label for="si32">Mas</label>

				<input type="radio" name="ea32" id="no32" value="0">
				<label for="no32">Menos</label>
			</div>

			<div class="radios">
				<h3>33. Tiendo a ser perfeccionista</h3>
				<input type="radio" name="ea33" id="si33" value="1">
				<label for="si33">Mas</label>

				<input type="radio" name="ea33" id="no33" value="0">
				<label for="no33">Menos</label>
			</div>

			<div class="radios">
				<h3>34. Prefiero oír las opiniones de los demás antes de exponer la mía</h3>
				<input type="radio" name="ea34" id="si34" value="1">
				<label for="si34">Mas</label>

				<input type="radio" name="ea34" id="no34" value="0">
				<label for="no34">Menos</label>
			</div>

			<div class="radios">
				<h3>35. Me gusta afrontar la vida espontáneamente y no tener que planificar todo previamente</h3>
				<input type="radio" name="ea35" id="si35" value="1">
				<label for="si35">Mas</label>

				<input type="radio" name="ea35" id="no35" value="0">
				<label for="no35">Menos</label>
			</div>

			<div class="radios">
				<h3>36. En las discusiones me gusta observar cómo actúan los demás participantes</h3>
				<input type="radio" name="ea36" id="si36" value="1">
				<label for="si36">Mas</label>

				<input type="radio" name="ea36" id="no36" value="0">
				<label for="no36">Menos</label>
			</div>

			<div class="radios">
				<h3>37. Me siento incómodo con las personas calladas y demasiado analíticas</h3>
				<input type="radio" name="ea37" id="si37" value="1">
				<label for="si37">Mas</label>

				<input type="radio" name="ea37" id="no37" value="0">
				<label for="no37">Menos</label>
			</div>

			<div class="radios">
				<h3>38. Juzgo con frecuencia las ideas de los demás por su valor práctico</h3>
				<input type="radio" name="ea38" id="si38" value="1">
				<label for="si38">Mas</label>

				<input type="radio" name="ea38" id="no38" value="0">
				<label for="no38">Menos</label>
			</div>

			<div class="radios">
				<h3>39. Me agobio si me obligan a acelerar mucho el trabajo para cumplir un plazo</h3>
				<input type="radio" name="ea39" id="si39" value="1">
				<label for="si39">Mas</label>

				<input type="radio" name="ea39" id="no39" value="0">
				<label for="no39">Menos</label>
			</div>

			<div class="radios">
				<h3>40. En las reuniones apoyo las ideas prácticas y realistas</h3>
				<input type="radio" name="ea40" id="si40" value="1">
				<label for="si40">Mas</label>

				<input type="radio" name="ea40" id="no40" value="0">
				<label for="no40">Menos</label>
			</div>

			<div class="radios">
				<h3>41. Es mejor gozar del momento presente que deleitarse pensando en el pasado o en el futuro</h3>
				<input type="radio" name="ea41" id="si41" value="1">
				<label for="si41">Mas</label>

				<input type="radio" name="ea41" id="no41" value="0">
				<label for="no41">Menos</label>
			</div>

			<div class="radios">
				<h3>42. Me molestan las personas que siempre desean apresurar las cosas</h3>
				<input type="radio" name="ea42" id="si42" value="1">
				<label for="si42">Mas</label>

				<input type="radio" name="ea42" id="no42" value="0">
				<label for="no42">Menos</label>
			</div>

			<div class="radios">
				<h3>43. Aporto ideas nuevas y espontáneas en los grupos de discusión</h3>
				<input type="radio" name="ea43" id="si43" value="1">
				<label for="si43">Mas</label>

				<input type="radio" name="ea43" id="no43" value="0">
				<label for="no43">Menos</label>
			</div>

			<div class="radios">
				<h3>44. Pienso que son más consistentes las decisiones fundamentadas en un minucioso análisis que las basadas en la intuición</h3>
				<input type="radio" name="ea44" id="si44" value="1">
				<label for="si44">Mas</label>

				<input type="radio" name="ea44" id="no44" value="0">
				<label for="no44">Menos</label>
			</div>

			<div class="radios">
				<h3>45. Detecto frecuentemente la inconsistencia y puntos débiles en las argumentaciones de los demás</h3>
				<input type="radio" name="ea45" id="si45" value="1">
				<label for="si45">Mas</label>

				<input type="radio" name="ea45" id="no45" value="0">
				<label for="no45">Menos</label>
			</div>

			<div class="radios">
				<h3>46. Creo que es preciso saltarse las normas muchas más veces que cumplirlas</h3>
				<input type="radio" name="ea46" id="si46" value="1">
				<label for="si46">Mas</label>

				<input type="radio" name="ea46" id="no46" value="0">
				<label for="no46">Menos</label>
			</div>

			<div class="radios">
				<h3>47. A menudo caigo en la cuenta de otras formas mejores y más prácticas de hacer las cosas</h3>
				<input type="radio" name="ea47" id="si47" value="1">
				<label for="si47">Mas</label>

				<input type="radio" name="ea47" id="no47" value="0">
				<label for="no47">Menos</label>
			</div>

			<div class="radios">
				<h3>48. En conjunto hablo más que escucho</h3>
				<input type="radio" name="ea48" id="si48" value="1">
				<label for="si48">Mas</label>

				<input type="radio" name="ea48" id="no48" value="0">
				<label for="no48">Menos</label>
			</div>

			<div class="radios">
				<h3>49. Prefiero distanciarme de los hechos y observarlos desde otras perspectivas</h3>
				<input type="radio" name="ea49" id="si49" value="1">
				<label for="si49">Mas</label>

				<input type="radio" name="ea49" id="no49" value="0">
				<label for="no49">Menos</label>
			</div>

			<div class="radios">
				<h3>50. Estoy convencido/a que debe imponerse la lógica y el razonamiento</h3>
				<input type="radio" name="ea50" id="si50" value="1">
				<label for="si50">Mas</label>

				<input type="radio" name="ea50" id="no50" value="0">
				<label for="no50">Menos</label>
			</div>

			<div class="radios">
				<h3>51. Me gusta buscar nuevas experiencias</h3>
				<input type="radio" name="ea51" id="si51" value="1">
				<label for="si51">Mas</label>

				<input type="radio" name="ea51" id="no51" value="0">
				<label for="no51">Menos</label>
			</div>

			<div class="radios">
				<h3>52. Me gusta experimentar y aplicar las cosas.</h3>
				<input type="radio" name="ea52" id="si52" value="1">
				<label for="si52">Mas</label>

				<input type="radio" name="ea52" id="no52" value="0">
				<label for="no52">Menos</label>
			</div>

			<div class="radios">
				<h3>53. Pienso que debemos llegar pronto al grano, al meollo de los temas</h3>
				<input type="radio" name="ea53" id="si53" value="1">
				<label for="si53">Mas</label>

				<input type="radio" name="ea53" id="no53" value="0">
				<label for="no53">Menos</label>
			</div>

			<div class="radios">
				<h3>54. Siempre trato de conseguir conclusiones e ideas claras</h3>
				<input type="radio" name="ea54" id="si54" value="1">
				<label for="si54">Mas</label>

				<input type="radio" name="ea54" id="no54" value="0">
				<label for="no54">Menos</label>
			</div>

			<div class="radios">
				<h3>55. Prefiero discutir cuestiones concretas y no perder el tiempo con charlas vacías</h3>
				<input type="radio" name="ea55" id="si55" value="1">
				<label for="si55">Mas</label>

				<input type="radio" name="ea55" id="no55" value="0">
				<label for="no55">Menos</label>
			</div>

			<div class="radios">
				<h3>56. Me impaciento con las argumentaciones irrelevantes e incoherentes en las reuniones</h3>
				<input type="radio" name="ea56" id="si56" value="1">
				<label for="si56">Mas</label>

				<input type="radio" name="ea56" id="no56" value="0">
				<label for="no56">Menos</label>
			</div>

			<div class="radios">
				<h3>57. Compruebo antes si las cosas funcionan realmente</h3>
				<input type="radio" name="ea57" id="si57" value="1">
				<label for="si57">Mas</label>

				<input type="radio" name="ea57" id="no57" value="0">
				<label for="no57">Menos</label>
			</div>

			<div class="radios">
				<h3>58. Hago varios borradores antes de la redacción definitiva de un trabajo</h3>
				<input type="radio" name="ea58" id="si58" value="1">
				<label for="si58">Mas</label>

				<input type="radio" name="ea58" id="no58" value="0">
				<label for="no58">Menos</label>
			</div>

			<div class="radios">
				<h3>59. Soy consciente de que en las discusiones ayudo a los demás a mantenerse centrados en el tema, evitando divagaciones</h3>
				<input type="radio" name="ea59" id="si59" value="1">
				<label for="si59">Mas</label>

				<input type="radio" name="ea59" id="no59" value="0">
				<label for="no59">Menos</label>
			</div>

			<div class="radios">
				<h3>60. Observo que, con frecuencia, soy uno de los más objetivos y desapasionados en las discusiones</h3>
				<input type="radio" name="ea60" id="si60" value="1">
				<label for="si60">Mas</label>

				<input type="radio" name="ea60" id="no60" value="0">
				<label for="no60">Menos</label>
			</div>

			<div class="radios">
				<h3>61. Cuando algo va mal, le quito importancia y trato de hacerlo mejor</h3>
				<input type="radio" name="ea61" id="si61" value="1">
				<label for="si61">Mas</label>

				<input type="radio" name="ea61" id="no61" value="0">
				<label for="no61">Menos</label>
			</div>

			<div class="radios">
				<h3>62. Rechazo ideas originales y espontáneas si no las veo prácticas</h3>
				<input type="radio" name="ea62" id="si62" value="1">
				<label for="si62">Mas</label>

				<input type="radio" name="ea62" id="no62" value="0">
				<label for="no62">Menos</label>
			</div>

			<div class="radios">
				<h3>63. Me gusta sopesar diversas alternativas antes de tomar una decisión</h3>
				<input type="radio" name="ea63" id="si63" value="1">
				<label for="si63">Mas</label>

				<input type="radio" name="ea63" id="no63" value="0">
				<label for="no63">Menos</label>
			</div>

			<div class="radios">
				<h3>64. Con frecuencia miro hacia adelante para prever el futuro</h3>
				<input type="radio" name="ea64" id="si64" value="1">
				<label for="si64">Mas</label>

				<input type="radio" name="ea64" id="no64" value="0">
				<label for="no64">Menos</label>
			</div>

			<div class="radios">
				<h3>65. En los debates prefiero desempeñar un papel secundario antes que ser el líder o el que más participa</h3>
				<input type="radio" name="ea65" id="si65" value="1">
				<label for="si65">Mas</label>

				<input type="radio" name="ea65" id="no65" value="0">
				<label for="no65">Menos</label>
			</div>

			<div class="radios">
				<h3>66. Me molestan las personas que no siguen un enfoque lógico</h3>
				<input type="radio" name="ea66" id="si66" value="1">
				<label for="si66">Mas</label>

				<input type="radio" name="ea66" id="no66" value="0">
				<label for="no66">Menos</label>
			</div>

			<div class="radios">
				<h3>67. Me resulta incómodo tener que planificar y prever las cosas</h3>
				<input type="radio" name="ea67" id="si67" value="1">
				<label for="si67">Mas</label>

				<input type="radio" name="ea67" id="no67" value="0">
				<label for="no67">Menos</label>
			</div>

			<div class="radios">
				<h3>68. Creo que el fin justifica los medios en muchos casos</h3>
				<input type="radio" name="ea68" id="si68" value="1">
				<label for="si68">Mas</label>

				<input type="radio" name="ea68" id="no68" value="0">
				<label for="no68">Menos</label>
			</div>

			<div class="radios">
				<h3>69. Suelo reflexionar sobre los asuntos y problemas</h3>
				<input type="radio" name="ea69" id="si69" value="1">
				<label for="si69">Mas</label>

				<input type="radio" name="ea69" id="no69" value="0">
				<label for="no69">Menos</label>
			</div>

			<div class="radios">
				<h3>70. El trabajar a conciencia me llena de satisfacción y orgullo</h3>
				<input type="radio" name="ea70" id="si70" value="1">
				<label for="si70">Mas</label>

				<input type="radio" name="ea70" id="no70" value="0">
				<label for="no70">Menos</label>
			</div>

			<div class="radios">
				<h3>71. Ante los acontecimientos trato de descubrir los principios y teorías en que se basan</h3>
				<input type="radio" name="ea71" id="si71" value="1">
				<label for="si71">Mas</label>

				<input type="radio" name="ea71" id="no71" value="0">
				<label for="no71">Menos</label>
			</div>

			<div class="radios">
				<h3>72. Con tal de conseguir el objetivo que pretendo soy capaz de herir sentimientos ajenos</h3>
				<input type="radio" name="ea72" id="si72" value="1">
				<label for="si72">Mas</label>

				<input type="radio" name="ea72" id="no72" value="0">
				<label for="no72">Menos</label>
			</div>

			<div class="radios">
				<h3>73. No me importa hacer todo lo necesario para que sea efectivo mi trabajo</h3>
				<input type="radio" name="ea73" id="si73" value="1">
				<label for="si73">Mas</label>

				<input type="radio" name="ea73" id="no73" value="0">
				<label for="no73">Menos</label>
			</div>

			<div class="radios">
				<h3>74. Con frecuencia soy una de las personas que más anima las fiestas.</h3>
				<input type="radio" name="ea74" id="si74" value="1">
				<label for="si74">Mas</label>

				<input type="radio" name="ea74" id="no74" value="0">
				<label for="no74">Menos</label>
			</div>

			<div class="radios">
				<h3>75. Me aburro enseguida con el trabajo metódico y minucioso</h3>
				<input type="radio" name="ea75" id="si75" value="1">
				<label for="si75">Mas</label>

				<input type="radio" name="ea75" id="no75" value="0">
				<label for="no75">Menos</label>
			</div>

			<div class="radios">
				<h3>76. La gente con frecuencia cree que soy poco sensible a sus sentimientos</h3>
				<input type="radio" name="ea76" id="si76" value="1">
				<label for="si76">Mas</label>

				<input type="radio" name="ea76" id="no76" value="0">
				<label for="no76">Menos</label>
			</div>

			<div class="radios">
				<h3>77. Suelo dejarme llevar por mis intuiciones</h3>
				<input type="radio" name="ea77" id="si77" value="1">
				<label for="si77">Mas</label>

				<input type="radio" name="ea77" id="no77" value="0">
				<label for="no77">Menos</label>
			</div>

			<div class="radios">
				<h3>78. Si trabajo en grupo procuro que se siga un método y un orden</h3>
				<input type="radio" name="ea78" id="si78" value="1">
				<label for="si78">Mas</label>

				<input type="radio" name="ea78" id="no78" value="0">
				<label for="no78">Menos</label>
			</div>

			<div class="radios">
				<h3>79. Con frecuencia me interesa averiguar lo que piensa la gente</h3>
				<input type="radio" name="ea79" id="si79" value="1">
				<label for="si79">Mas</label>

				<input type="radio" name="ea79" id="no79" value="0">
				<label for="no79">Menos</label>
			</div>

			<div class="radios">
				<h3>80. Esquivo los temas subjetivos, ambiguos y poco claros</h3>
				<input type="radio" name="ea80" id="si80" value="1">
				<label for="si80">Mas</label>

				<input type="radio" name="ea80" id="no80" value="0">
				<label for="no80">Menos</label>
			</div>

			<div class="form-group">	
				<input type="submit" class="btn btn-defualt center-block">
			</div>
 
<br>
<br>
<br>
	

		</form>

	</div>

	<script>
		function make_json(form){

			var verificar = true;
			var si = document.getElementById('si1').checked;
			var no = document.getElementById('no1').checked;

			if(!si && !no){
				alert("Completa la pregunta 1");
				verificar = false;
				si.focus();
			}

			var verificar = true;
			si = document.getElementById('si2').checked;
			no = document.getElementById('no2').checked;

			if(!si && !no){
				alert("Completa la pregunta 2");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si3').checked;
			no = document.getElementById('no3').checked;

			if(!si && !no){
				alert("Completa la pregunta 3");
				verificar = false;
				si.focus();
			}

			
			si = document.getElementById('si4').checked;
			no = document.getElementById('no4').checked;

			if(!si && !no){
				alert("Completa la pregunta 4");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si5').checked;
			no = document.getElementById('no5').checked;

			if(!si && !no){
				alert("Completa la pregunta 5");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si6').checked;
			no = document.getElementById('no6').checked;

			if(!si && !no){
				alert("Completa la pregunta 6");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si7').checked;
			no = document.getElementById('no7').checked;

			if(!si && !no){
				alert("Completa la pregunta 7");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si8').checked;
			no = document.getElementById('no8').checked;

			if(!si && !no){
				alert("Completa la pregunta 8");
				verificar = false;
				si.focus();
			}

			si = document.getElementById('si9').checked;
			no = document.getElementById('no9').checked;

			if(!si && !no){
				alert("Completa la pregunta 9");
				verificar = false;
				si.focus();
			}

			si = document.getElementById('si10').checked;
			no = document.getElementById('no10').checked;

			if(!si && !no){
				alert("Completa la pregunta 10");
				verificar = false;
				si.focus();
			}

			si = document.getElementById('si11').checked;
			no = document.getElementById('no11').checked;

			if(!si && !no){
				alert("Completa la pregunta 11");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si12').checked;
			no = document.getElementById('no12').checked;

			if(!si && !no){
				alert("Completa la pregunta 12");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si13').checked;
			no = document.getElementById('no13').checked;

			if(!si && !no){
				alert("Completa la pregunta 13");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si14').checked;
			no = document.getElementById('no14').checked;

			if(!si && !no){
				alert("Completa la pregunta 14");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si15').checked;
			no = document.getElementById('no15').checked;

			if(!si && !no){
				alert("Completa la pregunta 15");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si16').checked;
			no = document.getElementById('no16').checked;

			if(!si && !no){
				alert("Completa la pregunta 16");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si17').checked;
			no = document.getElementById('no17').checked;

			if(!si && !no){
				alert("Completa la pregunta 17");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si18').checked;
			no = document.getElementById('no18').checked;

			if(!si && !no){
				alert("Completa la pregunta 18");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si19').checked;
			no = document.getElementById('no19').checked;

			if(!si && !no){
				alert("Completa la pregunta 19");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si20').checked;
			no = document.getElementById('no20').checked;

			if(!si && !no){
				alert("Completa la pregunta 20");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si21').checked;
			no = document.getElementById('no21').checked;

			if(!si && !no){
				alert("Completa la pregunta 21");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si22').checked;
			no = document.getElementById('no22').checked;

			if(!si && !no){
				alert("Completa la pregunta 22");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si23').checked;
			no = document.getElementById('no23').checked;

			if(!si && !no){
				alert("Completa la pregunta 23");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si24').checked;
			no = document.getElementById('no24').checked;

			if(!si && !no){
				alert("Completa la pregunta 24");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si25').checked;
			no = document.getElementById('no25').checked;

			if(!si && !no){
				alert("Completa la pregunta 25");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si26').checked;
			no = document.getElementById('no26').checked;

			if(!si && !no){
				alert("Completa la pregunta 26");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si27').checked;
			no = document.getElementById('no27').checked;

			if(!si && !no){
				alert("Completa la pregunta 27");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si28').checked;
			no = document.getElementById('no28').checked;

			if(!si && !no){
				alert("Completa la pregunta 28");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si29').checked;
			no = document.getElementById('no29').checked;

			if(!si && !no){
				alert("Completa la pregunta 29");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si30').checked;
			no = document.getElementById('no30').checked;

			if(!si && !no){
				alert("Completa la pregunta 30");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si31').checked;
			no = document.getElementById('no31').checked;

			if(!si && !no){
				alert("Completa la pregunta 31");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si32').checked;
			no = document.getElementById('no32').checked;

			if(!si && !no){
				alert("Completa la pregunta 32");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si33').checked;
			no = document.getElementById('no33').checked;

			if(!si && !no){
				alert("Completa la pregunta 33");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si34').checked;
			no = document.getElementById('no34').checked;

			if(!si && !no){
				alert("Completa la pregunta 34");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si35').checked;
			no = document.getElementById('no35').checked;

			if(!si && !no){
				alert("Completa la pregunta 35");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si36').checked;
			no = document.getElementById('no36').checked;

			if(!si && !no){
				alert("Completa la pregunta 36");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si37').checked;
			no = document.getElementById('no37').checked;

			if(!si && !no){
				alert("Completa la pregunta 37");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si38').checked;
			no = document.getElementById('no38').checked;

			if(!si && !no){
				alert("Completa la pregunta 38");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si39').checked;
			no = document.getElementById('no39').checked;

			if(!si && !no){
				alert("Completa la pregunta 39");
				verificar = false;
				si.focus();
			}
	
			si = document.getElementById('si40').checked;
			no = document.getElementById('no40').checked;

			if(!si && !no){
				alert("Completa la pregunta 40");
				verificar = false;
				si.focus();
			}


			si = document.getElementById('si41').checked;
			no = document.getElementById('no41').checked;

			if(!si && !no){
				alert("Completa la pregunta 41");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si42').checked;
			no = document.getElementById('no42').checked;

			if(!si && !no){
				alert("Completa la pregunta 42");
				verificar = false;
				si.focus();
			}
	
			si = document.getElementById('si43').checked;
			no = document.getElementById('no43').checked;

			if(!si && !no){
				alert("Completa la pregunta 43");
				verificar = false;
				si.focus();
			}

			si = document.getElementById('si44').checked;
			no = document.getElementById('no44').checked;

			if(!si && !no){
				alert("Completa la pregunta 44");
				verificar = false;
				si.focus();
			}
			var verificar = true;
			si = document.getElementById('si45').checked;
			no = document.getElementById('no45').checked;

			if(!si && !no){
				alert("Completa la pregunta 45");
				verificar = false;
				si.focus();
			}
			var verificar = true;
			si = document.getElementById('si46').checked;
			no = document.getElementById('no46').checked;

			if(!si && !no){
				alert("Completa la pregunta 46");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si47').checked;
			no = document.getElementById('no47').checked;

			if(!si && !no){
				alert("Completa la pregunta 47");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si48').checked;
			no = document.getElementById('no48').checked;

			if(!si && !no){
				alert("Completa la pregunta 48");
				verificar = false;
				si.focus();
			}

			
			si = document.getElementById('si49').checked;
			no = document.getElementById('no49').checked;

			if(!si && !no){
				alert("Completa la pregunta 49");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si50').checked;
			no = document.getElementById('no50').checked;

			if(!si && !no){
				alert("Completa la pregunta 50");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si51').checked;
			no = document.getElementById('no51').checked;

			if(!si && !no){
				alert("Completa la pregunta 51");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si52').checked;
			no = document.getElementById('no52').checked;

			if(!si && !no){
				alert("Completa la pregunta 52");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si53').checked;
			no = document.getElementById('no53').checked;

			if(!si && !no){
				alert("Completa la pregunta 53");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si54').checked;
			no = document.getElementById('no54').checked;

			if(!si && !no){
				alert("Completa la pregunta 54");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si55').checked;
			no = document.getElementById('no55').checked;

			if(!si && !no){
				alert("Completa la pregunta 55");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si56').checked;
			no = document.getElementById('no56').checked;

			if(!si && !no){
				alert("Completa la pregunta 56");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si57').checked;
			no = document.getElementById('no57').checked;

			if(!si && !no){
				alert("Completa la pregunta 57");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si58').checked;
			no = document.getElementById('no58').checked;

			if(!si && !no){
				alert("Completa la pregunta 58");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si59').checked;
			no = document.getElementById('no59').checked;

			if(!si && !no){
				alert("Completa la pregunta 59");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si60').checked;
			no = document.getElementById('no60').checked;

			if(!si && !no){
				alert("Completa la pregunta 60");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si61').checked;
			no = document.getElementById('no61').checked;

			if(!si && !no){
				alert("Completa la pregunta 61");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si62').checked;
			no = document.getElementById('no62').checked;

			if(!si && !no){
				alert("Completa la pregunta 62");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si63').checked;
			no = document.getElementById('no63').checked;

			if(!si && !no){
				alert("Completa la pregunta 63");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si64').checked;
			no = document.getElementById('no64').checked;

			if(!si && !no){
				alert("Completa la pregunta 64");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si65').checked;
			no = document.getElementById('no65').checked;

			if(!si && !no){
				alert("Completa la pregunta 65");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si66').checked;
			no = document.getElementById('no66').checked;

			if(!si && !no){
				alert("Completa la pregunta 66");
				verificar = false;
				si.focus();
			}
		
			si = document.getElementById('si67').checked;
			no = document.getElementById('no67').checked;

			if(!si && !no){
				alert("Completa la pregunta 67");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si68').checked;
			no = document.getElementById('no68').checked;

			if(!si && !no){
				alert("Completa la pregunta 68");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si69').checked;
			no = document.getElementById('no69').checked;

			if(!si && !no){
				alert("Completa la pregunta 69");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si70').checked;
			no = document.getElementById('no70').checked;

			if(!si && !no){
				alert("Completa la pregunta 70");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si71').checked;
			no = document.getElementById('no71').checked;

			if(!si && !no){
				alert("Completa la pregunta 71");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si72').checked;
			no = document.getElementById('no72').checked;

			if(!si && !no){
				alert("Completa la pregunta 72");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si73').checked;
			no = document.getElementById('no73').checked;

			if(!si && !no){
				alert("Completa la pregunta 73");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si74').checked;
			no = document.getElementById('no74').checked;

			if(!si && !no){
				alert("Completa la pregunta 74");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si75').checked;
			no = document.getElementById('no75').checked;

			if(!si && !no){
				alert("Completa la pregunta 75");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si76').checked;
			no = document.getElementById('no76').checked;

			if(!si && !no){
				alert("Completa la pregunta 76");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si77').checked;
			no = document.getElementById('no77').checked;

			if(!si && !no){
				alert("Completa la pregunta 77");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si78').checked;
			no = document.getElementById('no78').checked;

			if(!si && !no){
				alert("Completa la pregunta 78");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si79').checked;
			no = document.getElementById('no79').checked;

			if(!si && !no){
				alert("Completa la pregunta 79");
				verificar = false;
				si.focus();
			}
			
			si = document.getElementById('si80').checked;
			no = document.getElementById('no80').checked;
				if(!si && !no){
				alert("Completa la pregunta 80");
				verificar = false;
				si.focus();
			}
			

				

			var activo = {
				"pregunta3":form.ea3.value,
				"pregunta5":form.ea5.value,
				"pregunta7":form.ea7.value,
				"pregunta9":form.ea9.value,
				"pregunta13":form.ea13.value,
				"pregunta20":form.ea20.value,
				"pregunta26":form.ea26.value,
				"pregunta27":form.ea27.value,
				"pregunta35":form.ea35.value,
				"pregunta37":form.ea37.value,
				"pregunta41":form.ea41.value,
				"pregunta43":form.ea43.value,
				"pregunta46":form.ea46.value,
				"pregunta48":form.ea48.value,
				"pregunta51":form.ea51.value,
				"pregunta61":form.ea61.value,
				"pregunta67":form.ea67.value,
				"pregunta74":form.ea74.value,
				"pregunta75":form.ea75.value,
				"pregunta77":form.ea77.value
			};

			var reflexivo = {
				"pregunta10":form.ea10.value,
				"pregunta16":form.ea16.value,
				"pregunta18":form.ea18.value,
				"pregunta19":form.ea19.value,
				"pregunta28":form.ea28.value,
				"pregunta31":form.ea31.value,
				"pregunta32":form.ea32.value,
				"pregunta34":form.ea34.value,
				"pregunta36":form.ea36.value,
				"pregunta39":form.ea39.value,
				"pregunta42":form.ea42.value,
				"pregunta44":form.ea44.value,
				"pregunta49":form.ea49.value,
				"pregunta55":form.ea55.value,
				"pregunta58":form.ea58.value,
				"pregunta63":form.ea63.value,
				"pregunta65":form.ea65.value,
				"pregunta69":form.ea69.value,
				"pregunta70":form.ea70.value,
				"pregunta79":form.ea79.value

			};

			var teorico = {
				"pregunta2":form.ea2.value,
				"pregunta4":form.ea4.value,
				"pregunta6":form.ea6.value,
				"pregunta11":form.ea11.value,
				"pregunta15":form.ea15.value,
				"pregunta17":form.ea17.value,
				"pregunta21":form.ea21.value,
				"pregunta23":form.ea23.value,
				"pregunta25":form.ea25.value,
				"pregunta29":form.ea29.value,
				"pregunta33":form.ea33.value,
				"pregunta45":form.ea45.value,
				"pregunta50":form.ea50.value,
				"pregunta54":form.ea54.value,
				"pregunta60":form.ea60.value,
				"pregunta64":form.ea64.value,
				"pregunta66":form.ea66.value,
				"pregunta71":form.ea71.value,
				"pregunta78":form.ea78.value,
				"pregunta80":form.ea80.value
			};

			var pragmatico = {
				"pregunta1":form.ea1.value,
				"pregunta8":form.ea8.value,
				"pregunta12":form.ea12.value,
				"pregunta14":form.ea14.value,
				"pregunta22":form.ea22.value,
				"pregunta24":form.ea24.value,
				"pregunta30":form.ea30.value,
				"pregunta38":form.ea38.value,
				"pregunta40":form.ea40.value,
				"pregunta47":form.ea47.value,
				"pregunta52":form.ea52.value,
				"pregunta53":form.ea53.value,
				"pregunta56":form.ea56.value,
				"pregunta57":form.ea57.value,
				"pregunta59":form.ea59.value,
				"pregunta62":form.ea62.value,
				"pregunta68":form.ea68.value,
				"pregunta72":form.ea72.value,
				"pregunta73":form.ea73.value,
				"pregunta76":form.ea76.value
			};

		

			var activoArray = parseInt(activo.pregunta3) + parseInt(activo.pregunta5) + parseInt(activo.pregunta7) + parseInt(activo.pregunta9) + parseInt(activo.pregunta13) + parseInt(activo.pregunta20) + parseInt(activo.pregunta26) + parseInt(activo.pregunta27) + parseInt(activo.pregunta35) + parseInt(activo.pregunta37) + parseInt(activo.pregunta41) + parseInt(activo.pregunta43) + parseInt(activo.pregunta46) + parseInt(activo.pregunta48) + parseInt(activo.pregunta51) + parseInt(activo.pregunta61) + parseInt(activo.pregunta67) + parseInt(activo.pregunta74) + parseInt(activo.pregunta75) + parseInt(activo.pregunta77);
	

			var reflexivoArray = parseInt(reflexivo.pregunta10) + parseInt(reflexivo.pregunta16) + parseInt(reflexivo.pregunta18) + parseInt(reflexivo.pregunta19) + parseInt(reflexivo.pregunta28) + parseInt(reflexivo.pregunta31) + parseInt(reflexivo.pregunta32) + parseInt(reflexivo.pregunta34) + parseInt(reflexivo.pregunta36) + parseInt(reflexivo.pregunta39) + parseInt(reflexivo.pregunta42) + parseInt(reflexivo.pregunta44) + parseInt(reflexivo.pregunta49) + parseInt(reflexivo.pregunta55) + parseInt(reflexivo.pregunta58) + parseInt(reflexivo.pregunta63) + parseInt(reflexivo.pregunta65) + parseInt(reflexivo.pregunta69) + parseInt(reflexivo.pregunta70) + parseInt(reflexivo.pregunta79);

	

			var teoricoArray = parseInt(teorico.pregunta2) + parseInt(teorico.pregunta4) + parseInt(teorico.pregunta6) + parseInt(teorico.pregunta11) + parseInt(teorico.pregunta15) + parseInt(teorico.pregunta17) + parseInt(teorico.pregunta21) + parseInt(teorico.pregunta23) + parseInt(teorico.pregunta25) + parseInt(teorico.pregunta29) + parseInt(teorico.pregunta33) + parseInt(teorico.pregunta45) + parseInt(teorico.pregunta50) + parseInt(teorico.pregunta54) + parseInt(teorico.pregunta60) + parseInt(teorico.pregunta64) + parseInt(teorico.pregunta66) + parseInt(teorico.pregunta71) + parseInt(teorico.pregunta78) + parseInt(teorico.pregunta80);
		

			var pragmaticoArray = parseInt(pragmatico.pregunta1) + parseInt(pragmatico.pregunta8) + parseInt(pragmatico.pregunta12) + parseInt(pragmatico.pregunta14) + parseInt(pragmatico.pregunta22) + parseInt(pragmatico.pregunta24) + parseInt(pragmatico.pregunta30) + parseInt(pragmatico.pregunta38) + parseInt(pragmatico.pregunta40) + parseInt(pragmatico.pregunta47) + parseInt(pragmatico.pregunta52) + parseInt(pragmatico.pregunta53) + parseInt(pragmatico.pregunta56) + parseInt(pragmatico.pregunta57) + parseInt(pragmatico.pregunta59) + parseInt(pragmatico.pregunta62) + parseInt(pragmatico.pregunta68) + parseInt(pragmatico.pregunta72) + parseInt(pragmatico.pregunta73) + parseInt(pragmatico.pregunta76);

	
			var muybajo = "Muy Bajo";
			var bajo = "Bajo";
			var moderado = "Alto";
			var alto = "Alto"
			var muyalto = "Muy Alto";

			var res_activo = "";
			var res_reflexivo = "";
			var res_teorico = "";
			var res_pragmatico = "";
			

//Activo
			if (activoArray <= 6) {
				res_activo = muybajo;
			}
			else if (activoArray >= 7 && activoArray <= 8) {
				res_activo = bajo;
			}

			else if (activoArray >= 9 && activoArray <= 12) {
				res_activo = moderado;
			}

			else if (activoArray >= 13 && activoArray <=14) {
				res_activo = alto;
			}

			else if (activoArray >= 15 && activoArray <=20) {
				res_activo = muyalto;
			}

//Reflexivo
			if (reflexivoArray <= 10) {
				res_reflexivo = muybajo;
			}
			else if (reflexivoArray >= 11 && reflexivoArray <= 13) {
				res_reflexivo = bajo;
			}

			else if (reflexivoArray >= 14 && reflexivoArray <= 17) {
				res_reflexivo = moderado;
			}

			else if (reflexivoArray >= 18 && reflexivoArray <=19) {
				res_reflexivo = alto;
			}

			else if (reflexivoArray  <= 20) {
				res_reflexivo = muyalto;
			}

//Teorico

			if (teoricoArray <= 6) {
				res_teorico = muybajo;
			}
			else if (teoricoArray >= 7 && teoricoArray <= 9) {
				res_teorico = bajo;
			}

			else if (teoricoArray >= 10 && teoricoArray <= 13) {
				res_teorico = moderado;
			}

			else if (teoricoArray >= 14 && teoricoArray <=15) {
				res_teorico = alto;
			}

			else if (teoricoArray >= 16 && teoricoArray <=20) {
				res_teorico = muyalto;
			}

//Pragmatico

			if (pragmaticoArray <= 8) {
				res_pragmatico = muybajo;
			}
			else if (pragmaticoArray >= 9 && pragmaticoArray <= 10) {
				res_pragmatico = bajo;
			}

			else if (pragmaticoArray >= 11 && pragmaticoArray <= 13) {
				res_pragmatico = moderado;
			}

			else if (pragmaticoArray >= 14 && pragmaticoArray <=15) {
				res_pragmatico = alto;
			}

			else if (pragmaticoArray >= 16 && pragmaticoArray <=20) {
				res_pragmatico = muyalto;
			}

/*
			document.write("El resultado de activo: "+res_activo);
			document.write("El resultado de activo: "+res_reflexivo);
			document.write("El resultado de activo: "+res_teorico);
			document.write("El resultado de activo: "+res_pragmatico);

*/



	 window.location = "recibe4.php?resulacti="+res_activo+"&resulrefle="+res_reflexivo+"&resulteo="+res_teorico+"&resulpagma="+res_pragmatico;
/*		
			var html = JSON.stringify(pragmatico,0,6);
			document.getElementById('output').innerHTML = html;

	document.write("Total Activo " + activoArray);
	document.write("Total Reflexivo " + reflexivoArray);
	document.write("Total Teorico " + teoricoArray);
	document.write("Total Pagmatico " + pragmaticoArray);

*/

			return false;
		}
	</script>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
