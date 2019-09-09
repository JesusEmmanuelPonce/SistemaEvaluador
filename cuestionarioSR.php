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
	<title>Cuestionario SR</title>
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
	<script> 

		function suma(){

			var verificar = true;
			var activo = document.getElementById('activo1').checked;
			var auditivo = document.getElementById('auditivo1').checked;
			var kinestesico = document.getElementById('kinestesico1').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 1");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo2').checked;
			auditivo = document.getElementById('auditivo2').checked;
			kinestesico = document.getElementById('kinestesico2').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 2");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo3').checked;
			auditivo = document.getElementById('auditivo3').checked;
			kinestesico = document.getElementById('kinestesico3').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 3");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo4').checked;
			auditivo = document.getElementById('auditivo4').checked;
			kinestesico = document.getElementById('kinestesico4').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 4");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo5').checked;
			auditivo = document.getElementById('auditivo5').checked;
			kinestesico = document.getElementById('kinestesico5').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 5");
				verificar = false;
				activo.focus();
			}


			activo = document.getElementById('activo6').checked;
			auditivo = document.getElementById('auditivo6').checked;
			kinestesico = document.getElementById('kinestesico6').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 6");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo7').checked;
			auditivo = document.getElementById('auditivo7').checked;
			kinestesico = document.getElementById('kinestesico7').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 7");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo8').checked;
			auditivo = document.getElementById('auditivo8').checked;
			kinestesico = document.getElementById('kinestesico8').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 8");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo9').checked;
			auditivo = document.getElementById('auditivo9').checked;
			kinestesico = document.getElementById('kinestesico9').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 9");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo10').checked;
			auditivo = document.getElementById('auditivo10').checked;
			kinestesico = document.getElementById('kinestesico10').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 10");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo11').checked;
			auditivo = document.getElementById('auditivo11').checked;
			kinestesico = document.getElementById('kinestesico11').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 11");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo12').checked;
			auditivo = document.getElementById('auditivo12').checked;
			kinestesico = document.getElementById('kinestesico12').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 12");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo13').checked;
			auditivo = document.getElementById('auditivo13').checked;
			kinestesico = document.getElementById('kinestesico13').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 13");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo14').checked;
			auditivo = document.getElementById('auditivo14').checked;
			kinestesico = document.getElementById('kinestesico14').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 14");
				verificar = false;
				activo.focus();
			}

			activo = document.getElementById('activo15').checked;
			auditivo = document.getElementById('auditivo15').checked;
			kinestesico = document.getElementById('kinestesico15').checked;

			if(!activo && !auditivo && !kinestesico){
				alert("Completa la pregunta 15");
				verificar = false;
				activo.focus();
			}
		



		var a = 0;
		var b = 0;
		var c = 0;


		//Pregunta 1------------------------------------------
		if (document.formularioSR.sr1[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr1[1].checked){
			b++;
		}

		else if(document.formularioSR.sr1[2].checked){
			c++;
		}

		//Pregunta 2------------------------------------------
		if (document.formularioSR.sr2[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr2[1].checked){
			b++;
		}

		else if(document.formularioSR.sr2[2].checked){
			c++;
		}
		//Pregunta 3------------------------------------------
		if (document.formularioSR.sr3[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr3[1].checked){
			b++;
		}

		else if(document.formularioSR.sr3[2].checked){
			c++;
		}
		//Pregunta 4------------------------------------------
		if (document.formularioSR.sr4[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr4[1].checked){
			b++;
		}

		else if(document.formularioSR.sr4[2].checked){
			c++;
		}
		//Pregunta 5------------------------------------------
		if (document.formularioSR.sr5[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr5[1].checked){
			b++;
		}

		else if(document.formularioSR.sr5[2].checked){
			c++;
		}
		//Pregunta 6------------------------------------------
		if (document.formularioSR.sr6[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr6[1].checked){
			b++;
		}

		else if(document.formularioSR.sr6[2].checked){
			c++;
		}
		//Pregunta 7------------------------------------------
		if (document.formularioSR.sr7[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr7[1].checked){
			b++;
		}

		else if(document.formularioSR.sr7[2].checked){
			c++;
		}
		//Pregunta 8------------------------------------------
		if (document.formularioSR.sr8[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr8[1].checked){
			b++;
		}

		else if(document.formularioSR.sr8[2].checked){
			c++;
		}
		//Pregunta 9------------------------------------------
		if (document.formularioSR.sr9[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr9[1].checked){
			b++;
		}

		else if(document.formularioSR.sr9[2].checked){
			c++;
		}
		//Pregunta 10------------------------------------------
		if (document.formularioSR.sr10[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr10[1].checked){
			b++;
		}

		else if(document.formularioSR.sr10[2].checked){
			c++;
		}
		//Pregunta 11------------------------------------------
		if (document.formularioSR.sr11[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr11[1].checked){
			b++;
		}

		else if(document.formularioSR.sr11[2].checked){
			c++;
		}
		//Pregunta 12------------------------------------------
		if (document.formularioSR.sr12[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr12[1].checked){
			b++;
		}

		else if(document.formularioSR.sr12[2].checked){
			c++;
		}
		//Pregunta 13------------------------------------------
		if (document.formularioSR.sr13[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr13[1].checked){
			b++;
		}

		else if(document.formularioSR.sr13[2].checked){
			c++;
		}
		//Pregunta 14------------------------------------------
		if (document.formularioSR.sr14[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr14[1].checked){
			b++;
		}

		else if(document.formularioSR.sr14[2].checked){
			c++;
		}
		//Pregunta 15------------------------------------------
		if (document.formularioSR.sr15[0].checked) {
			a++;
		}

		else if(document.formularioSR.sr15[1].checked){
			b++;
		}

		else if(document.formularioSR.sr15[2].checked){
			c++;
		}

		var resultadoA = ((a * 100) / 15); 
		var resultadoB = ((b * 100) / 15);
		var resultadoC = ((c * 100) / 15);
/*
		alert(resultadoA + " %");
		alert(resultadoB + " %");
		alert(resultadoC + " %");
*/
			var fxresultadoA = resultadoA.toFixed();
			var fxresultadoB = resultadoB.toFixed();
			var fxresultadoC = resultadoC.toFixed();



		window.location = "recibe2.php?resula=" + fxresultadoA + "&resulb=" + fxresultadoB + "&resulc=" + fxresultadoC;
		}

</script> 



</head>
<body>

<body>
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Cuestionaro SR</h1>
	    <p class="lead">Dev 4</p>
	  </div>
	</div>

	<div class="container">
			<!--Modal instrucciones-->
			<a href="menu.php"><input type="button" id="salir-btn"  class="btn btn-default" value="Menu"></a>
			<br><br>
			
	<a href="#ventana" class="btn btn-primary" id="instrucciones-btn" data-toggle="modal"> Instrucciones </a>
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
		<br>
		<br>
		<a href="salir.php"><input type="button" id="salir-btn"  class="btn btn-danger" value="Salir"></a>
		<div class="wrap">
			<form action="javascript:suma()" method="get" class="formulario" name="formularioSR" >
			<div class="radios">
				<h3>1. Me gusta cualquier lugar en que…</h3>
				<input type="radio" name="sr1" id="activo1" value="a" >
				<label for="activo1">A) Hay cosas que ver y personas que observar</label>
				<br>

				<input type="radio" name="sr1" id="auditivo1" value="b" >
				<label for="auditivo1">B) Hay música, temas de que platicar o silencio</label>
				<br>

				<input type="radio" name="sr1" id="kinestesico1" value="c" >
				<label for="kinestesico1">C) Hay suficiente espacio para moverse</label>
				<br>
			</div>

			<div class="radios">
				<h3>2. Disfruto los libros y las revistas que…</h3>
				<input type="radio" name="sr2" id="activo2" value="a">
				<label for="activo2">A) Tienen muchas fotos</label>
				<br>

				<input type="radio" name="sr2" id="auditivo2" value="b">
				<label for="auditivo2">B) Discuten tópicos interesantes</label>
				<br>

				<input type="radio" name="sr2" id="kinestesico2" value="c">
				<label for="kinestesico2">C) Que cubren noticias sobre deportes, actividades o manualidades</label>
				<br>
			</div>

			<div class="radios">
				<h3>3. Cuando tengo tiempo libre prefiero…</h3>
				<input type="radio" name="sr3" id="activo3" value="a">
				<label for="activo3">A) Ver la televisión</label>
				<br>
				
				<input type="radio" name="sr3" id="auditivo3" value="b">
				<label for="auditivo3">B) Escuchar música, radio o leer libros</label>
				<br>
				
				<input type="radio" name="sr3" id="kinestesico3" value="c">
				<label for="kinestesico3">C) Hacer algo de ejercicio físico, de atletismo o usar mis manos</label>
				<br>
			</div>

			<div class="radios">
				<h3>4. Cuando estoy hablando con alguien… </h3>
				<input type="radio" name="sr4" id="activo4"  value="a">
				<label for="activo4">A) Trato de ver lo que me esta diciendo</label>
				<br>

				<input type="radio" name="sr4" id="auditivo4" value="b">
				<label for="auditivo4">B) Escucho con detenimiento para que pueda oír lo que tiene que tiene que decir  </label>
				<br>

				<input type="radio" name="sr4" id="kinestesico4" value="c">
				<label for="kinestesico4">C) Trato de entrar en contacto con lo que me está diciendo</label>
				<br>
			</div>

			<div class="radios">
				<h3>5. Aprendo más fácilmente cuando…</h3>
				<input type="radio" name="sr5" id="activo5" value="a">
				<label for="activo5">A) Veo a alguien demostrando lo que tengo que hacer</label>
				<br>
				
				<input type="radio" name="sr5" id="auditivo5" value="b">
				<label for="auditivo5">B) Recibo instrucciones verbales</label>
				<br>

				<input type="radio" name="sr5" id="kinestesico5" value="c">
				<label for="kinestesico5">C) Lo hago con mis propias manos</label>
				<br>
			</div>

			<div class="radios">
				<h3>6. Cuando soluciono problemas…</h3>
				<input type="radio" name="sr6" id="activo6" value="a">
				<label for="activo6">A) Sigo mirando alternativas hasta que las piezas encajan</label>
				<br>
				
				<input type="radio" name="sr6" id="auditivo6" value="b">
				<label for="auditivo6">B) Hablo acerca de nuevos avances hasta que algo hace “click”</label>
				<br>
				
				<input type="radio" name="sr6" id="kinestesico6" value="c">
				<label for="kinestesico6">C) Armo las posibilidades, las junto hasta sentir que estoy en balance</label>
				<br>
			</div>

			<div class="radios">
				<h3>7. Lo que noto inmediatamente de las personas es… </h3>
				<input type="radio" name="sr7" id="activo7" value="a">
				<label for="activo7">A) Como se les ve la ropa</label>
				<br>
				
				<input type="radio" name="sr7" id="auditivo7" value="b">
				<label for="auditivo7">B) Como es su tono de voz cuando hablan</label>
				<br>
				
				<input type="radio" name="sr7" id="kinestesico7" value="c">
				<label for="kinestesico7">C) Como se mueven</label>
				<br>
			</div>

			<div class="radios">
				<h3>8. Cuando tengo muchas cosas que hacer… </h3>
				<input type="radio" name="sr8" id="activo8" value="a">
				<label for="activo8">A) Hago una lista de lo que voy a hacer o me imagino haciéndolo</label>
				<br>
				
				<input type="radio" name="sr8" id="auditivo8" value="b">
				<label for="auditivo8">B) Me estoy recordando que cosas tengo que hacer</label>
				<br>
				
				<input type="radio" name="sr8" id="kinestesico8" value="c">
				<label for="kinestesico8">C) Me siento incómodo hasta que casi todas las cosas están hechas</label>
				<br>
			</div>

			<div class="radios">
				<h3>9. Cuando empiezo a conocer por primera vez una ciudad tiendo a… </h3>
				<input type="radio" name="sr9" id="activo9" value="a">
				<label for="activo9">A) Usar un mapa</label>
				<br>
				
				<input type="radio" name="sr9" id="auditivo9" value="b">
				<label for="auditivo9">B) Preguntar donde  están los lugares que quiero visitar</label>
				<br>
				
				<input type="radio" name="sr9" id="kinestesico9" value="c">
				<label for="kinestesico9">C) Confío en mis sensaciones acerca de qué camino tomar</label>
				<br>
			</div>

			<div class="radios">
				<h3>10. Si recuerdas ahora mismo una experiencia feliz. ¿Qué viene primero a tu memoria?</h3>
				<input type="radio" name="sr10" id="activo10" value="a">
				<label for="activo10">A) El lugar, cosas y personas que viste</label>
				<br>
				
				<input type="radio" name="sr10" id="auditivo10" value="b">
				<label for="auditivo10">B) Las voces, música, canto de pájaros o sonidos que escuchaste</label>
				<br>
				
				<input type="radio" name="sr10" id="kinestesico10" value="c">
				<label for="kinestesico10">C) Las sensaciones y emociones que allí sentiste</label>
				<br>
			</div>

			<div class="radios">
				<h3>11. Cuando se me asigna un trabajo, lo entiendo y ejecuto bien si:</h3>
				<input type="radio" name="sr11" id="activo11" value="a">
				<label for="activo11">A) Está escrito o dibujado</label>
				<br>
				
				<input type="radio" name="sr11" id="auditivo11" value="b">
				<label for="auditivo11">B) Escucho claramente la explicación</label>
				<br>
				
				<input type="radio" name="sr11" id="kinestesico11" value="c">
				<label for="kinestesico11">C) Tengo la sensación de entender y la seguridad de saber hacerlo</label>
				<br>
			</div>

			<div class="radios">
				<h3>12. Cuando voy a la playa lo primero que me hace feliz al estar allí es:</h3>
				<input type="radio" name="sr12" id="activo12" value="a">
				<label for="activo12">A) Ver la arena, los rayos del sol, el azul transparente de del agua</label>
				<br>
				
				<input type="radio" name="sr12" id="auditivo12" value="b">
				<label for="auditivo12">B) El sonido de las olas, el murmullo del viento y el canto de las aves</label>
				<br>
				
				<input type="radio" name="sr12" id="kinestesico12" value="c">
				<label for="kinestesico12">C) Sentir la arena, la caricia de la brisa en mi piel, la serenidad y el gozo ante la inmensidad del mar</label>
				<br>
			</div>

			<div class="radios">
				<h3>13. Al pensar en una persona que amo lo primero que hago es:</h3>
				<input type="radio" name="sr13" id="activo13" value="a">
				<label for="activo13">A) Ver en mi mente su rostro y figura</label>
				<br>
				
				<input type="radio" name="sr13" id="auditivo13" value="b">
				<label for="auditivo13">B)Escuchar su voz en mi mente</label>
				<br>
				
				<input type="radio" name="sr13" id="kinestesico13" value="c">
				<label for="kinestesico13">C) Revivir sensaciones y sentimientos respecto a tal persona</label>
				<br>
			</div>

			<div class="radios">
				<h3>14. Descubro que alguien me ama de veras si:</h3>
				<input type="radio" name="sr14" id="activo14" value="a">
				<label for="activo14">A) Me mira con ojos de ternura</label>
				<br>
				
				<input type="radio" name="sr14" id="auditivo14" value="b">
				<label for="auditivo14">B) Me habla afectuosamente o me dice: “Te amo”</label>
				<br>

				<input type="radio" name="sr14" id="kinestesico14" value="c">
				<label for="kinestesico14">C) Se me acerca y me saluda y toca con cariño</label>
				<br>
			</div>

			<div class="radios">
				<h3>15. Cuando estoy muy feliz, mi mundo</h3>
				<input type="radio" name="sr15" id="activo15" value="a">
				<label for="activo15">A) Tiene brillo y coloridos nuevos</label>
				<br>

				<input type="radio" name="sr15" id="auditivo15" value="b">
				<label for="auditivo15">B) Resuena en mi interior con una armonía de música hermosa</label>
				<br>

				<input type="radio" name="sr15" id="kinestesico15" value="c">
				<label for="kinestesico15">C) Aviva sentimientos de alegría y éxtasis</label>
				<br>
			</div>
				<div class="form-group">	
				<input type="submit" class="btn btn-defualt center-block" value="Enviar">
				</div>

				</form>
				
				</div>
  
		
		</div>
		
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>