
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
  <button type="button" class="btn" data-toggle="modal" data-target="#myModal2" style="color: black"><i class="fa fa-users"></i></button>  
</div>



      <!-- The Modal -->
      <div class="modal fade" id="myModal2">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title" style="text-align:center;">Bienvenido Padre o Tutor</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                      <div class="panel-body">
                  <div class="text-center">
                    <div class="row">
                      <div class="col-lg-12">
                        <form id="login-form" action="conexion/logueocontacto.php" method="post" role="form" style="display: block;">
                          <div class="container">
                            <form class="form-inline" action="/action_page.php">
                              <label for="email2" class="mb-2 mr-sm-2">Correo:</label>
                              <input type="text" class="form-control mb-2 mr-sm-2" id="usuario" placeholder="Ingresa tu correo" name="correo">
                              <label for="pwd2" class="mb-2 mr-sm-2">Contraseña:</label>
                              <input type="password" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Ingresa tu contraseña" name="pswd">    
                              <button type="submit" class="btn btn-dark" style="text-align:center;">Entrar</button>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="text-center">
                                      <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password" style="color: #0B3B17">Olvidaste tu contraseña?</a>
                                    </div>
                                    <div class="form-group text-center">
                                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                      <label for="remember">Recuerdame</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    

</body>
