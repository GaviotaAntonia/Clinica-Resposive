
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servicios/Consejería</title>
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
          <a class="nav-link" href="psicoterapia.php">Terapias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="consejeria.php">Consejería</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <div class="col-sm-8"><br>

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
          background-color: #8e44ad;
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
              <img src="imagenes/consejo.png" />
              <div class="mascara">
                  <h2>¿Qué hace un consejero en adicciones?</h2>
                  
                     <p style="text-align: justify">Un consejero en adicción es un profesional de salud mental que se especializa en ayudar a los pacientes con adicciones. Estos consejeros pueden trabajar en el sector privado, como parte de las clínicas de tratamiento de adicciones, en las terapias de grupo, y en los hospitales, para ayudar a los pacientes con una amplia gama de cuestiones. Para ser consejero en adicción, alguien debe generalmente completar un programa de formación que incluye la familiarización con la dependencia química, la psicología, las cuestiones legales, y varios tratamientos disponibles para las personas que luchan con las adicciones.</p>

                     <p style="text-align: justify">Algunos consejeros de adicción optan por especializarse en un área particular de interés, mientras que otros cubren una gama larga de adicciones. En todos los casos, los consejeros de adicción se reúnen con los pacientes en entornos privados y de grupo para proporcionar terapia, hablar de temas actuales y desarrollar planes de tratamiento. Los consejeros de dependencias también pueden trabajar con miembros de la familia y facilitar la comunicación familiar, además de crear programas de rehabilitacion ayudar a las personas a lidiar con la adicción. </p>
              </div>
         </div>
    </div>
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
