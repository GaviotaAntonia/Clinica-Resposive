<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">

  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png"> <!--FAVICON-->


 <!-- fuentes utilizadas  -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <!-- termino de fuentes utilizadas-->
</head>



<!--Estilos para el carrusel-->
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
<!--Final de estilos para el carrusel-->


<!--Inicio Footer-->
  <?php include 'nav.html'; ?>
<!--Final Foooter-->


<!--BODY-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Más cerca de ti</h2>
      <h5></h5>
      <p style="text-align: justify">¿Deseas <a href="inicio.php">conocer más</a> del Proyecto de Vida y Amor?</p>

      <h3>Servicios</h3>
      <p style="text-align: justify">Nuestros servicios son las 24 Hrs. del día, todo el año, si deseas más informes <a href="ubicacion.php">contactanos,</a> con gusto un operador te atendera.</p>

      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="tratamientos.php">Tratamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="psicoterapia.php">Terapias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consejeria.php">Consejería</a>
        </li>

      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">

      <div align="center">
     <img class="img-fluid" src="imagenes/linfografia.png" alt="..." width="1800">
   </div>
    </div>
  </div>
    </div>
  </div>
</div>



<!--FINAL DEL BODY-->


<!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->



<!--JAVASCRIPT-->
  <script>
    $(document).ready(function(){
     // Activa Carousel
       $("#myCarousel").carousel();

     // Enable Carousel Indicators
     $(".item1").click(function(){
     $("#myCarousel").carousel(0);
     });
      $(".item2").click(function(){
      $("#myCarousel").carousel(1);
       });
       $(".item3").click(function(){
       $("#myCarousel").carousel(2);
      });

      // Enable Carousel Controls
       $(".carousel-control-prev").click(function(){
       $("#myCarousel").carousel("prev");
      });
       $(".carousel-control-next").click(function(){
      $("#myCarousel").carousel("next");
       });
      });
  </script>
<!--final JAVASCRIPT-->

<style>
body {margin:0;height:0;}

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 15px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.instagram {
  background: #FF1493;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 25px;
}
</style>
<body>
<div class="icon-bar">
  <a href="https://www.facebook.com/Proyecto-de-Vida-y-Amor-AC-494334077966928" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/ProyectodeVid16" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.instagram.com/pvidayamor/" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://www.youtube.com/channel/UCNUvRV5245sHvDQFe61U5jQ/featured?view_as=subscriber" class="youtube"><i class="fa fa-youtube"></i></a>
  <a href="" class="" style="background-color: black"><i class="fa fa-users"></i></a>   
</div>
</body>

</body>
</html>
