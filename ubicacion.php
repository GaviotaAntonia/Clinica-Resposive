<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ubicacion Clinica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" type="image/png" href="imagenes/favicon.png"> <!--FAVICON-->


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

<!--NAVBAR DE INCIO-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="imagenes/logoparanav.png" alt="logo" style="width:40px;">
    </a>
    <a class="navbar-brand" href="inicio.php">CLINICA</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
     </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav">
            <li class="nav-item">
             <a class="nav-link w3-bar-item w3-button w3-right"  href="acercadenos.php" >Acerca de Nosotros</a>
             </li>
            <li class="nav-item">
            <a class="nav-link" href="servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="ubicacion.php">Ubicacion</a>
            </li>    
            <li class="nav">
              <a class="nav-link" href="clinica.php">Clinica</a>
            </li>
          </ul>

        </div>  
  </nav>
<!--FINAL NAVBAR-->

<!--BODY-->
<section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center">
        <h4 class="sub-heading">Contactanos</h4>
        <h2 class="heading">Registrate</h2>
      </div>
      <div class="row">
        <div class="col-md-8">
          <form action="#" method="post" class="probootstrap-form mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Nombre</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Apellido</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Correo electronico</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Mensaje</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Enviar Mensaje">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h3>Información de Contacto</h3>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i> <span>Plaza Coacalco, Avenida José López Portillo, San Francisco Coacalco, Méx.</span></li>
            <li><i class="icon-mail"></i><span>xxxxxxxxxxxxxxxxx@gmail.com</span></li>
            <li><i class="icon-phone2"></i><span>(55)XXXXXXXX</span></li>
          </ul>
        </div>
      </div>
    </div>
</section> 



<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" >
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.417160660149!2d-99.06422068508984!3d19.652200286760007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f3b42d4a01c3%3A0xfa9a9ee43ffcd6d1!2sViveros+21%2C+Granjas+Ecatepec%2C+55029+Ecatepec+de+Morelos%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1563314362898!5m2!1ses-419!2smx" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>



<!--Google Maps-->



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

</body>
</html>
