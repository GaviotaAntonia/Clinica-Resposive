
<?php 
include 'conexion.php';
 
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];


$sSQL="Update prueba Set nombre='$nombre',apellido='$apellido' where codigo='$codigo'";
mysqli_query($conexion,$sSQL);



echo "datos modificados";
?> 