<?php
require '../autoload_class.php';

  //Creacion servicio telefonico
  $telefonia = new Telefonia(new Conexion);
  $telefonia->setNombre($_POST['NombreCanal']);
  /////////////////////////////////////////
  $numero = $_POST['PrecioCanal'];
  $separar = explode('.',$numero);
  $numero = '';
  for ($i=0; $i < sizeof($separar); $i++) {
    $numero .= $separar[$i];
  }
  $separar = str_replace(",", ".", $numero);
  $numero = (float)$separar;

  $telefonia->setPrecio($numero);
  /////////////////////////////////////////////
  $telefonia->setCantMin($_POST['CantMin']);
  $telefonia->insert();

  header('location: ../../dashboard/CrearTelefonia.php');

?>
