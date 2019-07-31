<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio/Administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png"> <!--FAVICON-->
 <!-- fuentes utilizadas  -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- termino de fuentes utilizadas-->
</head>
<body>

  <!--Inicio Footer-->
  <?php include 'nav2.html'; ?>
<!--Final Foooter-->

 <style>
.vertical-menu {
  width: 310px;
  height: 460px;
  overflow-y: auto;
}

.vertical-menu a {
  background-color: #A3E4D7;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #48C9B0;
}

.vertical-menu a.active {
  background-color: #0E6251;
  color: white;
}
</style>

<style >
  #popup {
    visibility: hidden;
    opacity: 0;
    margin-top: 0px;
  }
  #popup:target {
    visibility:visible;
    opacity: 1;
    background-color: rgba(0,0,0,0.8);
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:0;
    z-index: 000;
    -webkit-transition:all 1s;
    -moz-transition:all 1s;
    transition:all 1s;
  }
  .popup-contenedor {
    position: relative;
    margin:7% auto;
    padding:30px 50px;
    background-color: #fafafa;
    color:#333;
    border-radius: 3px;
    width:50%;
  }
  a.popup-cerrar {
    position: absolute;
    top:3px;
    right:3px;
    background-color: #333;
    padding:7px 10px;
    font-size: 20px;
    text-decoration: none;
    line-height: 1;
    color:#fff;
  }

  a.popup-link {
      text-align: justify;

  }
  table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 1px solid #000;
}
</style>
</head>
<body>

            <?php include 'conexion/conexion.php' ?><br><br>

       <div class="table-responsive-sm">
        <table class="table">
          <div class="table-responsive"> 
            <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <!-- definimos cabeceras de la tabla -->
                <th>CURP</th>
                <th>Nombre(s)</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha Nacimiento</th>
                <th>Estado</th>
                <th>Colonia</th>
                <th>Calle</th>
                <th>Referencia de Calle</th>
                <th>Edad</th>
                <th>Sangre</th>
              </tr>
            </thead>

            <tbody>
               <?php 
            $sql="SELECT * from paciente";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $mostrar['curp'] ?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['apellidopat'] ?></td>
                <td><?php echo $mostrar['apellidomat'] ?></td>
                <td><?php echo $mostrar['fechanacimiento'] ?></td>
                <td><?php echo $mostrar['id_estado'] ?></td>
                <td><?php echo $mostrar['id_colonia'] ?></td>
                <td><?php echo $mostrar['calle'] ?></td>
                <td><?php echo $mostrar['referenciadecalle'] ?></td>
                <td><?php echo $mostrar['edad'] ?></td>
                <td><?php echo $mostrar['tipodesangre']?></td>
                <td><a href="m"><i style='font-size:24px' class='fas'>&#xf573;</i></a></td>
                <td><a href="#"><i class="material-icons">&#xe872;</i></a></td>
              </tr>
              <?php }?>
            </tbody>
          </table> 
        </div>
  </table>
</div>



  <!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->
</body>

</html>