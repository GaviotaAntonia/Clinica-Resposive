
<!DOCTYPE html>
<html lang="es">
<head>
  <title>|Servicios Clinica Consejeria|</title>
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
              <a class="nav-link" href="ubicacion.php">Ubicacion</a>
            </li>    
            <li class="nav">
              <a class="nav-link" href="clinica.php">Proyecto de Vida y Amor A.C.</a>
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
          <a class="nav-link active" href="consejeria.php">Consejeria</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <div class="col-sm-8"><br>
      <h2>Introducción</h2>
        <h5> Pedrero et al., 2008</h5>
          <p>En el ámbito de las adicciones, los dos tipos principales de tratamientos, la farmacoterapia y las terapias psicológicas, se han desarrollado de forma paralela pero con trayectorias independientes. De forma consecuente, a pesar del desarrollo de farmacoterapias de potencia considerable, como la introducción de la buprenorfina y la naltrexona para la adicción a opiáceos (Fernández y Pereiro, 2007; Gowin, Ali y White, 2008) y al alcohol (Rósner et al., 2010b), los estudios sobre su uso y eficacia no han contemplado, en general, el papel que el contexto del tratamiento (factores psicológicos como el condicionamiento clásico a contextos o situaciones) tiene en los resultados terapéuticos. Así mismo, se ha demostrado la efectividad de varias terapias psicológicas en las adicciones, pero frecuentemente han sido evaluadas sin incluir el factor farmacológico en los respectivos estudios, incluso en casos en los que existirían farmacoterapias de comprobada eficacia (p. ej., Carroll, 1997).<br>Según Secades-Villa y Fernández-Hermida (2001), existen actualmente suficientes investigaciones que avalan la eficacia de las intervenciones psicológicas en el tratamiento de las drogodependencias, aunque muestran mejores resultados dentro de programas multicomponentes que incluyen intervenciones farmacológicas. Debido a los múltiples factores que están relacionados con el desarrollo y mantenimiento de la conducta adictiva, es importante utilizar estrategias multicomponentes que incluyan tanto terapias farmacológicas (por ejemplo a partir del tratamiento con agonistas/interdictores) como intervenciones psicológicas, como por ejemplo es el caso de la Aproximación de Reforzamiento Comunitario aplicada a la dependencia al alcohol, en la que se combinan técnicas operantes, terapia de pareja, entrenamiento en habilidades sociales y tratamiento con disulfiram (Secades-Villa, García-Rodríguez, Fernández-Hermida y Carballo, 2007). De modo similar, en la intervención sobre la dependencia a la nicotina y a psicoestimulantes (p. ej. cocaína), las principales revisiones y metaanálisis de eficacia, muestran que los tratamientos combinados médico-psicológico son el abordaje de elección (NIDA, 1999; Fiore et al., 2000; Becoña, 2003; 2004; Herrero y Moreno 2004; Secades-Villa et al., 2007).<br>El principal objetivo del presente trabajo no es el de examinar la eficacia de las terapias farmacológicas o psicológicas administradas aisladamente (aunque la revisión nos ha llevado necesariamente a resumir los resultados de algunos estudios relevantes), sino el de mostrar una revisión sistemática de las investigaciones más relevantes (desde el punto de vista metodológico) que han evaluado la efectividad de la combinación de los dos tipos de terapias dentro de un mismo diseño (National Institute of Drug Abuse, NIDA, 2005; 1999; Pedrero et al., 2008).</p>
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
