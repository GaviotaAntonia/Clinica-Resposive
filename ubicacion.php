<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ubicaciòn</title>
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
<section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center">
        <h4 class="sub-heading">Contactanos</h4>
        <h2 class="heading">Envia tus comentarios o dudas.</h2>
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
            <div class="form-group"  action="correo.php" method="post">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Enviar Mensaje">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h3>Información de Contacto</h3>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i> <span>Calle Nogal No. 30 (antes Calle Viveros No. 21), Col. Potrero del Rey, C.P. 55029, Ecatepec de Morelos, Estado de México.</span></li>
            <li><i class="icon-mail"></i><span>Informes: pvidayamora.c@outlook.com</span></li>
            <li><i class="icon-phone2"></i><span>Tel.: (55) 26-22-94-66</span></li>
            <li><i class="icon-phone2"></i><span>Whatsapp: (55) 65-27-46-15</span></li>
          </ul>
        </div>
      </div>
    </div>
</section>



<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" >
 <iframe src="https://wego.here.com/directions/mix//Clinica-Proyecto-De-Vida-y-Amor,-VIVEROS-21-COL-GRANJAS-ECATEPEC,-55029-Ecatepec,-Mexico:e-eyJuYW1lIjoiQ2xpbmljYSBQcm95ZWN0byBEZSBWaWRhICB5IEFtb3IiLCJhZGRyZXNzIjoiVklWRVJPUyAyMSBDT0wgR1JBTkpBUyBFQ0FURVBFQywgNTUwMjkgRWNhdGVwZWMsIE1leGljbywgTWV4aWNvIiwibGF0aXR1ZGUiOjE5LjY1MjE2MzgsImxvbmdpdHVkZSI6LTk5LjA2MjQwMjksInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MzQ3NTM1MDk2MDYyMjU5fQ==?map=19.65216,-99.0624,15,normal&fb_locale=es_ES" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

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
