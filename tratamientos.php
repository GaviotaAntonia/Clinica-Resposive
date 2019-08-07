<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servicios/Tratamientos</title>
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
          width: 1000px;
          height: 300px;
          float: left;
          overflow: hidden;
          position: relative;
          text-align: center;
          font-weight: bold;
          cursor: default;
          background: #fff;
      }
          .contenedor-img .mascara,.contenedor-img .contenido {
              width: 865px;
              height: 300px;
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
              margin: 0px 0 0 0
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
              <img src="imagenes/canva/trat1.png"  />
              <div class="mascara">
                  <h2>Alcoholismo</h2>
                  <p><p style="text-align: center">Consumo crónico y continuado de alcohol que se caracteriza por un deterioro
                     del control sobre la bebida, episodios frecuentes de intoxicación y compulsión por el consumo a pesar de sus consecuencias adversas.</p>
              </div>
         </div>

          <div class="contenedor-img banner">
              <img src="imagenes/canva/trat2.png"  />
              <div class="mascara">
                  <h2>Drogadicción</h2>
                  <p><p style="text-align: center">Consumo repetido de una o varias sustancias psicoactivas, hasta el punto de que el consumidor se intoxica periódicamente o de forma continua, muestra un deseo compulsivo de consumir la sustancia (o las sustancias) preferida, tiene una enorme dificultad para interrumpir voluntariamente o modificar el consumo de la sustancia y se muestra decidido a obtener sustancias psicoactivas por cualquier medio y a pesar de las consecuencias negativas que esto tiene.</p>
              </div>
         </div>

         <div class="contenedor-img banner">
              <img src="imagenes/canva/trat3.png" />
              <div class="mascara">
                  <h2>Farmacodependencia</h2>
                  <p><p style="text-align: center">Consumo repetido de uno o varios medicamentos sin preescripción, como analgésicos derivados del opio que puede provocar un deseo compulsivo de consumo acompañado de una enorme dificultad para interrumpir voluntariamente o modificar el consumo del medicamento a pesar de los riesgos y daños que esto puede provocar.</p>
              </div>
         </div>

         <div class="contenedor-img banner">
              <img src="imagenes/canva/trat4.png"  />
              <div class="mascara">
                  <h2>Tabaquismo</h2>
                  <p><p style="text-align: center">Se refiere al trastorno de dependencia al tabaco a adicción al tabaco, caracterizado por el deseo compulsivo de fumar, acompañado de una enorme dificultad para interrumpir voluntariamente o modificar el consumo de tabaco a pesar de las consecuencias negativas a la salud que este habito conlleva.</p>
              </div>
         </div>

         <div class="contenedor-img banner">
              <img src="imagenes/canva/trat5.png"  />
              <div class="mascara">
                  <h2>Trastornos alimenticios</h2>
                  <p><p style="text-align: center">Son un conjunto de trastornos mentales que se caracterizan por una alteración importante de la conducta alimentaria, los trastornos mas frecuentes son la bulimia y la anorexia. La bulimia se caracteriza por episodios de alimentación compulsiva conocidos como atracones, los cuales son seguidos de conductas para intentar compensar el atracón como, hacer ejercicio, tomar mucha agua o evitar realizar ciertas comidas. La anorexia se caracteriza por una fuerte aversión a subir de peso y a comer, por lo cual quien lo padece procura evitar comer en la medida de lo posible, utiliza laxantes o puede provocar el vomito para evitar el aumento de peso.</p>
              </div>
         </div>

        <div class="contenedor-img banner">
              <img src="imagenes/canva/trat6.png"  />
              <div class="mascara">
                  <h2>Adicción 3.0</h2>
                  <p><p style="text-align: center">Este concepto aplicado al uso de diversas tecnologías hace referencia al el uso excesivo o compulsivo de aparatos como videojuegos o telefonos hasta el punto de interferir con la vida personal y las actividades diarias del sujeto que los utiliza.</p>
              </div>
         </div>

          <div class="contenedor-img banner">
              <img src="imagenes/canva/trat7.png"  />
              <div class="mascara">
                  <h2>Codependencia</h2>
                  <p><p style="text-align: center">Suele referirse al pariente, amigo íntimo o compañero de una persona dependiente del alcohol o de las drogas, cuyas acciones tienden a perpetuar la dependencia de esa persona, retrasando así el proceso de recuperación. Este concepto se ha utilizado también para designar a una persona que desarrolla relaciones conflictivas que involucran maltrato a pesar de lo cual la persona que recibe maltrato tiene gran dificultad para terminar la relación.</p>
              </div>
         </div>

          <div class="contenedor-img banner">
              <img src="imagenes/canva/trat8.png"  />
              <div class="mascara">
                  <h2>Ansiedad</h2>
                  <p><p style="text-align: center">Trastorno mental en el cual una persona a menudo está preocupada o ansiosa respecto a muchas cosas y le parece difícil controlar esta ansiedad. El trastorno de ansiedad puede ser generalizado o estar dirigido a estímulos específicos como hablar en publico o sentir miedo a animales y situaciones diversas.</p>
              </div>
         </div>

          <div class="contenedor-img banner">
              <img src="imagenes/canva/trat9.png"  />
              <div class="mascara">
                  <h2>Depresión</h2>
                  <p><p style="text-align: center">Trastorno mental frecuente, que se caracteriza por la presencia de tristeza, pérdida de interés o placer, sentimientos de culpa o falta de autoestima, trastornos del sueño o del apetito, sensación de cansancio y falta de concentración. La depresión puede llegar a hacerse crónica o recurrente y dificultar sensiblemente el desempeño en el trabajo o la escuela y la capacidad para afrontar la vida diaria. En su forma más grave, puede conducir al suicidio.</p>
              </div>
         </div>

          </body>

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
