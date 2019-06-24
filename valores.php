<!DOCTYPE html>
<html lang="es">
<head>
  <title>Valores de la Clinica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" type="image/png" href="ejmplosimg/logoclini.png"> <!--FAVICON-->


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
      <img src="ejmplosimg/logoclini.png" alt="logo" style="width:40px;">
    </a>
    <a class="navbar-brand" href="inicio.html">CLINICA</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
     </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav">
            <li class="nav-item">
             <a class="nav-link  active w3-bar-item w3-button w3-right"  href="acercadenos.html" >Acerca de Nosotros</a>
             </li>
            <li class="nav-item">
            <a class="nav-link" href="servicios.html">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ubicacion.html">Ubicacion</a>
            </li>    
            <li class="nav">
              <a class="nav-link" href="clinica.html">Clinica</a>
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
      <a href="mision.html"><li id="12">Mision</li></a>
      <a href="vision.html"><li id="12">Vision</li></a>
      <a href="valores.html"><li id="12">Valores</li></a>
      <a href="quiesom.html"><li id="12">¿Quienes Somos?</li></a>
      
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
  <div class="jumbotron text-left" style="margin-bottom:0">
    <div class="d-flex mb-3">
      <div class="p-2 flex-fill bg">Redes Sociales<br>
        <a href="http://www.twitter.com/"><img src="ejmplosimg/logootwit.png"><span class="info">Seguinos en Twitter</span></li></a><br>
        <a href="http://www.instagram.com/"><img src="ejmplosimg/logoejemplo.png"><span class="info">   Seguinos en Instagram</span></li></a><br>
        <a href="https://www.youtube.com/"><img src="ejmplosimg/logoyoutube.png"><span class="info">Suscribete a nustro canal</span></li></a><br>
        <a href="http://www.facebook.com/"><img src="ejmplosimg/logooface.png" alt=""><span class="info">Dale me gusta a nuestra Facebook</span></a></li>
      </div>

        <div class="p-2 flex-fill bg">Clinica<br>
        <a href="instalacion.html"><span class="info">Instalaciones</span></li><br>
        <a href="dormitorios.html"><span class="info">Dormitorios</span></li></a><br>
        <a href="actividades.html"><span class="info">Actividades</span></li></a><br>
      </div>

         <div class="p-2 flex-fill bg">Servicios<br>
        <a href="tratamientos.html"><span class="info">Tratamientos</span></li></a><br>
        <a href="psicoterapia.html"><span class="info">Psicoterapia</span></li></a><br>
        <a href="consejeria.html"><span class="info">Consejeria</span></li></a><br>
      </div>
        
        <div class="p-2 flex-fill bg">Mantente en Contacto<br>
        <span class="info">Telefono: (55) XXXX-XXXX</span><br>
        <a href="XXX@hotmail.com"><span class="info">Correo: XXXXXX@hotmail.com</span></a><br>
        <a href="#"><span class="info">Direccion</span></a>
      </div>
        
          <div class="p-2 flex-fill bg">Seguridad y Privacidad <br>
            <a href="#"><span class="info-seg">Términos de uso </span></a><br>
            <a href="#"><span class="info-seg">Política de privacidad</span></a>
      </div>
      

    </div>
  </div>

<!--FINAL FOOTER-->

<!--footer estatico-->
  <div class="footer">
    <br><p style="text-align: center;">&copy; 2019. Todos los derechos reservados</p>
  </div>
<!--Final Foooter estatico-->


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



