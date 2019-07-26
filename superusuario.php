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

</head>
<body>

  <div class="dropdown">
    <a href="#"><img href="#" src="imagenes/descarga.png" alt="..." width="100"></a><button type="button" class="btn btn-success" dropdown-toggle" data-toggle="dropdown">Administrador</button>
    <div style="text-align: center" class="dropdown-menu">
      <a class="dropdown-item" class="btn btn-link" href="configuracion.php">Configuracion</a>
      <a class="dropdown-item" class="btn btn-link" href="#">Mensajes</a>
      <a class="dropdown-item" class="btn btn-link" href="#">Salir</a>
    </div>
  </div>
</div>

<div class="vertical-menu">
  <a class="active" href="#"><img src="svg/dashboard.svg" alt="..." width="30"> Panel</a>
  <a href="#"><img src="svg/browser.svg" alt="..." width="30"> Perfil</span></a>
<a href="#popup"class="popup-link"><img src="svg/organization.svg" alt="..." width="30"> Redes sociales</a>
  
  <a href="#"><img src="svg/gear.svg" alt="..." width="30"> Configuracion gral.</a>
  <a href="#"><img src="svg/comment.svg" alt="..." width="30">Enviar comentarios</a>
<a href="#"><img src="svg/report.svg" alt="..." width="30"> Reportar un problema</a>
  <a href="#"><img src="svg/gear.svg" alt="..." width="30"></a>
    <a href="#"><img src="svg/gear.svg" alt="..." width="30">Link 8</a>
  <a href="#"><img src="svg/gear.svg" alt="..." width="30">Link 9</a>
  <a href="#"><img src="svg/gear.svg" alt="..." width="30">Link 10</a>
</div>

<a href="#"><input type='button' name='boton' value='Suscribete' class="btn btn-success" style='width:310px; height:30px'>

<div class="modal-wrapper" id="popup">
    <div class="popup-contenedor">
      <h2>Redes sociales:</h2>
      <p><body>
  <div>
    <a href="https://www.facebook.com/Proyecto-de-Vida-y-Amor-AC-494334077966928" class="facebook"><i class="fa fa-facebook"style="font-size: 50px"></i> Facebook</a> 
    <a href="https://twitter.com/ProyectodeVid16" class="twitter"><i class="fa fa-twitter" style="font-size: 50px"></i> Twitter</a> 
    <a href="https://www.instagram.com/pvidayamor/" class="instagram"><i class="fa fa-instagram"style="font-size: 50px"></i> Instagram</a>
    <a href="https://www.youtube.com/channel/UCNUvRV5245sHvDQFe61U5jQ/featured?view_as=subscriber" class="youtube"><i class="fa fa-youtube" style="font-size: 50px"></i> Youtube</a> </div></body></p>
      <a class="popup-cerrar" href="#">X</a></div></div></a>

</body>
</html>