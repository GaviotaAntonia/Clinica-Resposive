<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registro de Traslados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png"> <!--FAVICON-->
 <!-- fuentes utilizadas  -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <!-- termino de fuentes utilizadas-->
</head>
<body>

<!--Inicio Footer-->
  <?php include 'nav1.html'; ?>
  <?php include 'conexion/conexion.php';?>
<!--Final Foooter-->

<?php
    $consultaUsuarios = mysql_query("SELECT * FROM usuario");
?>

<div class="table-responsive"> 
   ";
              echo "";
              echo "";
        echo "";
              echo "";
           }      
        ?&gt;
 
<table class="table table-bordered table-striped">
  <thead> 
    <tr>
      <!-- definimos cabeceras de la tabla --> 
      <th>Usuario</th>
      <th>Nombre(s)</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Direccion</th>
      <th>Estado de Procedencia</th>
      <th>Telefono</th>
      <th>Celular</th>
     
    </tr>
</thead>
 
 
<tbody>
  <?php
           //recorremos resultado de la consulta y añadimos el contenido a la tabla
     while($row= mysql_fetch_array($consultaUsuarios)) 
     {
                   echo "<tr>
                   <tr>
                    <td>".$row['usuario_usuario.']."</td>
                    <td>".$row['usuario_nombre']."</td>
                    <td>".$row['tabla_Materno']."</td>
                    <td>".$row['tabla_Nombre']."</td>
                    <td>".$row['tabla_Direccion']."</td>
                    <td>".$row['tabla_Estado de Procedencia']."</td>
                    <td>".$row['tabla_Telefono']."</td>
                    <td>".$row['tabla_Celular']."</td>
                  
</tbody>
 
</table>
 
</div>