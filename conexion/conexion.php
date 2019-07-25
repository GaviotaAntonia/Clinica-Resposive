    <?php
    // datos para la coneccion a mysql
    define('DB_SERVER','localhost'); //nombre o ip del servidor, esta ok con localhost
    define('DB_NAME','proyectovidayamor'); //nombre de la base de datos
    define('DB_USER','root'); //nombre de usuario de la base de datos
    define('DB_PASS',''); //contraseña del usuario de la base de datos
    $enlace = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    else{
    	echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
    }
    
    ?>
    


<!DOCTYPE html>
<html>
<head>
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