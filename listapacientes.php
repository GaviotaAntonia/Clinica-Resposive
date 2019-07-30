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
        <a class="active" href="#"><img src="svg/dashboard.svg" alt="..." width="20"> Panel</a>
        <a href="#"><img src="svg/browser.svg" alt="..." width="20">    Perfil</span></a>
        <a href="listapacientes.php"><img src="svg/repo.svg" alt="..." width="20">  Lista de Pacientes</a>
        <a href="#"><img src="svg/repo-pull.svg" alt="..." width="20">   Traslados</a>
        <a href="#"><img src="svg/clippy.svg" alt="..." width="20">  Expedientes</a>
        <a href="#"><img src="svg/location.svg" alt="..." width="20">   Visitas</a>
        <a href="#popup"class="popup-link"><img src="svg/organization.svg" alt="..." width="20"> Redes sociales</a>
        <a href="#"><img src="svg/gear.svg" alt="..." width="20"> Configuracion general</a>
        <a href="#"><img src="svg/comment.svg" alt="..." width="20"> Enviar comentarios</a>
        <a href="#"><img src="svg/report.svg" alt="..." width="20"> Reportar un problema</a>
      </div>
      <br>
      <a href="#"><input type='button' name='boton' value='Suscribete' class="btn btn-success"></a>
      </div>
      <div class="col-sm-8">
      <form action="configuracion.php" method="post" accept-charset="utf-8">
        <h2>Pacientes</h2>
        <h3>Modificar datos:</h3>
        <form id="register-form" action="conexion/opegrabar.php" method="post" role="form" style="display: none;">
          <div class="container">  
            <form class="form-inline" action="conexion/modificar.php" method="post">
              <span class="input-group-addon"><label for="email2" class="mb-2 mr-sm-2">Usuario:</label></span>
              <input type="text" class="form-control mb-2 mr-sm-2" id="usuario2" placeholder="Ingresa tu usuario" name="usuario2">
              <label for="nombre2" class="mb-2 mr-sm-2">Nombre:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="nombre2" placeholder="Ingresa tu nombre" name="nombre2" style="text-transform: uppercase;">
              <label for="apepat" class="mb-2 mr-sm-2">Apellido Paterno:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa tu Apellido Paterno" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Apellido Materno:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apemat2" placeholder="Ingresa tu Apellido Materno" name="apemat2" style="text-transform: uppercase;">
              <label for="correo2" class="mb-2 mr-sm-2">Correo:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="correo2" placeholder="Ingresa tu Correo" name="correo2" >
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