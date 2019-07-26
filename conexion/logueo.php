<?php 

		include 'conexion.php';
		session_start();

		$usuario=$_POST['usuario'];
		$contra=$_POST['pswd'];
		$q="SELECT COUNT(*) as contar FROM usuario where usuario='$usuario' and contra='$contra'";
		$result=mysqli_query($conexion,$q);
		$que=mysqli_fetch(result);
		if ($que['contar']>0) {
			$_SESSION['usuario']=$usuario;
			header("prueba.php");
		}else
		{
		echo "DATOS INCORRECTOS";
}

 ?>
