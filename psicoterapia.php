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

     <style>
      body
      /*estilos base*/
      .contenedor-img {
          width: 800px;
          height: 2000px;
          float: left;
          overflow: hidden;
          position: relative;
          text-align: center;
          font-weight: bold;
          cursor: default;
          background: #fff;
      }
          .contenedor-img .mascara,.contenedor-img .contenido {
              width: 800px;
              height: 2000px;
              position: absolute;
              overflow: hidden;
              top: 0;
              left: 0
          }
          .contenedor-img img {
              display: block;
              position: relative;

          }
          .contenedor-img h2 {
              text-transform: uppercase;
              color: #fff;
              text-align: center;
              position: relative;
              font-size: 20px;
              padding: 10px;
              background: rgba(0, 0, 0, 0.9);
              margin: 20px 0 0 0
          }
          .contenedor-img p {
              font-size: 17px;
              position: relative;
              color: #fff;
              padding: 5px 10px 5px;
              text-align: center
          }
          .contenedor-img a.link {
              display: inline-block;
              text-decoration: none;
              padding: 7px 14px;
              background: #222;
              color: #fff;
              text-transform: uppercase;
              box-shadow: 0 0 1px #000
          }
              .contenedor-img a.link:hover {
                  box-shadow: 0 0 5px #000
              }


      /*banner*/
      .banner img {
          transition: all 0.2s linear;
      }
      .banner .mascara {
          opacity: 0;
          background-color: #2874a6;
          transition: all 0.3s ease-in-out;
      }
          .banner h2 {
              transform: translateX(-200px);
              opacity: 0;
              transition: all 0.7s ease-in-out;
          }
          .banner p {
              transform: translateX(200px);
              opacity: 0;
            transition: all 0.4s linear;
          }
          .banner a.link{
              opacity: 0;
            transition: all 0.4s ease-in-out;
              transform: translateY(100px)
          }
          .banner:hover img {
            transform: scale(1.1);
          }
          .banner:hover .mascara {
            opacity: 1;
          }
          .banner:hover h2,
          .banner:hover p,
          .banner:hover a.link {
              opacity: 1;
              transform: translateX(0px);
          }
          .banner:hover p {
              transition-delay: 0.1s;
          }
          .banner:hover a.link {
              transition-delay: 0.2s;
              transform: translateY(0px);
          }
          </style>
         </head>
          <body>

         <div class="contenedor-img banner">
              <img src="imagenes/Terapias.png" />
              <div class="mascara">
                  <h2>Terapias</h2>
                  <p><p style="text-align: center">Terapia Cognitivo-Conductual</p>
                     <p style="text-align: justify">Un terapeuta de cognitivo-conductual intentará explorar los vínculos entre los pensamientos y las emociones que ocurren antes de las conductas disruptivas en personas con alguna enfermedad mental o adicción. Al establecer estas conexiones, las personas aprenden a identificar y cambiar patrones de pensamiento negativos o inapropiados, y como consecuencia, pueden manejar los comportamientos relacionados con su padecimiento. Al explorar estos patrones de pensamiento que conducen a acciones autodestructivas y las creencias que dirigen estos pensamientos, los pacientes pueden modificar sus patrones de pensamiento de modo que incrementen su capacidad de lidiar con el mundo.</p>

                     <p style="text-align: center">Terapia Humanista</p>
                     <p style="text-align: justify"> La psicoterapia humanista trabaja con las experiencias presentes, el sentimiento proveniente de la complejidad de las situaciones y sus dificultades. La terapia tiene como objetivo, la conceptualización del proceso de tratamiento en curso. Se toman las sensaciones del presente inmediato de naturaleza orgánica, y se guía la conceptualización. Este conjunto de sensaciones es fuente de significados y permite al paciente, formar conceptos y referirse a ella.</p>

                     <p style="text-align: center">Terapia Gestalt</p>
                     <p style="text-align: justify">La terapia Gestalt se enfoca más en los procesos que en los contenidos. Pone énfasis sobre lo que está sucediendo, se está pensado y sintiendo en el momento, más que en el pasado. En este sentido, se habla del aquí y ahora, no para dejar de lado la historia de la persona, sino que esta historia se mira desde el presente, cómo se viven, afectan, etc., los hechos pasados a día de hoy. La persona es quien es, entre otros, por lo que ha vivido.</p>

                     <p style="text-align: center">Musicoterapia</p>
                     <p style="text-align: justify">Según La Federación Mundial de Musicoterapia, se refiere al uso de la música y/o sus elementos (sonido, ritmo, melodía, armonía) realizado por un musicoterapeuta calificado con un paciente o grupo, en un proceso creado para facilitar, promover la comunicación, las relaciones, el aprendizaje, el movimiento, la expresión, la organización y otros objetivos terapéuticos relevantes, para así satisfacer las necesidades físicas, emocionales, mentales, sociales y cognitivas. Tiene como fin desarrollar potencialidades y/o restaurar las funciones del individuo de manera tal que éste pueda lograr una mejor integración intra y/o interpersonal y consecuentemente una mejor calidad de vida a través de la prevención, rehabilitación y tratamiento.</p>

                     <p style="text-align: center">Enseñanza de habilidades sociales y técnicas de asertividad</p>
                     <p style="text-align: justify">Podemos definir como habilidades sociales aquellas que permitan al individuo adaptarse al medio y desenvolverse adecuadamente, proporcionándole un nivel de autoestima adecuado y sintiéndose este positivo y optimista a nivel emocional. La asertividad será aquella que le permita al individuo relacionarse socialmente de manera positiva, motivando así una conducta proactiva que le lleve al sujeto a generalizar sus actuaciones en diversos ámbitos. </p>

                     <p style="text-align: center">Terapia de Tribuna</p>
                     <p style="text-align: justify">Este tipo de modelo no ha de aplicarse a población psicótica, ni psicopática, ni con riesgo de suicidio. Por el contrario, ha sido demostrada su eficacia con clientes que tienen un cuadro depresivo, ansioso, sufren problemas interpersonales, maltrato infantil y problemas de la vida cotidiana. El primer paso de este tratamiento, conlleva la formación de una relación de apoyo mediante reconocimiento, comprensión, y validación emocional de los problemas del paciente. Hay que reconocer sus emociones desde el inicio. A medida que la terapia progresa, el terapeuta se focaliza continuamente en los sentimientos problemáticos o dolorosos y utiliza el reflejo empático para subrayar el impacto emocional de la experiencia. Así, en lugar de evitación emocional, se entrena la focalización y el afrontamiento de la experiencia interna.</p>
              </div>
         </div>
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
