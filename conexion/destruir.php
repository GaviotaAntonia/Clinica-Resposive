<?
  session_start();
  unset($_SESSION["usuario"]); 
  unset($_SESSION["contra"]);
  session_destroy();
  header("Location: ../inicio.php");
  exit;
?>