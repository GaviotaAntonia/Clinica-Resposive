<?php 

		include 'conexion.php';
		session_start();

		$usuario=$_POST['usuario'];
		$contra=$_POST['pswd'];

		$q="SELECT COUNT(*) as contar FROM superusuario where usuariosuper='$usuario' and contrasenna='$contra'";
		$result=mysqli_query($conexion,$q);
		$que=mysqli_fetch_array($result);
		if ($que['contar']>0) {
			$_SESSION['usuario']=$usuario;
			echo "funciona";
			header("location:../superusuario.php");

		}else
		{
		echo "Contraseña incorrecta";
}

 ?>
