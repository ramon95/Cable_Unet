<?php
  require '../autoload_class.php';
  require '../validate_session.php';

  $telefonia = new Telefonia(new Conexion);
  $telefonia->setId($_GET['id']);
  $telefonia->delete();

  header('location: ../../dashboard/Creartelefonia.php');
?>
