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
		$sql="SELECT * from tipousuario";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_tipousuario'] ?></td>
			<td><?php echo $mostrar['tipousuario'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>