<?php
require '../autoload_class.php';

function SelectTelefonia(){
  $telefonia = new Telefonia(new Conexion);
  $res = $telefonia->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
    echo "<tr class='odd gradeX'><th>$row[nombre]</th><th>$row[precio]</th><th>$row[cantMin]</th><th><a title='Eliminar' href='../functions/telefonia/delete.php?id=$row[id]' class='btn btn-danger'><i class='pe-7s-close' aria-hidden='true'></i> Eliminar</a></th></tr>";
    }
  }

SelectTelefonia();
// <th class='center'><a title='Editar' class='btn btn-warning' href='Editartelefonia.php?id=$row[id]'><i class='pe-7s-pen' aria-hidden='true'></i> Editar</a></th>
