<?php
  require '../autoload_class.php';
  require '../validate_session.php';

  $canal = new Canal(new Conexion);
  $canal->setId($_GET['id']);
  $canal->delete();

  header('location: ../../dashboard/canales.php');
?>
