 <?php include 'conexion.php' 


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>select</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post">
		<label for="txtnobre">Nombre:</label>
		<input type="text" name="txtnombre">
		<select name="colonia" onchange="submit()">
			<option value="jue">jue</option>}
			<option value="ve">ve</option>
		</select>
			<input type="button" name="btngraba" value="Graba">
	</form>
</body>
</html>

<?php 
	include 'conexion.php';
	if (@$_POST['btngraba']) {
		mysqli_query("INSERT INTO preuba (nombre,curso) values ('$_POST[txtnombre]','$_POST[colonia]')");
	}
	

 ?>