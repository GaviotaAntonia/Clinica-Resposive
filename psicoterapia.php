<!DOCTYPE html>
<html lang="es">
<head>
  <title>|Servicios Clinica Psicoterapia|</title>
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
<!--Inicio Footer-->
  <?php include 'nav.html'; ?>
<!--Final Foooter-->


<!--BODY-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Aún más cerca de ti</h2>
      <h5>¿Las drogas y el alcohol estan destruyendo tu familia'</h5>
      <p>Quieres <a href="inicio.php">saber más</a> acerca del Proyecto de Vida y Amor A.C.</p>

      <h3>Servicios</h3>
      <p>Los servicios mencionados cuentan con un costo diferente pregunta via correo y tendras un descuento.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="tratamientos.php">Tratamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="psicoterapia.php">Psicoterapia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consejeria.php">Consejeria</a>
        </li>
      
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Intervención psicológica en conductas adictivas</h2>
      <h5>páginas 1-66 (Enero 2001)</h5>
      <p>Objetivo:</p>
      <p><br>la intervención psicológica en conductas adictivas debe de ajustarse al igual que se realiza en otras disciplinas, a la utilización de técnicas y tratamientos que hayan demostrado su utilidad en dicho ámbito. Se parte del supuesto de que cualquier intervención psicológica no tiene porqué estar justificada y, por tanto, no existe ninguna razón para aplicar a los pacientes tratamientos o técnicas que no hayan sido validadas. Método: se revisan los diferentes tipos de tratamientos psicológicos que en la actualidad tienen soporte empírico y que son recomendados por el National Institute of Drug Abuse y la Sociedad de Psicología Clínica (División 12 de la Asociación Psicológica Americana). Se revisan algunos tratamientos con formato de intervención psicológica breve recomendados por el Centre for Substance Abuse Treatment. Resultados: en el tratamiento de conductas adictivas se han utilizado distintos enfoques de intervención psicológica, no obstante sólo las terapias de corte cognitivo-conductual poseen validez empírica en este ámbito de intervención. Por otro lado, algunas intervenciones en formato de terapia breve pueden ser útiles en el tratamiento Conclusiones: se concluye que el tratamiento psicológico es un aspecto nuclear en el tratamiento de la adicción a drogas y, que en base a la información que se dispone en la actualidad y salvo algunas excepciones, las intervenciones psicológicas en conductas adictivas más recomendables se encuentran dentro del marco de la terapia cognitivo-conductual.</p>
      <br>
      <h2>Integración e interacciones entre los tratamientos farmacológicos y psicológicos de las adicciones: una revisión</h2>
      <h5>Anal. Psicol. vol.29 no.1 Murcia ene. 2013</h5>
      <br>
      <p>Los tratamientos principales aplicados en el ámbito de las adicciones son la farmacoterapia y las terapias psicológicas, siendo escasas las intervenciones en las que se combinan estos dos tipos de terapias. El objetivo de este estudio es revisar y mostrar un resumen de los resultados de las principales investigaciones, que han evaluado la efectividad de la intervención combinada de estas terapias en comparación con la aplicación de los tratamientos administrados de forma aislada. Los resultados muestran que la aplicación combinada de tratamientos farmacológicos y psicológicos, presenta mayor efecto terapéutico y de prevención de recaídas, superando en parte las limitaciones que presentan estos dos tipos de tratamientos en su aplicación aislada.</p>
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
