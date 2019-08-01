<?php
@session_start();
session_destroy();
echo '<script language="javascript">alert("juas");</script>'; 
header("Location:..\inicio.php");
?>