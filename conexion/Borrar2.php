<?php
/* By http://php-estudios.blogspot.com */

/* PARTE 1: AL INICIO SE EXTRAEN TODAS LAS FILAS */
//Necesitamos establecer una conexión con la base de datos.
require 'conexion.php';

//Seleccionar la base datos y la conexión y capturar posibles errores con die
mysqli_select_db('proyectovidayamor',$con) || die('No pudo conectarse: '.mysqli_error());

//Preparar la consulta para extraer todos los clientes
$consulta = "SELECT * FROM paciente";

//Ejecutar la consulta
$resultado = mysqli_query($consulta, $conexion) or die(mysqli_error());

//Extraer todas la filas y almacenarlas en una tabla
$table = "<table border='1' cellpadding='10'>\n";
$table .= "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Localidad</th><th>Edad</th><th></th></tr>\n";
while($fila = mysqli_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["curp"]."</td>
      <td>".$fila["nombre"]."</td>
      <td>".$fila["apellidos"]."</td>
      <td>".$fila["direccion"]."</td>
      <td>".$fila["localidad"]."</td>
      <td>".$fila["edad"]."</td>
      <td><form method='post' action=''> \n
      <input type='hidden' name='curp' value='".$fila["curp"]."'>
      <input type='submit' value='Eliminar'>
      </form></td>
   </tr>\n";
    }
$table .= "</table>\n"; 


/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

if (isset($_POST["curp"]))
{
//Se almacena en una variable el id del registro a eliminar
$curp = $_POST["curp"];

//Preparar la consulta
$consulta = "DELETE FROM paciente WHERE curp=$curp";

//Ejecutar la consulta
$resultado = mysqli_query($consulta, $conexion) or die(mysqli_error());

//redirigir nuevamente a la página para ver el resultado
header("location: eliminar.php");
}
  
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Eliminar registros de una tabla con Mysql y PHP</title>
</head>
<body>

<?php 

/* Mostrar la tabla con los registros */
echo $table; 

?>

</body>
</html>

<?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>