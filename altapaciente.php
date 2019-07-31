<!DOCTYPE html>
<html lang="es">
<head>
  <title>Alta Paciente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
    padding:10px 30px;
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
        <a class="active" href="#"><i class="material-icons">&#xe871;</i> Panel</a>
        <a href="#"><i style='font-size:24px' class='fas'>&#xf2bb;</i> Perfil</span></a>
        <a href="listapacientes.php"><i style="font-size:24px" class="fa">&#xf2b9;</i> Lista de Pacientes</a>
        <a href="#"><i style="font-size:24px" class="fa">&#xf0f9;</i> Traslados</a>
        <a href="#"><i style="font-size:24px" class="fa">&#xf02d;</i> Expedientes</a>
        <a href="#"><i style='font-size:24px' class='fas'>&#xf3c5;</i> Visitas</a>
        <a href="#popup"class="popup-link"><i class="material-icons">&#xe2c9;</i> Redes sociales</a>
        <a href="#"><i style='font-size:24px' class='fas'>&#xf46c;</i> Alta Paciente</a>
        <a href="#"><i style='font-size:24px' class='fas'>&#xf46d;</i> Alta Contacto</a>
        <a href="#"><i style="font-size:24px" class="fa">&#xf085;</i> Configuracion general</a>
        <a href="#"><i style='font-size:24px' class='far'>&#xf4ad;</i> Enviar comentarios</a>
        <a href="#"><i class="material-icons">&#xe8b2;</i> Reportar un problema</a>
      </div>
      <br>
      <a href="#"><input type='button' name='boton' value='Suscribete' class="btn btn-success"></a>
      </div>

      <div class="col-sm-8">
      <form action="configuracion.php" method="post" accept-charset="utf-8">
        <h2 style="text-align: center">Alta Paciente</h2>
        <h3>Introducir datos:</h3>
        <form id="register-form" action="conexion/opegrabar.php" method="post" role="form" style="display: none;">
          <div class="container">
            <form class="form-inline" action="conexion/modificar.php" method="post">
              <span class="input-group-addon"><label for="email2" class="mb-2 mr-sm-2">CURP</label></span>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apemat2" placeholder="CURP" name="apemat2" style="text-transform: uppercase;">
              <label for="nombre2" class="mb-2 mr-sm-2">Nombre:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="nombre2" placeholder="Ingresa tu nombre" name="nombre2" style="text-transform: uppercase;">
              <label for="apepat" class="mb-2 mr-sm-2">Apellido Paterno:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa tu Apellido Paterno" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Apellido Materno:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Apellido Materno" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Fecha de Nacimiento:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Fecha de Nacimiento" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Estado de procedencia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Estado de Procedencia" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Colonia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Colonia" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Calle:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Calle" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Referencia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Referencia" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Edad:</label>
              <input type="range" name="edad" min="18" max="99" step="1" value="30">
              <label for="correo2" class="mb-2 mr-sm-2">Tipo de sangre:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apemat2" placeholder="Ingresa Tipo de Sangre" name="apemat2" style="text-transform: uppercase;">
              <div class="form-group" id="registro">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btnmodif">Registrar</button>
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btnmodif">Modificar</button>
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btnmodif">Eliminar</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </form>
      </form>
      </div>

      </div>
    </div>
<div class="modal-wrapper" id="popup">
    <div class="popup-contenedor">
      <h2>Redes sociales:</h2>
        <div>
          <a href="https://www.facebook.com/Proyecto-de-Vida-y-Amor-AC-494334077966928" class="facebook"><i class="fa fa-facebook"style="font-size: 50px"></i> Facebook</a>
          <a href="https://twitter.com/ProyectodeVid16" class="twitter"><i class="fa fa-twitter" style="font-size: 50px"></i> Twitter</a>
          <a href="https://www.instagram.com/pvidayamor/" class="instagram"><i class="fa fa-instagram"style="font-size: 50px"></i> Instagram</a>
          <a href="https://www.youtube.com/channel/UCNUvRV5245sHvDQFe61U5jQ/featured?view_as=subscriber" class="youtube"><i class="fa fa-youtube" style="font-size: 50px"></i> Youtube</a>
          <a href="" class="" style="background-color: black"><i class="fa fa-users"></i></a>
        </div>
          <a class="popup-cerrar" href="#">X</a>
    </div>
</div>


  <!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->
</body>

</html>
