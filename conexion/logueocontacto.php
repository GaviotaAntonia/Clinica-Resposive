<?php 

		include 'conexion.php';
		session_start();

		$correo=$_POST['correo'];
		$contra=$_POST['pswd'];

		$q="SELECT COUNT(*) as contar FROM contacto where correo='$correo' and contrasenna='$contra'";
		$result=mysqli_query($conexion,$q);
		$que=mysqli_fetch_array($result);
		if ($que['contar']>0) {
			$_SESSION['correo']=$correo;
			echo "funciona";
			header("location:../formadeusuario.php");

		}else
		{
		echo "Contraseña incorrecta";
}

 ?>
