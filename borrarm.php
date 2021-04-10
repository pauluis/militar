<!DOCTYPE html>
<html>
<head>
  <title>ELIMINAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <link rel="shorcut icon" type="image/x-icon" href="imagenes/logo.png">
  <body>
  <style>
body {
  background-image: url(imagenes/fondo.jfif);
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
</style>
</head>
<body>
  <br><br><br><br><br><br><br>
  <center>
<?php 
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="militar2";

$conexion= mysqli_connect($servidor,$usuario,$password) or die ("no se conctar al servidor");
$db=mysqli_select_db($conexion,$basededatos) or die ( "no se conecta la base de datos");
 
 $codigo=$_POST["codigo"];

 $consulta="Delete From soldados Where codigo='$codigo'";
$resultado=mysqli_query($conexion,$consulta);
if (mysqli_query($conexion,$consulta)) {
  ?>
  <center><h3 style="color: black;font-size:xx-large;"> ¡ELIMINAD@!</h3></center>
  <?php
}else {
  echo "error:" . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>
 <a href="privi.html" style="color:black;font-size:xx-large; ">REGRESAR</a>
 </center>
</body>
</html>