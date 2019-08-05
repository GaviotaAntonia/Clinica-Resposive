<html>

<head>
<title>Registro eliminado.</title>
<META name='robot' content='noindex, nofollow'>
</head>

<body>

<?php
// Actualizamos en funcion del id que recibimos

$id_traslado = $_POST['id'];

include('conexion.php');  

$query = "delete from traslado where id_traslado = '$id_traslado'"; 
$result = mysqli_query($conexion,$query); 


echo "
<p>El registro ha sido eliminado con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
sleep(5);
header('Location: ..\listapacientes.php'); 
?>


</body>

</html>
