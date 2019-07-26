<?php 

	$conexion=mysqli_connect('localhost','root','','proyectovidayamor');
	if($conexion){
		echo "conexion exitosa";
	}
	else
	{
		echo "esta fallando algo";
	}
 ?>

