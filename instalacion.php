<!DOCTYPE html>
<html lang="es">
<head>
  <title>Instalaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">

  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png">

   <!--FAVICON-->

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
  <div class="header"></div>
  <div class="row" id="elmenu">
    <div class="col-3 menu">
      <ul>
       <a href="instalacion.php"><li>Instalaciones</li></a>
       <a href="dormitorios.php"><li>Dormitorios</li></a>
        <a href="actividades.php"><li>Actividades</li></a>
     </ul>
    </div>
    <div class="col-9">
      <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title" style="text-align: center;">Instalaciones</h1>
        </div>
        <p style="text-align: justify">Nuestras instalaciones cuentan con salidas de emergencia, extintores, un sistema de Videovigilancia que opera las 24
        hrs. del dìa, dormitorios còmodos, regaderas, baños, tinas de baño, gimnasio, auditorio, enfermeria, ambulancia y un persoal altamente capacitado, todo esto para
      para poder brindarle a su familiar todas las comodidades necesarias durante su estadia con nosotros, asì como para usted cuando asista al dìa de visita. </p>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="imagenes/via1.png" class="img-responsive" width="300px">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="imagenes/via2.png" class="img-responsive" width="300px">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="imagenes/intalacion.png" class="img-responsive" width="300px">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagenes/via3.png" class="img-responsive" width="300px">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="imagenes/via5.png" class="img-responsive" width="300px">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagenes/via6.png" class="img-responsive" width="300px">
            </div>
        </div>
    </div>
    </div>
  </div>

  <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
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

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }


    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }});

  </script>
<!--final JAVASCRIPT-->

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
       $(".item4").click(function(){
      $("#myCarousel").carousel(3);
       })
       $(".item5").click(function(){
      $("#myCarousel").carousel(4);
       })

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
