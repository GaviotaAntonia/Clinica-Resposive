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

</head>
<body>

  <div class="dropdown">
    <a href="#"><img href="#" src="imagenes/descarga.png" alt="..." width="100"></a><button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Administrador</button>
    <div style="text-align: center" class="dropdown-menu">
      <a class="dropdown-item" class="btn btn-link" href="configuracion.php">Configuración</a>
      <a class="dropdown-item" class="btn btn-link" href="#">Mensajes</a>
      <a class="dropdown-item" class="btn btn-link" href="#">Salir</a>
    </div>
  </div>
</div>

<div class="vertical-menu">
  <a href="#" class="active">Panel</a>
  <a href="#">Página</a>
  <a href="#">Registro</a>
  <a href="#">Visitas</a>
  <a href="#">Redes sociales</a>
  <a href="#">Correo</a>
  <a href="#">Conf. general</a>
</div>
<br>


<a href="#"><input type='button' name='boton' value='Suscribete' class="btn btn-success" style='width:310px; height:30px'></a>

<form action="configuracion_submit" method="get" accept-charset="utf-8">
  <h2>Configuración de la Cuenta</h2>
  <h3>Modificar datos:</h3>
               <form id="register-form" action="conexion/opegrabar.php" method="post" role="form" style="display: none;">
                  <div class="container">  
                    <form class="form-inline" action="/action_page.php">
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
                      <form id="formCheckPassword" method="post">
                        <label for="contra2" class="mb-2 mr-sm-2">Contraseña:</label>
                        <div class="input-group mb-3">
                          <input type="password" class="form-control" placeholder="Contraseña" name="con1">
                          <input type="password" class="form-control" placeholder="re-ingresa contraseña" name="con2">
                        </div>
                      </form> 

                      <div class="form-group" id="registro">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-dark" style="text-align:center;">Modificar</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </form>
                  </div>
                </form>
</form>








<!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->

</body>
</html>