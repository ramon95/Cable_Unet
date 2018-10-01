<?php
require '../autoload_class.php';

  $canal = new Canal(new Conexion);
  $canal->setNombre($_POST['NombreCanal']);
  /////////////////////////////////////////
  $numero = $_POST['PrecioCanal'];
  $separar = explode('.',$numero);
  $numero = '';
  for ($i=0; $i < sizeof($separar); $i++) {
    $numero .= $separar[$i];
  }
  $separar = str_replace(",", ".", $numero);
  $numero = (float)$separar;

  $canal->setPrecio($numero);
  /////////////////////////////////////////////
  $canal->insert();

  // var_dump($res);
?>
