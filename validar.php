<?php
$link = mysqli_connect("localhost","root","","militar2");
$id=$_POST['id'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$perfil=$_POST['perfil'];

$query="SELECT * FROM administrador WHERE id='$id'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);


$query1="SELECT * FROM administrador WHERE correo='$correo'";
$result1 = mysqli_query($link, $query1);



if($row1 = mysqli_fetch_array($result1, MYSQLI_BOTH)){
if($contraseña === $row['contraseña'] && $correo === $row1['correo']){
               header("Location: admin.html");
         }else{
        echo'<script type="text/javascript">
        alert("Contraseña incorrecta/id"); 
        window.location.href="entrar.html";       
        </script>';
       

    }
}else{
    echo'<script type="text/javascript">
        alert("Este usuario no existe"); 
        window.location.href="entrar.html";       
        </script>';
        

}
?>