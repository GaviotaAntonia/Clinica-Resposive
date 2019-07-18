<!DOCTYPE html>
<html lang="es">
<head>
  <title>|Inicio clinica|</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <!--FAVICON-->

  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png"> 

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


<!-- carrusel-->
  <div class="container mt-3">
    <!---<h2>Activate Carousel with JavaScript</h2>-->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
      </ul>
      
      <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="ejmplosimg/carrusel1.jpg" alt="Imagen de clinica ejemplo" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="ejmplosimg/carr2.jpg" alt="segunda imagen de ejemplo de la clinica " width="1100" height="500">
          </div>
          <div class="carousel-item">
          <img src="ejmplosimg/carruse3.jpg" alt="tercera imagen de ejemplo de clinica " width="1100" height="500">
          </div>
       </div>
  
      <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel">
        <span class="carousel-control-next-icon"></span>
        </a>
      </div>
  </div>
<!-- FINAL DE CARRUSEL-->

<!--comentarios especialistas-->
	<section>
 	 <div class="container mt-3">
  		<h2>Nuestros Especialistas</h2>
  		<p>El 90% de los doctores tienen titulo y son especialistas en su area:</p>
  			<div class="media border p-3">
    			<img src="ejmplosimg/ejemdoc/doc1.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    			<div class="media-body">
      			<h4>Dr. Especialista en bla bla bla<small><br><i>Posted on February 19, 2016</i></small></h4>
      			<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>      
    			</div>
  			</div>
  	 </div>
  	<div class="container mt-3">
  		<h2>Recomendaciones de algunos pacientes</h2><br>
  			<div class="media border p-3">
    			<img src="ejmplosimg/ejemdoc/ano1.jpg" alt="Anonimo 1" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    			<div class="media-body">
     			 	<h4>Paciente xxxxx<small>
      				<br><i>Posted on February 19, 2016</i></small></h4>
      				<p>La clinica bla bla.</p>
      				<p>las instalaciones...</p>
      				<div class="media p-3">
        				<img src="ejmplosimg/ejemdoc/doc2.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
        				<div class="media-body">
         		 		<h4>Dr. Especialista en...<small><br><i>Posted on February 20 2016</i></small></h4>
          				<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>
        				</div>
      				</div>  
    			</div>
  			</div>
  	</div>
	</section>
<!--fin de comentarios especialistas-->

<br><br>

<!--Cuadros con iconos antes del footer-->
	<div class="container">
  		<div class="row">
   		 <div class="col-sm-4" style=" border-style: groove;">
      		<div align="center">
        		<br><img src="ejmplosimg/gps.png" alt="">
         		<h3>Siempre cerca de ti</h3>
     			 <p style="text-align: center">Busca nuestras clinicas cerca de ti ...</p>
      		</div>
    	  </div>
     
    <div class="col-sm-4" style="border-style: groove;">
      <div align="center">
        <br>
        <img src="ejmplosimg/ayuda.png" alt="">
         <h3>¿Necesitas Ayuda?</h3>
      <p style="text-align: center;">Contactate con nosotros estamos dispuestos a ayudarte</p>
      </div>
    </div>
      
  		<div class="col-sm-4" style="border-style: groove;">
      		<div align="center"><br>
        	<img src="ejmplosimg/contact.png" alt="">
         	<h3>Contactate</h3>
      		<p style="text-align: center;">Siempre hay alguien que puede contestar tus dudas</p>
      		</div>
    	</div>

  		</div>
	</div>
<!--fin de los cuadros -->

<br><br>

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
