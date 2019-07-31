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


<!DOCTYPE html>
<html>
<head><br>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>	
		</tr>

		<?php 
		$sql="SELECT * from usuario";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_usuario'] ?></td>
			<td><?php echo $mostrar['nombre']?></td>
			<td><?php echo $mostrar['apellidopat'] ?></td>
			<td><?php echo $mostrar['correo']?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>