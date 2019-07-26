<?php 

		include 'conexion.php';
		session_start();

		$usuario=$_POST['usuario'];
		$contra=$_POST['pswd'];

		$q="SELECT COUNT(*) as contar FROM usuario where usuario='$usuario' and contrasenna='$contra'";
		$result=mysqli_query($conexion,$q);
		$que=mysqli_fetch_array($result);
		if ($que['contar']>0) {
			$_SESSION['usuario']=$usuario;
			header("conexion/prueba.php");
			echo "Hola has entrado como administrador";
				echo "<h1>Bienvenido $usuario </h1>";

		}else
		{
		echo "DATOS INCORRECTOS";
}

 ?>
