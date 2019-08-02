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
		<select name="colonia" onchange="submit()">
			<?php 
			  $sql="SELECT * from colonia";
                    $rec=mysqli_query($conexion,$sql);
                    while ($row=mysqli_fetch_array($rec)) {
                      echo "<option value='".$row['id_colonia']."' ";
                      if ($_POST['colonia']==$row['id_colonia'])
                      	echo " SELECTED";
                      echo ">";
                      echo $row['colonia'];
                    }
                     ?>
		</select>
	</form>
</body>
</html>