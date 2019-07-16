<!DOCTYPE html>
<html lang="es">
<head>
  <title>|Servicios Clinica tratamientos|</title>
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
            <a class="nav-link active" href="servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ubicacion.php">Ubicacion</a>
            </li>    
            <li class="nav">
              <a class="nav-link" href="clinica.php">Clinica</a>
            </li>
          </ul>
        </div>  
  </nav>
<!--FINAL NAVBAR-->

<!--BODY-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Aún más cerca de ti</h2>
      <h5>¿Las drogas y el alcohol estan destruyendo tu familia'</h5>
      <p>Quieres <a href="inicio.html">saber más</a> acerca de Clinica...</p>

      <h3>Servicios</h3>
      <p>Los servicios mencionados cuentan con un costo diferente pregunta via correo y tendras un descuento.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="tratamientos.php">Tratamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="psicoterapia.php">Psicoterapia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consejeria.php">Consejeria</a>
        </li>
      
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Tratamiento para la anorexia</h2>
      <h5>Lunes, 27 de Mayo de 2002 - 22:00</h5>
      <img src="ejmplosimg/tratamientosimgs/anorexia.jpg" style="width: 200px" class="mx-auto d-block img-fluid" alt="Chica de cabello largo con problemas de anorexia">
      <p>Sospecha que tienes anorexia nerviosa, por lo general, te indicará varias pruebas y exámenes para precisar un diagnóstico, descartar causas médicas del adelgazamiento y determinar...<a href="">saber más...</a></p>
      <br>
      <h2>Codependencia</h2>
      <h5> 2001. Beattie, Melody. Ed. Sirio. ISBN 84-7808-233-6</h5>
      <img src="ejmplosimg/tratamientosimgs/codependencia.jpg" style="width: 200px" class="mx-auto d-block img-fluid" alt="en la imagen se muestra dos personas una de ella es codependiente">
      <p>Asume un rol arquetípico mesiánico que invade todas las áreas de su vida y suele olvidarse de sí mismo y sus necesidades gradualmente para centrarse en los problemas del otro (su pareja, un familiar, un amigo, una causa social, etc.), es por eso que es muy común que se relacione con gente "problemática"...<a href="">saber más...</a></p>

      <h2>Farmacodependencia</h2>
      <h5>22 jun. 2011</h5>
      <img src="ejmplosimg/tratamientosimgs/farmaco.jpg" style="width: 200px" class="mx-auto d-block img-fluid" alt="en la imagen se muestra dos personas una de ella es codependiente">
      <p>define la dependencia del alcohol y de otras sustancias como «una necesidad de consumir dosis repetidas de la sustancia para encontrarse bien o para no sentirse mal»...<a href="">saber más...</a></p>

      <h2>Depresión</h2>
      <h5>Página actualizada 03 junio 2019</h5>
      <img src="ejmplosimg/tratamientosimgs/depresion.jpg" style="width: 200px" class="mx-auto d-block img-fluid" alt="en la imagen se muestra dos personas una de ella es codependiente">
      <p> Sucede cundo los sentimientos de tristeza, pérdida, ira o frustración interfieren con la vida diaria por semanas, o períodos más largos de tiempo. Trastorno depresivo persistente...<a href="">saber más...</a></p>
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

</body>
</html>
