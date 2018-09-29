<?php
require '../autoload_class.php';

function selectDias(){
  $dias = new Dias(new Conexion);
  $res = $dias->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
      echo "<option value='$row[id]'>$row[descripcion]</option>";
    }
  }

selectDias();
