<?php
require '../autoload_class.php';

function SelectCanales(){
  $canal = new Canal(new Conexion);
  $res = $canal->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
    echo "<tr class='odd gradeX'><th>$row[nombre]</th><th>$row[precio]</th><th class='center'><a title='Editar' class='btn btn-warning' href='canalesEditar.php?id=$row[id]'><i class='pe-7s-pen' aria-hidden='true'></i> Editar</a></th><th><a title='Eliminar' href='../functions/canales/delete.php?id=$row[id]' class='btn btn-danger'><i class='pe-7s-close' aria-hidden='true'></i> Eliminar</a></th></tr>";
    }
  }

SelectCanales();
