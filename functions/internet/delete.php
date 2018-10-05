<?php
  require '../autoload_class.php';
  require '../validate_session.php';

  $internet = new Internet(new Conexion);
  $internet->setId($_GET['id']);
  $internet->delete();

  header('location: ../../dashboard/Crearinternet.php');
?>
