<?php 
include ("conexion.php");
if (isset($_POST{'enviar'})) {
	if (strlen($_POST['codigocartel']) >= 1 && strlen($_POST['codigosolda'])  >= 1 && strlen($_POST['nombresolda'])  >= 1 && strlen($_POST['nombrecartel'])  >= 1 && strlen($_POST['ubicacion'])  >= 1) {
	$codigocartel=trim($_POST['codigocartel']);
	$codigosolda=trim($_POST['codigosolda']);
	$nombresolda=trim($_POST['nombresolda']);
	$nombrecartel=trim($_POST['nombrecartel']);
	$ubicacion=trim($_POST['ubicacion']);
	$consulta="INSERT INTO carteles (codigocartel,codigosolda,nombresolda,nombrecartel,ubicacion) values ('$codigocartel','$codigosolda','$nombresolda','$nombrecartel','$ubicacion')";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		?>
		<h3 style="color: black"> ¡SE HA INSCRITO CORRECTAMENTE!</h3>
		<?php 
		} else {
			?>
			<h3 style="color: black"> ¡UPS HA OCURRIDO UN ERROR O YA EXISTE EL CARTEL!</h3>
		<?php
	}
	} else {
		?>
	<h3 style="color: black">¡POR FAVOR COMPLETE LOS CAMPOS</h3>
	<?php	
	}
	}
	
?> 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shorcut icon" type="image/x-icon" href="imagenes/logo.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1,0, minimum-scale=1.0">
	<meta charset="utf-8">
	<title>EXITO</title>
</head>
<body>
<center><a style=" color: black; margin-right:-160px; font-weight: bold" href="privi.html">  REGRESAR</a></center>
</body>
</html>


