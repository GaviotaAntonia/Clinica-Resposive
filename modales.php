<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
  <!--Inicio Footer-->
  <?php include 'nav1.html'; ?>
  <!--Final Foooter-->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#"><i style='font-size:24px' class='fas'>&#xf2bd;</i>Perfil</span></a>
        <a href="#"><i style='font-size:24px' class='fas'>&#xf0cb;</i>Lista de Pacientes</a>
        <a href="#"><img src="svg/repo-pull.svg" alt="..." width="20">   Traslados</a>
        <a href="#"><img src="svg/clippy.svg" alt="..." width="20">  Expedientes</a>
        <a href="#"><img src="svg/location.svg" alt="..." width="20">   Visitas</a>
        <a href="#popup"class="popup-link"><img src="svg/organization.svg" alt="..." width="20"> Redes sociales</a>
        <a href="#"><img src="svg/gear.svg" alt="..." width="20"> Configuracion general</a>
        <a href="#"><img src="svg/comment.svg" alt="..." width="20"> Enviar comentarios</a>
        <a href="#"><img src="svg/report.svg" alt="..." width="20"> Reportar un problema</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Toggle Sidebar</button>  
  <h2>Collapsed Sidebar</h2>
  <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
