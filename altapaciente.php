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
    <div class="col-sm-2">
    </div>

      <div class="col-sm-8">
      <form action="conexion/grabarpaciente.php" method="post" accept-charset="utf-8">
        <h2 style="text-align: center">Alta Paciente</h2>
        <h3 style="text-align: center;">Introducir datos:</h3>
        <form id="register-forms" action="conexion/grabarpaciente.php" method="post" role="form" style="display: none;">
          <div class="container">
            <form class="form-inline">
              <span class="input-group-addon">
              <label for="curp" class="mb-2 mr-sm-2">CURP</label></span>
              <input type="text" class="form-control mb-2 mr-sm-2" id="curp" placeholder="CURP" name="curp" style="text-transform: uppercase;">
              <label for="nombre2" class="mb-2 mr-sm-2">Nombre:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="nombre2" placeholder="Ingresa tu nombre" name="nombre2" style="text-transform: uppercase;">
            <form>
              <div class="row">
                <div class="col">
                  <label for="nombre2" class="mb-2 mr-sm-2">Apellido Paterno:</label>
                  <input type="text" class="form-control" id="apepat2" placeholder="Apellido Paterno" name="apepat2">
                </div>
                <div class="col">
                  <label for="apepat2" class="mb-2 mr-sm-2">Apellido Materno:</label>
                  <input type="text" class="form-control" id="apemat2" placeholder="Apellido Materno" name="apemat2">
                </div>
              </div>
            </form>
            <label for="fechanacimiento" class="mb-2 mr-sm-2">Fecha de Nacimiento:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="fechanacimiento" placeholder="DD/MM/AAAA" name="fechanacimiento" style="text-transform: uppercase;">
       <?php include 'conexion\conexion.php' ?>


            <form method="post">
              <div class="row">
                <div class="col">
                  <label for="inputState">Estado</label>
                  <select class="form-control" name="estado" onchange="submit()">
                    <?php 
                    $sql="SELECT * from estado";
                    $rec=mysqli_query($conexion,$sql);
                    while ($row=mysqli_fetch_array($rec)) {
                      echo "<option value='".$row['id_estado']."' ";
                      if ($_POST['estado']==$row['id_estado'])
                        echo " SELECTED";
                      echo ">";
                      echo $row['estado'];
                    }
                     ?>
                  </select>
                </div>

                <div class="col">
                  <label for="inputState">Colonia</label>
                    <select class="form-control" name="colonia" onchange="submit()">
                   <?php 
                   $sql="SELECT * from colonia";
                    $recs=mysqli_query($conexion,$sql);
                    while ($row=mysqli_fetch_array($recs)) {
                      echo "<option value='".$row['id_colonia']."' ";
                      if ($_POST['colonia']==$row['id_colonia'])
                        echo " SELECTED";
                      echo ">";
                      echo $row['colonia'];
                    }
                     ?>
    </select>
                    </select>
                  </div>
                </div>
            </form>

              <label for="calle" class="mb-2 mr-sm-2">Calle:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="calle" placeholder="Ingresa Calle" name="calle" style="text-transform: uppercase;">
              <label for="refe" class="mb-2 mr-sm-2">Referencia:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="refe" placeholder="Ingresa Referencia" name="refe" style="text-transform: uppercase;">
              


              <form>
              <div class="row">
                <div class="col">
                  <label for="inputState">Edad</label>
                  <select id="inputState" class="form-control" name="edad">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select> 

                </div>
                <div class="col">
                  <label for="inputState">Tipo de Sangre</label>
                    <select id="inputState" class="form-control" name="grabarsangre">
                      <option selected>Elige Opción</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>              
                    </select>
                  </div>
                </div>
            </form>


              <BR><BR>
              <!--<input type="text" class="form-control mb-2 mr-sm-2" id="sange" placeholder="Ingresa Tipo de Sangre" name="sange" style="text-transform: uppercase;">-->
              
              <div class="form-group" id="registro">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-dark" style="text-align:center;" name="btngrabar">Registrar</button>
          
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
