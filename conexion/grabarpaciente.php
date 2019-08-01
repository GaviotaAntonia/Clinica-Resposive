<?php
    require('conexion.php'); 
    $curp=!empty($_REQUEST['curp'])?$_REQUEST['curp']:'';
    $nombre =!empty($_REQUEST['nombre2'])?$_REQUEST['nombre2']:'';
    $apellidopat =!empty($_REQUEST['apepat2'])?$_REQUEST['apepat2']:'';
    $apellidomat =!empty($_REQUEST['apemat2'])?$_REQUEST['apemat2']:'';
    $fechanacimiento =!empty($_REQUEST['fechanacimiento'])?$_REQUEST['fechanacimiento']:'';
    $idestado =!empty($_REQUEST['idestado'])?$_REQUEST['idestado']:'';
    $idcolonia =!empty($_REQUEST['idcolonia'])?$_REQUEST['idcolonia']:'';
    $calle =!empty($_REQUEST['calle'])?$_REQUEST['calle']:'';
    $referenciadecalle =!empty($_REQUEST['refe'])?$_REQUEST['refe']:'';
    $edad =!empty($_REQUEST['edad'])?$_REQUEST['edad']:'';
    $sange =!empty($_REQUEST['sange'])?$_REQUEST['sange']:'';





    insertarUsuarios($curp,$nombre,$apellidopat,$apellidomat,$fechanacimiento,$idestado,$idcolonia,$calle,$referenciadecalle,$edad,$sange);
    
    function insertarUsuarios($curp,$nombre,$apellidopat,$apellidomat,$contrasenna,$reco,$correos){
        include('conexion.php');
        $insertar_Usuarios = "INSERT INTO paciente(curp,nombre,apellidopat,apellidomat,fechanacimiento,id_estado,id_colonia,calle,referenciadecalle,edad,tipodesangre) VALUES ('$curp','$nombre','$apellidopat','$apellidomat','$fechanacimiento','$idestado','$idcolonia','$calle','$referenciadecalle','$edad','$sange')";
        if ($conexion->query($insertar_Usuarios)){
            echo 'bien';
        }else{
            echo 'malRegistroEnlaBD';
        }
    }

 
?>

