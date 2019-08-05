<!DOCTYPE html>
<html lang="es">
<head>
  <title>¿Quienes somos?</title>
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

    <h3">gfa</h3>
</div>

<div class="row" id="elmenu">
  <div class="col-3 menu">
    <ul>
      <a href="mision.php"><li id="12">Mision</li></a>
      <a href="vision.php"><li id="12">Vision</li></a>
      <a href="valores.php"><li id="12">Valores</li></a>
      <a href="quiesom.php"><li id="12">¿Quienes Somos?</li></a>

    </ul>
  </div>


  <div class="col-9">

    <h1 style="text-align: center;">Proyecto Vida y Amor A.C.</h1>
    <p style="text-align: justify">¿Quienes somos?<br>Somos una asociación no lucrativa que esta dedicada a la atención integral de las adicciones, beneficiando a personas con problemas de vulnerabilidad en cualquier estrato social ( beneficiados); es decir a grupos expuestos a las adicciones de cualquier tipo, en estado de abandono o calle, así como en necesidad de asistencia o atención humanitaria; mediante las siguientes actividades:<br><p style="text-align: justify; font-style: italic; font-weight: bold">1° Atención a los beneficiados, quienes se encuentran expuestos a problemas de adicciones; mediante su previa admisión en las instalaciones.</p> <p style="text-align: justify; font-style: italic; font-weight: bold">2° Asilo o estancia durante el tiempo que los beneficiados necesiten de acuerdo a la evaluación profesional de los especialistas, salvaguardando la integridad física y mental de los usuarios y del personal,  así como el cuidado de las instalaciones.</p><p style="text-align: justify; font-style: italic; font-weight: bold">3° Brindar orientación, terapias, traslados de acuerdo a su grado de vulnerabilidad en el proceso de la adicción, con el propósito de lograr una estabilidad personal para que así puedan mejorar sus propias condiciones de vida y subsistencia.</p><p style="text-align: justify; font-style: italic; font-weight: bold">4° Reivindicar la dignidad humana, restableciendo la funcionalidad e integración de los beneficiados al ámbito social y laboral, mediante talleres ocupacionales, por ejemplo, cultura y deporte. </p> <p style="text-align: justify">Se brinda el apoyo de conferencias o actividades relacionadas al tema de adicciones a instituciones públicas o privadas, escuelas de cualquier nivel, empresas de cualquier sector, ya que nadie se encuentra excento de las adicciones, el cual se ha convertido en un problema de salud durante los últimos años.</p>
    <div align="center">
      <div align="center">
     <img class="img-fluid" src="imagenes/canva/acerca4.png" alt="..." width="500">
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
