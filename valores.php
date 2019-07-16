<!DOCTYPE html>
<html lang="es">
<head>
  <title>Valores del Proyecto de Vida y Amor A.C.</title>
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
             <a class="nav-link  active w3-bar-item w3-button w3-right"  href="acercadenos.php" >Acerca de Nosotros</a>
             </li>
            <li class="nav-item">
            <a class="nav-link" href="servicios.php">Servicios</a>
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

<div class="header">
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
    <br><h1 style="text-align: center; ">Valores</h1>
    <p>Los valores son aquellas cualidades que se destacan en cada individuo y que, a su vez, le impulsan a actuar de una u otra manera porque forman parte de sus creencias, determinan sus conductas y expresan sus intereses y sentimientos.</p>
    <p>Se empezo a construccion xx/xx/20xx.</p>
    <p><br>Establecemos relaciones positivas con clientes y egresados basadas en el reconocimiento, el respeto y el apoyo continuo para el desarrollo de su potencial humano e institucional.<br>Nos comprometemos con nuestros clientes y sus familiares.<br>Ante todo actuamos con integridad.<br>Mejora continua hacia la excelencia en nuestros programas y servicios.<br>Congruencia institucional con los valores y estilo de vida que proponemos a nuestros clientes.<br>Responsabilidad social.</p>
    <div align="center">
     <img class="img-fluid" src="ejmplosimg/valorescol.png" alt="se muestra una de las actividades.html" width="400px">
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



