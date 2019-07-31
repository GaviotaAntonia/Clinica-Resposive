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
  <!-- termino de fuentes utilizadas-->
</head>
<body>

  <!--Inicio Footer-->
  <?php include 'nav1.html'; ?>
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
  <div class="row">
    <div class="col-sm-3">
      <div class="dropdown">
        <a href="#"><img href="#" src="imagenes/descarga.png" alt="..." width="100"></a><button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Administrador</button>
        <div style="text-align: center" class="dropdown-menu">
          <a class="dropdown-item" class="btn btn-link" href="configuracion.php">Configuración</a>
          <a class="dropdown-item" class="btn btn-link" href="#">Mensajes</a>
          <a class="dropdown-item" class="btn btn-link" href="#">Salir</a>
        </div>
      </div>

      <div class="vertical-menu">
        <a href="#"><img src="svg/dashboard.svg" alt="..." width="20"> Panel</a>
        <a href="#"><img src="svg/browser.svg" alt="..." width="20">    Perfil</span></a>
        <a href="listapacientes.php"><img src="svg/repo.svg" alt="..." width="20">  Lista de Pacientes</a>
        <a href="#"><img src="svg/repo-pull.svg" alt="..." width="20">   Traslados</a>
        <a href="#"><i style='font-size:24px' class='fas'>&#xf2bb;</i>Expedientes</a>
        <a href="#"><img src="svg/location.svg" alt="..." width="20">   Visitas</a>
        <a href="#popup"class="popup-link"><img src="svg/organization.svg" alt="..." width="20"> Redes sociales</a>
        <a href="#"><i class="fa fa-youtube"></i> Dar de Alta Pacientes</a>
      </div>

      <br>
      <a href="#"><input type='button' name='boton' value='Suscribete' class="btn btn-success"></a>
      </div>


      <div class="col-sm-8">
          <table class="table table-striped ">
            <?php include 'conexion/conexion.php' ?><br><br>

        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <!-- definimos cabeceras de la tabla -->
                <th>CURP</th>
                <th>Nombre(s)</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
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
                <td><?php echo $mostrar['tipodesangre']?></td>
                <td><a href="m">Modificar</a></td>
                <td><a href="#">Eliminar</a></td>
              </tr>
              <?php }?>
</tbody>

</table>

</div>
      </div>

    </div>


  <!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->
</body>

</html>
