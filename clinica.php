<!DOCTYPE html>
<html lang="es">
<head>
  <title>Nuestras Instalaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <!--FAVICON-->

  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png">
 <!-- fuentes utilizadas  -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <!-- termino de fuentes utilizadas-->
</head>

<!--Estilos-->
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    * {
    box-sizing: border-box;
      }

    .row::after {
       content: "";
       clear: both;
       display: table;
    }


    [class*="col-"] {
      float: left;
      padding: 15px;
      }

      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}



      .header {
        background-color: white;
        color: #ffffff;
        padding: 5px;
      }

      .menu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .menu li {
      padding: 8px;
      margin-bottom: 7px;
      background-color: #33b5e5;
      color: #ffffff;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
      text-align: right;
      }

      .menu li:hover {
        background-color: #0099cc;
      }
  </style>
<!--Final de estilos-->


<!--Inicio Footer-->
  <?php include 'nav.html'; ?>
<!--Final Foooter-->


<!--BODY-->

<div class="header">
</div>

<div class="row" id="elmenu">
   <div class="col-3 menu">
      <ul>
       <a href="instalacion.php"><li>Instalaciones</li></a>
       <a href="dormitorios.php"><li>Dormitorios</li></a>
        <a href="actividades.php"><li>Actividades</li></a>
     </ul>
    </div>
  <div class="col-9">
      <h2  style="text-align: center">Conoce nuestras instalaciones</h2>
      <p>Nuestro inmueble cuenta con salidas de emergencia avalado por Protección Civil, además de un sistema de videovigilancia que opera todo el día como personal de vigilancia altamente capacitado, contamos con traslados a toda la república y un área médica, nuestros dormitorios son verdaderamente cómodos, todo esto para brindar una agradable estancia a su familiar y a usted, si desea conocer mejor nuestras instalaciones, visitenos, le aseguramos que somos su mejor opción.</p></div>
      <!-- carrusel-->
  <div class="container mt-3">
    <!---<h2>Activate Carousel with JavaScript</h2>-->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
        <li class="item4"></li>
        </ul>

      <!-- The slideshow -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="imagenes/n01.png" alt="Imagen de clinica ejemplo" width="1100" height="500">
          </div>

          <div class="carousel-item">
            <img src="imagenes/n02.png" alt="segunda imagen de ejemplo de la clinica " width="1100" height="500">
          </div>

          <div class="carousel-item">
          <img src="imagenes/n03.png" alt="tercera imagen de ejemplo de clinica " width="1100" height="500">
          </div>

          <div class="carousel-item">
            <img src="imagenes/n04.png" alt="cuarta magen de clinica ejemplo" width="1100" height="500">
          </div>
           
      
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
       $(".item4").click(function(){
      $("#myCarousel").carousel(3);
       })
       $(".item5").click(function(){
      $("#myCarousel").carousel(4);
       })

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

</div>
</div>
<div class="container mt-3">
     <a href="ubicacion.php" class="btn btn-black"><b>Agendar visita</b></a></div>
  </div>


<!--FINAL DEL BODY-->




<!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
  
  <?php include 'menudere.php'; ?>
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
