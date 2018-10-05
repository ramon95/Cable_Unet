<?php
  require '../autoload_class.php';
  require '../validate_session.php';

  $id = $_POST['id'];
  $canal = new Canal(new Conexion);
  $canal->setId($id);
  $res = $canal->select_by_id();
  $result_array = $res->fetch_array(MYSQLI_ASSOC);
  echo json_encode($result_array);
?>
