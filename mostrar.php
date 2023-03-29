<?php
include("head.php");
?>

<div class="w3-red w3-padding-large w3-padding-32 w3-margin-top" id="subscribe">
    <h2 class="w3-center">Aquí se muestran nuestros fans</h2>
    <hr>
    <h4><p><center>SkullHead aprecia su preferencia</p></h4></center>
<center>
  <table border="0">
  <tr>
  <th colspan="2" color: black;><center>Fans</center></th>
</tr>
<tbody>
<tr>
<td><center>Nombre</td></center>
<td><center>Email</td></center>
</tr>

<?php
include("conexion.php");
$query="SELECT*FROM registros";
$resultado=$connect->query($query);
while ($row=$resultado->fetch_assoc()){
    ?>
    <tr>
<td><center><?php echo $row['Nombre'];?></td>
<td><?php echo $row['Email'];?></td></center>
<?php
}
//
?>