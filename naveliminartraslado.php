<!DOCTYPE html>
<html lang="es">
<head>
  <title>Acerca del Proyecto de Vida y Amor A.C..</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles-merged.css">
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#registro').click(function(){
        if($("#correo2").val().indexOf('@', 0) == -1 || $("#correo2").val().indexOf('.', 0) == -1) {
            alert('El correo electrónico introducido no es correcto.');
            return false;
        }

        alert('El email introducido es correcto.');
    });

    var pass1 = $('[name=con1]');
  var pass2 = $('[name=con2]');
  var confirmacion = "Las contraseñas si coinciden";
  var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
  var negacion = "No coinciden las contraseñas";
  var vacio = "La contraseña no puede estar vacía";
  //oculto por defecto el elemento span
  var span = $('<span></span>').insertAfter(pass2);
  span.hide();
  //función que comprueba las dos contraseñas
  function coincidePassword(){
  var valor1 = pass1.val();
  var valor2 = pass2.val();
  //muestro el span
  span.show().removeClass();
  //condiciones dentro de la función
  if(valor1 != valor2){
  span.text(negacion).addClass('negacion'); 
  }
  if(valor1.length==0 || valor1==""){
  span.text(vacio).addClass('negacion');  
  }
  if(valor1.length<6 || valor1.length>10){
  span.text(longitud).addClass('negacion');
  }
  if(valor1.length!=0 && valor1==valor2){
  span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
  }
  }
  //ejecuto la función al soltar la tecla
  pass2.keyup(function(){
  coincidePassword();
  });
});

</script>

  <link rel="shortcut icon" type="image/png" href="imagenes/favicon.png"> <!--FAVICON-->

 <!-- fuentes utilizadas  -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <!-- termino de fuentes utilizadas-->
</head>


<!--NAVBAR DE INCIO-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-right ">

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
       <form class="form-inline" method="POST" action="conexion/borrar.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Eliminar registro" name="id">
    <button class="btn btn-success" type="submit" value="Eliminar" name="B1">Eliminar</button>
  </form>
        </ul>
    </div>
  </nav>
<!--FINAL NAVBAR-->



</html>

