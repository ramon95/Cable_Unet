<?php
require '../autoload_class.php';

function SelectCanales(){
  $canal = new Canal(new Conexion);
  $res = $canal->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
    echo "<tr class='odd gradeX'><th>$row[nombre]</th><th>$row[precio]</th><th class='center'><a title='Editar' class='btn btn-warning' role='button' data-toggle='collapse' href='#form$row[id]' aria-expanded='false' aria-controls='collapseExample'><i class='pe-7s-pen' aria-hidden='true'></i> Editar</a></th><th><a title='Eliminar' href='#' onclick='return confirm('¿Seguro que deseas eliminar?')' class='btn btn-danger'><i class='pe-7s-close' aria-hidden='true'></i> Eliminar</a></th></tr>";
    }
  }

SelectCanales();
