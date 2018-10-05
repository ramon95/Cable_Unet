<?php
require '../autoload_class.php';

function SelectInternet(){
  $internet = new Internet(new Conexion);
  $res = $internet->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
    echo "<tr class='odd gradeX'><th>$row[nombre]</th><th>$row[precio]</th>><th>$row[cantMB]</th><th><a title='Eliminar' href='../functions/internet/delete.php?id=$row[id]' class='btn btn-danger'><i class='pe-7s-close' aria-hidden='true'></i> Eliminar</a></th></tr>";
    }
  }

SelectInternet();
// <th class='center'><a title='Editar' class='btn btn-warning' href='Editartelefonia.php?id=$row[id]'><i class='pe-7s-pen' aria-hidden='true'></i> Editar</a></th>
