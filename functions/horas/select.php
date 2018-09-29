<?php
require '../autoload_class.php';

function selectHoras(){
  $horas = new Horas(new Conexion);
  $res = $horas->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
      echo "<option value='$row[id]'>$row[descripcion]</option>";
    }
  }

selectHoras();
