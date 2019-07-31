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
          <a class="nav-link active" href="tratamientos.php">Tratamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="psicoterapia.php">Terapias</a>
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
          background-color: #2dac68;
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
              <img src="imagenes/Alcholismo.png" />
              <div class="mascara">
                  <h2>Alcoholismo</h2>
                  <p><p style="text-align: center">Consumo crónico y continuado de alcohol que se caracteriza por un deterioro
                     del control sobre la bebida, episodios frecuentes de intoxicación y compulsión por el consumo a pesar de sus consecuencias adversas.</p>
              </div>
         </div>
          
          <div class="contenedor-img banner">
              <img src="imagenes/Drogadicción.png" />
              <div class="mascara">
                  <h2>Drogadicción</h2>
                  <p><p style="text-align: center">Consumo repetido de una o varias sustancias psicoactivas, hasta el punto de que el consumidor se intoxica periódicamente o de forma continua, muestra un deseo compulsivo de consumir la sustancia (o las sustancias) preferida, tiene una enorme dificultad para interrumpir voluntariamente o modificar el consumo de la sustancia y se muestra decidido a obtener sustancias psicoactivas por cualquier medio y a pesar de las consecuencias negativas que esto tiene.</p> 
              </div>
         </div>

         <div class="contenedor-img banner">
              <img src="imagenes/Farmacodependencia.png" />
              <div class="mascara">
                  <h2>Farmacodependencia</h2>
                  <p><p style="text-align: center">Consumo repetido de uno o varios medicamentos sin preescripción, como analgésicos derivados del opio que puede provocar un deseo compulsivo de consumo acompañado de una enorme dificultad para interrumpir voluntariamente o modificar el consumo del medicamento a pesar de los riesgos y daños que esto puede provocar.</p>
              </div>
         </div>

         <div class="contenedor-img banner">
              <img src="imagenes/Tabaquismo.png" />
              <div class="mascara">
                  <h2>Tabaquismo</h2>
                  <p><p style="text-align: center">Se refiere al trastorno de dependencia al tabaco a adicción al tabaco, caracterizado por el deseo compulsivo de fumar, acompañado de una enorme dificultad para interrumpir voluntariamente o modificar el consumo de tabaco a pesar de las consecuencias negativas a la salud que este habito conlleva.</p>
              </div>
         </div>

         <div class="contenedor-img banner">
              <img src="imagenes/Trastornos alimenticios.png" />
              <div class="mascara">
                  <h2>Trastornos alimenticios</h2>
                  <p><p style="text-align: center">Son un conjunto de trastornos mentales que se caracterizan por una alteración importante de la conducta alimentaria, los trastornos mas frecuentes son la bulimia y la anorexia. La bulimia se caracteriza por episodios de alimentación compulsiva conocidos como atracones, los cuales son seguidos de conductas para intentar compensar el atracón como, hacer ejercicio, tomar mucha agua o evitar realizar ciertas comidas. La anorexia se caracteriza por una fuerte aversión a subir de peso y a comer, por lo cual quien lo padece procura evitar comer en la medida de lo posible, utiliza laxantes o puede provocar el vomito para evitar el aumento de peso.</p>
              </div>
         </div>

        <div class="contenedor-img banner">
              <img src="imagenes/Adicción.png" />
              <div class="mascara">
                  <h2>Adicción 3.0</h2>
                  <p><p style="text-align: center">Este concepto aplicado al uso de diversas tecnologías hace referencia al el uso excesivo o compulsivo de aparatos como videojuegos o telefonos hasta el punto de interferir con la vida personal y las actividades diarias del sujeto que los utiliza.</p>
              </div>
         </div>

          <div class="contenedor-img banner">
              <img src="imagenes/Codependencia.png" />
              <div class="mascara">
                  <h2>Codependencia</h2>
                  <p><p style="text-align: center">Suele referirse al pariente, amigo íntimo o compañero de una persona dependiente del alcohol o de las drogas, cuyas acciones tienden a perpetuar la dependencia de esa persona, retrasando así el proceso de recuperación. Este concepto se ha utilizado también para designar a una persona que desarrolla relaciones conflictivas que involucran maltrato a pesar de lo cual la persona que recibe maltrato tiene gran dificultad para terminar la relación.</p>
              </div>
         </div>

          <div class="contenedor-img banner">
              <img src="imagenes/Ansiedad.png" />
              <div class="mascara">
                  <h2>Ansiedad</h2>
                  <p><p style="text-align: center">Trastorno mental en el cual una persona a menudo está preocupada o ansiosa respecto a muchas cosas y le parece difícil controlar esta ansiedad. El trastorno de ansiedad puede ser generalizado o estar dirigido a estímulos específicos como hablar en publico o sentir miedo a animales y situaciones diversas.</p>
              </div>
         </div>
          
          <div class="contenedor-img banner">
              <img src="imagenes/Depresión.png" />
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
