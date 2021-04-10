<?php 
include ("conexion.php");
if (isset($_POST{'enviar'})) {
	if (strlen($_POST['codigo']) >= 1 && strlen($_POST['nombre'])  >= 1 && strlen($_POST['apellido'])  >= 1 && strlen($_POST['graduacion'])  >= 1) {
	$codigo=trim($_POST['codigo']);
	$nombre=trim($_POST['nombre']);
	$apellido=trim($_POST['apellido']);
	$graduacion=trim($_POST['graduacion']);
	$consulta="INSERT INTO soldados (codigo,nombre,apellido,graduacion) values ('$codigo','$nombre','$apellido','$graduacion')";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		?>
		<h3 style="color: black"> ¡SE HA INSCRITO CORRECTAMENTE EL SOLDADO!</h3>
		<?php 
		} else {
			?>
			<h3 style="color: black"> ¡UPS HA OCURRIDO UN ERROR O YA EXISTE EL SOLDADO!</h3>
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


