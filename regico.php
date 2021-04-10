<?php 
include ("conexion.php");
if (isset($_POST{'enviar'})) {
	if (strlen($_POST['codigocompa']) >= 1 && strlen($_POST['codigosolda'])  >= 1 && strlen($_POST['actividad'])  >= 1) {
	$codigocompa=trim($_POST['codigocompa']);
	$codigosolda=trim($_POST['codigosolda']);
	$actividad=trim($_POST['actividad']);
	
	$consulta="INSERT INTO compañia (codigocompa,codigosolda,actividad) values ('$codigocompa','$codigosolda','$actividad')";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		?>
		<h3 style="color: black"> ¡SE HA INSCRITO CORRECTAMENTE!</h3>
		<?php 
		} else {
			?>
			<h3 style="color: black"> ¡UPS HA OCURRIDO UN ERROR O YA EXISTE LA COMPAÑIA!</h3>
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


