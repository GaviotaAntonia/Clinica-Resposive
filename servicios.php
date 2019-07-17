<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servicios Clinica</title>
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

<!--NAVBAR DE INCIO-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="imagenes/logotiposinfondo.png" alt="logo" style="width:40px;">
    </a>
    <a class="navbar-brand" href="inicio.php">Proyecto de Vida y Amor A.C.</a>
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
              <a class="nav-link" href="ubicacion.php">Ubicación</a>
            </li>    
            <li class="nav">
              <a class="nav-link" href="clinica.php">Instalaciones</a>
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
      <p>Quieres <a href="inicio.php">saber más</a> acerca de Clinica...</p>

      <h3>Servicios</h3>
      <p>Los servicios mencionados cuentan con un costo diferente pregunta via correo y tendras un descuento.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="tratamientos.php">Tratamientos</a>
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
      <h2>Principios de tratamientos para la drogadicción: Una guía basada en las investigaciones</h2>
      <h5>¿En qué consiste el tratamiento para la drogadicción?, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>El tratamiento para la drogadicción tiene como finalidad ayudar al adicto a dejar la búsqueda y el consumo compulsivos de la droga. El tratamiento puede darse en una variedad de entornos, de muchas formas distintas y por diferentes periodos de tiempo. Puesto que la drogadicción suele ser un trastorno crónico caracterizado por recaídas ocasionales, por lo general no basta con un solo ciclo de tratamiento a corto plazo. Para muchas personas, el tratamiento es un proceso a largo plazo que implica varias intervenciones y supervisión constante.</p>
      <br>
      <h2>La drogadicción es un trastorno complejo que puede involucrar casi todos los aspectos del desempeño de una persona: en la familia, en el trabajo, en la escuela y en la sociedad.</h2>
      <h5>Página actualizada en julio del 2010</h5>
      <p>Puesto que el abuso y la adicción a las drogas son problemas que pertenecen al campo de la salud pública, una gran parte de los tratamientos para las drogas es financiada por el gobierno federal y los gobiernos locales y estatales. Los planes de salud privados o subsidiados por compañías a veces cubren los costos para los tratamientos de la drogadicción y sus consecuencias médicas. Lamentablemente, la modalidad de cuidados administrados ha resultado en estadías promedio más cortas, mientras que la falta o insuficiencia de cobertura para el abuso de sustancias ha restringido el número de programas operativos. Esta situación mejorará gracias a la reciente aprobación de la paridad para la cobertura de problemas de salud mental y abuso de sustancias de los seguros.</p>
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
