<?php
$con=mysqli_connect('localhost','id11823306_root','12345','id11823306_skullhead') or die('Error en la conexion 
con el servidor'); 
$sql="INSERT INTO registros
VALUES ('".$_POST["Nombre"]."','".$_POST["Email"]."')"; 
$resultado=mysqli_query($con,$sql) or die ('Error en la query de la database');
mysqli_close($con);
?>

<?php
include("head.php");
?>
<div class="jumbotron" style="background-color:#FF9C9C;" id="Noticias">
          <h1 class="display-6" background><center>Gracias por suscribirte!</h1></center>
          <p class="#"><center>Todo el equipo de SkullHead te da la bienvenida</p></center>
          <center><a class="btn btn-danger btn-lg" href="index.html" role="button">Regresa al inicio</a></center>
        </div>