<!DOCTYPE html>
<html lang="es">
<head>
  <title>Alta Paciente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="imagenes/logotiposinfondo.png"> <!--FAVICON-->
 <!-- fuentes utilizadas  -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <!-- termino de fuentes utilizadas-->
</head>
<body>

  <!--Inicio Footer-->
  <?php include 'nav2.html'; ?>
<!--Final Foooter-->

 <style>
.vertical-menu {
  width: 310px;
  height: 460px;
  overflow-y: auto;
}

.vertical-menu a {
  background-color: #A3E4D7;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #48C9B0;
}

.vertical-menu a.active {
  background-color: #0E6251;
  color: white;
}
</style>

<style >
  #popup {
    visibility: hidden;
    opacity: 0;
    margin-top: 0px;
  }
  #popup:target {
    visibility:visible;
    opacity: 1;
    background-color: rgba(0,0,0,0.8);
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:0;
    z-index: 000;
    -webkit-transition:all 1s;
    -moz-transition:all 1s;
    transition:all 1s;
  }
  .popup-contenedor {
    position: relative;
    margin:7% auto;
    padding:10px 30px;
    background-color: #fafafa;
    color:#333;
    border-radius: 3px;
    width:50%;
  }
  a.popup-cerrar {
    position: absolute;
    top:3px;
    right:3px;
    background-color: #333;
    padding:7px 10px;
    font-size: 20px;
    text-decoration: none;
    line-height: 1;
    color:#fff;
  }

  a.popup-link {
      text-align: justify;
  }
</style>
</head>
<body>
  <div class="row">
    <div class="col-sm-3">
    </div>

      <div class="col-sm-8">
      <form action="grabarpaciente.php" method="post" accept-charset="utf-8">
        <h2 style="text-align: center">Alta Paciente</h2>
        <h3>Introducir datos:</h3>
        <form id="register-forms" action="conexion/grabarpaciente.php" method="post" role="form" style="display: none;">
          <div class="container">
            <form class="form-inline" action="conexion/modificar.php" method="post">
              <span class="input-group-addon"><label for="email2" class="mb-2 mr-sm-2">CURP</label></span>
              <input type="text" class="form-control mb-2 mr-sm-2" id="curp" placeholder="CURP" name="curp" style="text-transform: uppercase;">
              <label for="nombre2" class="mb-2 mr-sm-2">Nombre:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="nombre2" placeholder="Ingresa tu nombre" name="nombre2" style="text-transform: uppercase;">
          


              <label for="apepat" class="mb-2 mr-sm-2">Apellido Paterno:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa tu Apellido Paterno" name="apepat2" style="text-transform: uppercase;">
              <label for="apemat" class="mb-2 mr-sm-2">Apellido Materno:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="apepat" placeholder="Ingresa Apellido Materno" name="apepat2" style="text-transform: uppercase;">
              <label for="fechanacimiento" class="mb-2 mr-sm-2">Fecha de Nacimiento:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="fechanacimiento" placeholder="Ingresa Fecha de Nacimiento" name="fechanacimiento" style="text-transform: uppercase;">
              <label for="idestado" class="mb-2 mr-sm-2">Estado de procedencia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="idestado" placeholder="Ingresa Estado de Procedencia" name="idestado" style="text-transform: uppercase;">
              <label for="idcolonia" class="mb-2 mr-sm-2">Colonia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="idcolonia" placeholder="Ingresa Colonia" name="idcolonia" style="text-transform: uppercase;">
              <label for="calle" class="mb-2 mr-sm-2">Calle:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="calle" placeholder="Ingresa Calle" name="calle" style="text-transform: uppercase;">
              <label for="refe" class="mb-2 mr-sm-2">Referencia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="refe" placeholder="Ingresa Referencia" name="refe" style="text-transform: uppercase;">
              <label for="edad" class="mb-2 mr-sm-2">Edad:</label>
              <input type="range" name="edad" min="18" max="99" step="1" value="30">
              <label for="sange" class="mb-2 mr-sm-2">Tipo de sangre:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="sange" placeholder="Ingresa Tipo de Sangre" name="sange" style="text-transform: uppercase;">
              <div class="form-group" id="registro">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btnmodif">Registrar</button>
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btnmodif">Modificar</button>
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btnmodif">Eliminar</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </form>
      </form>
      </div>

      </div>
    </div>


  <!--Inicio Footer-->
  <?php include 'footer-distribuido.html'; ?>
<!--Final Foooter-->
</body>

</html>
  <script type="text/javascript">
      enviarDatosRegistro();
      //login();
      //hacerUpdate();

      //ajax para guardar los datos del registro.
      function enviarDatosRegistro(){
        $('#register-form').submit(function(e){
          //evitar pagina se recargue
          e.preventDefault();
          //meter todos los datos del formulario de un golpe
          var frmRegistro = $("#register-forms").serialize();
          //metodos ajax
          $.ajax({
            method: "POST",
            url:    "conexion/grabarpaciente.php",
            data:   frmRegistro,
            beforeSend: function(){
              //colocamos icono de recarga
              alert(frmRegistro);
              $("#registrando").css("display","block");
            }
          }).done(function(data) {//true
            //si se realizo el envio de ftp datos
            //se muestra lo que ponga
            //alert(data);
            alert(data);
            //var mst = data;
            //registroCorrecto(mst);
          }).fail(function(){//false
            limpiarFormularioRegistro(frmRegistro);
          });
        });
      }
      //borrar el formulario y variables.
      function limpiarFormularioRegistro(form){
        setTimeout(function(){
              //poner el icono aqui que espere
              $("#id01").hide();
              form='';
            $('#usuario2')[0].reset();
            $("#alertaBuena").css("display","none");
              $("#alertaMala").css("display","none");
          },2000);
      }

      //funcion de cola de efectos y ventana de registro exitoso
      function registroCorrecto(mst,frmLogin){
        if (mst == 'bien'){
          //se muestra la ventana de contraseña de registro éxitoso una vez que la variable get sea igual a bien
          setTimeout(function() {
                  $("#registrando").css("display","none");
              $("#alertaBuena").css("display","block");
          }, 3000);
              setTimeout(function() {
                  $("#alertaBuena").css("display","none");
                  $("#alertaMala").css("display","none");
              }, 5000);
              limpiarFormularioRegistro(frmLogin);
          }else if(mst == 'dupla'){//de lo contrario 
              regisroDuplicadoIncorrecto(frmLogin);
          }
      }         
    </script> 


