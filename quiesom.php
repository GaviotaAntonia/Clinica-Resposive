<!DOCTYPE html>
<html lang="es">
<head>
  <title>¿Quienes somos? Proyecto de Vida y Amor A.C.</title>
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
<!--Inicio Footer-->
  <?php include 'nav.html'; ?>
<!--Final Foooter-->

<!--BODY-->

<div class="header">

    <h3">gfa</h3>
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

    <h1 style="text-align: center;">¿Quienes somos?</h1>
    <p>HTML is the standard markup language for creating Web pages.<br>HTML stands for Hyper Text Markup Language. HTML describes the structure of Web pages using markup. HTML elements are the building blocks of HTML pages. HTML elements are represented by tags
    <br>HTML tags label pieces of content such as "heading", "paragraph", "table", and so on.Browsers do not display the HTML tags, but use them to render the content of the page</p>
    <p>El 80% de la información que se utiliza diariamente para realizar el trabajo no está en los sistemas transaccionales de las empresas.<br>Se estima que un empleado promedio consume entre un 25% y 30% de su tiempo buscando información. Esto significa que las empresas pierden mensualmente un 30% del dinero correspondiente al costo de sus empleados, sumado al lucro cesante derivado de este tiempo improductivo en los que los empleados no generan valor para la empresa.<br>Las organizaciones insumen gran cantidad de información para dar soporte a su operativa diaria; información generada internamente como proveniente de fuentes externas. Viven de esta información, memorandos, reportes, información de productos, análisis de mercados, contratos, artículos de interés, minutas de reunión, información interna, manuales y procedimientos, etc.<br> Pero su acceso no es siempre fácil. Si no está organizada, relacionada y distribuida de forma apropiada, no genera valor para el negocio, desaprovechando uno de los activos más importantes de la Empresa: El Conocimiento.</p>
    <div align="center">
      <img class="img-fluid" src="ejmplosimg/actividades/act4.jpg" alt="se muestra una de las actividades.html" width="400px">
    </div>
    <p>.<br>Las organizaciones insumen gran cantidad de información para dar soporte a su operativa diaria; información generada internamente como proveniente de fuentes externas. Viven de esta información, memorandos, reportes, información de productos, análisis de mercados, contratos, artículos de interés, minutas de reunión, información interna, manuales y procedimientos, etc.<br> Pero su acceso no es siempre fácil. Si no está organizada, relacionada y distribuida de forma apropiada, no genera valor para el negocio, desaprovechando uno de los activos más importantes de la Empresa: El Conocimiento.</p>
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



