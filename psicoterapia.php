<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servicios/Terapias</title>
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
      <h5 style="text-align: justify">¿Conoces a alguien que necesite nuestra ayuda?</h5>
      <p style="text-align: justify">¿Deseas <a href="inicio.php">conocer más</a> del Proyecto de Vida y Amor?</p>

      <h3>Servicios</h3>
      <p style="text-align: justify">Nuestros servicios son las 24 Hrs. del día, todo el año, si deseas más informes <a href="ubicacion.php">contactanos,</a> con gusto un operador te atendera.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="tratamientos.php">Tratamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="psicoterapia.php">Terapias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consejeria.php">Consejería</a>
        </li>

      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2 style="text-align: center">Terapia Cognitivo Conductual</h2>

      <p style="text-align: justify"><br>Es un tratamiento psicológico orientada a la acción en la que el terapeuta y el paciente trabajan en equipo para identificar y resolver problemas, además asume que los patrones de pensamiento mal adaptativos o erróneos causan un comportamiento desadaptativo (comportamiento contraproducente que interfiere con la vida diaria) y emociones “negativas”. Los terapeutas ayudan a los pacientes a superar sus dificultades a través de un tratamiento enfocado en la modificación de patrones de pensamiento, de modo que se obtenga la modificación del comportamiento y el estado emocional.</p>
      <h5>¿Cómo es la terapia?</h5>
      <p style="text-align: justify"><br>Un terapeuta de cognitivo-conductual intentará explorar los vínculos entre los pensamientos y las emociones que ocurren antes de las conductas disruptivas en personas con alguna enfermedad mental o adicción. Al establecer estas conexiones, las personas aprenden a identificar y cambiar patrones de pensamiento negativos o inapropiados, y como consecuencia, pueden manejar los comportamientos relacionados con su padecimiento. Al explorar estos patrones de pensamiento que conducen a acciones autodestructivas y las creencias que dirigen estos pensamientos, los pacientes pueden modificar sus patrones de pensamiento de modo que incrementen su capacidad de lidiar con el mundo.</p>
      <h5>Objetivo de la terapia</h5>
      <p style="text-align: justify"><br>El trabajo que se realiza durante las sesiones consiste en ayudar a las personas a resolver sus problemas de la vida real y enseñarles a modificar su pensamientos, comportamiento y emociones.  De este modo, la meta es reconocer pensamientos negativos y remplazarlos con pensamientos positivos, que darán lugar a comportamientos favorables para la persona.</p>
      <br>
      <h2 style="text-align: center">Terapia Gestalt</h2>
      <br>
      <p style="text-align: justify"> La terapia Gestalt se enfoca más en los procesos que en los contenidos. Pone énfasis sobre lo que está sucediendo, se está pensado y sintiendo en el momento, más que en el pasado. En este sentido, se habla del aquí y ahora, no para dejar de lado la historia de la persona, sino que esta historia se mira desde el presente, cómo se viven, afectan, etc., los hechos pasados a día de hoy. La persona es quien es, entre otros, por lo que ha vivido.</p>
      <h5>¿Cómo es la terapia?</h5>
      <br>
      <p style="text-align: justify">La Terapia Gestalt se posiciona desde una perspectiva holística en la concepción del ser humano, integrando sus diferentes dimensiones, sensoriales, afectivas, intelectuales, sociales y espirituales, en una vivencia global donde la experiencia es sentida corporalmente y puede ser traducida a palabras, existiendo un carácter bidireccional, las palabras pueden ser sentidas corporalmente.</p>
      <h5>Objetivo de la terapia</h5>
      <p style="text-align: justify"><br>El objetivo general de esta terapia es la de adquirir una mayor consciencia para vivir el presente, aumentar la capacidad de aceptar la experiencia tal como es y fomentar la responsabilidad personal de todos los aspectos de la vida.<p>
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
</div>
</body>

</body>
</html>
