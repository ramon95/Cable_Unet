<?php
require '../autoload_class.php';
require '../../class/DiaSemana/DiaSemana.class.php';
require '../../class/HoraDia/HoraDia.class.php';

  //Creacion del canal
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
  $id = $canal->insert();

  //Asociacion de los dias de la semana
  foreach ($_POST['DiasSemana'] as $dias) {
    $dia = new DiasSemana(new Conexion);
    $dia->setCanalId($id);
    $dia->setDiaId($dias);
    $dia->insert();
  }

  //Asociacion de las horas al dia
  foreach ($_POST['HorasDia'] as $horas) {
    $hora = new HoraDia(new Conexion);
    $hora->setCanalId($id);
    $hora->setHoraId($horas);
    $hora->insert();
  }

  header('location: ../../dashboard/canales.php');

?>
