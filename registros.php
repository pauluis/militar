<?php 
$conexion=mysqli_connect('localhost','root','','militar2');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>VER SOLDADOS</title>
	<meta charset="UTF-8">
	 <link rel="shorcut icon" type="image/x-icon" href="imagenes/logo.png">
	 <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<style>
body {
  background-image: url(imagenes/fondo.jfif);
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
</style>
<body>
  <center>
          <center><h1><p style="color:red;background: white;
font-family: Georgia, serif;
font-size: 40px;
letter-spacing: 0;
text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;">SOLDADOS</p></h1></center><br><br>
	 <table >
	 	<tr>
      <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;CODIGO:</td>
	 	    <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;NOMBRE:</td>
	 		<td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;APELLIDO:</td>
	 		
	 		
    <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;GRADUACIÒN:</td>
	 		
	 	</tr>
	 	<?php 
	 	$sql="SELECT *from soldados";
	 	$result=mysqli_query($conexion,$sql);

	 	while($mostrar=mysqli_fetch_array($result)){
	 	?>	

	 	 
	 	 <tr>
      <td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333"><?php echo $mostrar['codigo']  ?></td>
	 	 	<td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333"><?php echo $mostrar['nombre']  ?></td>
	 	 	<td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mostrar ['apellido']  ?></td>
	 	 	<td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   text-align:
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mostrar ['graduacion'] ?></td>
	 

	 	 	
	 	 </tr>
	 	 <?php 
	 	 } ?>
	 </table>
	 <br><br><br>
	 <a href="registross.html" style="color:white;background:black;background-opacity: 50%;">REGRESAR</a>
</center>
</body>
</html>