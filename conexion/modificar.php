
<?php 
include 'conexion.php';
 
  $usuario =!empty($_REQUEST['usuario2'])?$_REQUEST['usuario2']:'';
  $nombre =!empty($_REQUEST['nombre2'])?$_REQUEST['nombre2']:'';
  $apellidopat =!empty($_REQUEST['apepat2'])?$_REQUEST['apepat2']:'';
  $apellidomat =!empty($_REQUEST['apemat2'])?$_REQUEST['apemat2']:'';
  $contrasenna =!empty($_REQUEST['con1'])?$_REQUEST['con1']:'';
  $reco =!empty($_REQUEST['con2'])?$_REQUEST['con2']:'';
  $correos =!empty($_REQUEST['correo2'])?$_REQUEST['correo2']:'';
  seleccionaid();

 function seleccionaid(){
 	$sql="SELECT * from usuario";
 	$result=mysqli_query($conexion,$sql);
 	while($mostrar=mysqli_fetch_array($result)){
 		<?php echo $mostrar['id_usuario'] ?>
 	}
	 <<?php }


 function modificar($usuario,$nombre,$apellidopat,$apellidomat,$contrasenna,$contra,$correo){
 	$query="UPDATE usuario set usuario='$usuario',nombre='$nombre',apellidopat='$apellidopat',apellidomat='$apellidomat',contrasenna='$contrasenna',contra='$econtra',correo='$correo' where usuario2=$usuario";
	$resultado=mysqli_query($conexion,$query);
	verifica_resultado($resultado);
	cerrar(conexion);
 }