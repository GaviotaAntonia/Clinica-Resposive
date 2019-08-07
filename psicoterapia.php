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
        background-color: #1a5e0d;
        color: #ffffff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        text-align: right;
        }

        .menu li:hover {
          background-color: #008f36;
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
        <a href="tratamientos.php"><li id="12">Tratamientos</li></a>
        <a href="psicoterapia.php"><li id="12">Terapias</li></a>
        <a href="consejeria.php"><li id="12">Consejería</li></a>
      </ul>
    </div>
  <!--BODY-->

  <div class="container" style="margin-top:30px">
    <div class="row">
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
          background-color: #4b8567;
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
              <img src="imagenes/canva/inf2.png" />
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
