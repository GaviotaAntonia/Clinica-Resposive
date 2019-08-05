<?php
//enviar.php

if(isset($_POST)){
    echo "Campo SELECT enviado: ".$_POST["estado"]."<br/>";
    echo "Campo SELECT enviado: ".$_POST["colonia"]."<br/>";

}else{
    echo "No se han enviado datos por POST.";
}

  require('conexion.php'); 
    $curp =!empty($_REQUEST['curp'])?$_REQUEST['curp']:'';
    $nombre =!empty($_REQUEST['nombre2'])?$_REQUEST['nombre2']:'';
    $apellidopat =!empty($_REQUEST['apepat2'])?$_REQUEST['apepat2']:'';
    $apellidomat =!empty($_REQUEST['apemat2'])?$_REQUEST['apemat2']:'';
    $fechanac=!empty($_REQUEST['fechanacimiento'])?$_REQUEST['fechanacimiento']:'';
    $colonia=!empty($_REQUEST['colonia'])?$_REQUEST['colonia']:'';
    $calle =!empty($_REQUEST['calle'])?$_REQUEST['calle']:'';
    $estado = $_POST['estado'];
    $refe =!empty($_REQUEST['refe'])?$_REQUEST['refe']:'';
    $edad =$_POST['edad']:'';
    $grabarsangre =!empty($_REQUEST['grabarsangre'])?$_REQUEST['grabarsangre']:'';

    insertarPaciente($curp,$nombre,$apellidopat,$apellidomat,$fechanac,$estado,$colonia,$calle,$refe,$edad,$grabarsangre);
    
    function insertarPaciente($curp,$nombre,$apellidopat,$apellidomat,$fechanac,$estado,$colonia,$calle,$refe,$edad,$grabarsangre){
        include('conexion.php');
       $insertar_Paciente = "INSERT INTO paciente(curp,nombre,apellidopat,apellidomat,fechanacimiento,id_estado,id_colonia,calle,referenciadecalle,edad,tipodesangre) VALUES ('$curp','$nombre','$apellidopat','$apellidomat','$fechanac','$estado','$colonia','$edad','$calle','$refe','$edad','$grabarsangre')";
        if ($conexion->query($insertar_Paciente)){
            echo 'bien';
             echo "Campo SELECT enviado: ".$_POST["estado"]."<br/>";
            echo insertarpaciente;
        }else
        {
            echo 'malRegistroEnlaBD';
             echo "Campo SELECT enviado: ".$_POST["estado"]."<br/>";
            echo insertar_Paciente();
        }
    

 }