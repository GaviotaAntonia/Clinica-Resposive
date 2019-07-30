<!DOCTYPE html>
<html lang="es">
<head>
  <title>Dormitorios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">

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
       <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title" style="text-align: center;">Dormitorios</h1>
        </div>
        <p style="text-align: justify">Nuestros dormitorios son muy còmodos, existe espacio suficiente para el pleno desenvolvimiento
        de su familiar a lo largo de su estancia, ademàs de la convivencia con otras personas, ya que para nosotros el trabajo en equipo es muy
      importante.</p>

      <div>
        <img src="imagenes/dormitorio2.png" style="width: 1000px" class="mx-auto d-block img-fluid" alt="..."><br>
        <br>
        <img src="imagenes/dormitorio1.png" style="width: 1000px" class="mx-auto d-block img-fluid" alt="..."><br>
        <br>
    </div>

    </div>
    </div>
      </div>
    </div>
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
