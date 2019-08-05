<html>

<head>
<title>Registro eliminado.</title>
<META name='robot' content='noindex, nofollow'>
</head>

<body>

<?php
// Actualizamos en funcion del id que recibimos

$curp = $_POST['id'];

include('conexion.php');  

$query = "delete from paciente where curp = '$curp'"; 
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
