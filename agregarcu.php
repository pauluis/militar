<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
     <link rel="shorcut icon" type="image/x-icon" href="imagenes/logo.png">
  
</head>
<body>
  <style>
body {
  background-image: url(imagenes/fondo.jfif);
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
</style>
<br><br><br><br><br><br><br>

<br>
<div class="contenedor">
  <center>
  <div class="center-block col-md-4 col-xs-8">
<form  method="POST" >
  <div class="form-group">

    <h1><p class="text-white">REGISTRO DE CUERPO DE EJERCITO:</p></h1>
    
   
    <input type="text" name="codigocuerpo" class="form-control" placeholder="codigo cuerpo">
  </div><br>
    <input type="text" name="codigosolda" class="form-control"  placeholder="codigo soldado">
    <br>
    <input type="text" name="denominacion" class="form-control"  placeholder="denominacion">
    <br>


<center>
  

  <input type="submit" name="enviar" value="REGISTRAR"><br><br>

   
  

   
  </div>



</form>

</center>


<br>
 <div align="center">

</div>
<?php
include ("regicu.php");
?>
</body>
</html>