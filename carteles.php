<?php 
$conexion=mysqli_connect('localhost','root','','militar2');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>VER CARTELES</title>
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
text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;">CARTELES</p></h1></center><br><br>
	 <table >
	 	<tr>
        <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;CODIGO CARTEL:</td>
      <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;CODIGO SOLDADO:</td>
	 	    <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;NOMBRE DEL SOLDADO:</td>
   <td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;NOMBRE DEL CARTEL:</td>
	 		<td style="color:white;background:black;background-opacity: 50%;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;UBICACION:</td>
	 		
	 	</tr>
	 	<?php 
	 	$sql="SELECT *from carteles";
	 	$result=mysqli_query($conexion,$sql);

	 	while($mostrar=mysqli_fetch_array($result)){
	 	?>	

	 	 
	 	 <tr>
       <td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333"><?php echo $mostrar['codigocartel']  ?></td>
      <td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333"><?php echo $mostrar['codigosolda']  ?></td>
	 	 	<td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333"><?php echo $mostrar['nombresolda']  ?></td>
    <td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333"><?php echo $mostrar['nombrecartel']  ?></td>
	 	 	<td style="color:red;background: white;
   font-family: Georgia, serif;
   font-size: 40px;
   letter-spacing: 0;
   text-align:center;
   text-shadow: 1px 1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mostrar ['ubicacion']  ?></td>


	 	 	
	 	 </tr>
	 	 <?php 
	 	 } ?>
	 </table>
	 <br><br><br>
	 <a href="registross.html" style="color:white;background:black;background-opacity: 50%;">REGRESAR</a>
</center>
</body>
</html>