<?php 
include ("conexion.php");
if (isset($_POST{'enviar'})) {
	if (strlen($_POST['codigocuerpo']) >= 1 && strlen($_POST['codigosolda'])  >= 1 && strlen($_POST['denominacion'])  >= 1 ) {
	$codigocuerpo=trim($_POST['codigocuerpo']);
	$codigosolda=trim($_POST['codigosolda']);
	$denominacion=trim($_POST['denominacion']);
	
	$consulta="INSERT INTO cuerpo (codigocuerpo,codigosolda,denominacion) values ('$codigocuerpo','$codigosolda','$denominacion')";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		?>
		<h3 style="color: black"> ¡SE HA INSCRITO CORRECTAMENTE!</h3>
		<?php 
		} else {
			?>
			<h3 style="color: black"> ¡UPS HA OCURRIDO UN ERROR O YA EXISTE EL CUERPO DE EJERCITO!</h3>
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


