<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->

</head>
<body>

		<form method="post" name="" action="guardar_admin.php">
			<label for="">Nombre</label>
			<input type="text" name="nombre-txt">
			<br>
			<label for="">Apellido Paterno</label>
			<input type="text" name="apellido-txt">
			<br>
			<label for="">Apellido Materno</label>
			<input type="text" name="apellidoM-txt">
			<br>
			<label for="">Email</label>
			<input type="text" name="email-txt">
			<br>
			<label for="">Contraseña</label>
			<input type="password" name="pass-txt">
			<br>
			<input type="submit" name="enviar">

		</form>

</body>
</html>