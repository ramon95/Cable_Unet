<?php
require '../autoload_class.php';

  //Creacion servicio telefonico
  $internet = new Internet(new Conexion);
  $internet->setNombre($_POST['NombreCanal']);
  /////////////////////////////////////////
  $numero = $_POST['PrecioCanal'];
  $separar = explode('.',$numero);
  $numero = '';
  for ($i=0; $i < sizeof($separar); $i++) {
    $numero .= $separar[$i];
  }
  $separar = str_replace(",", ".", $numero);
  $numero = (float)$separar;

  $internet->setPrecio($numero);
  /////////////////////////////////////////////
  $internet->setCantMB($_POST['CantMB']);
  $internet->insert();

  header('location: ../../dashboard/Crearinternet.php');

?>
