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
      <a class="dropdown-item" class="btn btn-link" href="#">Configuracion</a>
      <a class="dropdown-item" class="btn btn-link" href="#">Mensajes</a>
      <a class="dropdown-item" class="btn btn-link" href="#">Salir</a>
    </div>
  </div>
</div>

<div class="vertical-menu">
  <a href="#" class="active">Panel</a>
  <a href="#">Pagina</a>
  <a href="#">Registro</a>
  <a href="#">Visitas</a>
  <a href="#">Redes sociales</a>
  <a href="#">Correo</a>
  <a href="#">Conf. general</a>
  <a href="#">Link 8</a>
  <a href="#">Link 9</a>
  <a href="#">Link 10</a>
</div>
<br>

<a href="#"><input type='button' name='boton' value='Suscribete' class="btn btn-success" style='width:310px; height:30px'>





<!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->

</body>
</html>