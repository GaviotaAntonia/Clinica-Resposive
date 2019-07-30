<?php
    require('conexion.php'); 
    $usuario =!empty($_REQUEST['usuario2'])?$_REQUEST['usuario2']:'';
    $nombre =!empty($_REQUEST['nombre2'])?$_REQUEST['nombre2']:'';
    $apellidopat =!empty($_REQUEST['apepat2'])?$_REQUEST['apepat2']:'';
    $apellidomat =!empty($_REQUEST['apemat2'])?$_REQUEST['apemat2']:'';
    $contrasenna =!empty($_REQUEST['con1'])?$_REQUEST['con1']:'';
    $reco =!empty($_REQUEST['con2'])?$_REQUEST['con2']:'';
    $correos =!empty($_REQUEST['correo2'])?$_REQUEST['correo2']:'';

    insertarUsuarios($usuario,$nombre,$apellidopat,$apellidomat,$contrasenna,$reco,$correos);
    
    function insertarUsuarios($usuario,$nombre,$apellidopat,$apellidomat,$contrasenna,$reco,$correos){
        include('conexion.php');
        $insertar_Usuarios = "INSERT INTO usuario(id_usuario,usuario,nombre,apellidopat,apellidomat,contrasenna,recontra,correo) VALUES (0,'$usuario','$nombre','$apellidopat','$apellidomat','$contrasenna','$reco','$correos')";
        if ($conexion->query($insertar_Usuarios)){
            //echo 'bien';
        }else{
            echo 'malRegistroEnlaBD';
        }
    }

 
?>