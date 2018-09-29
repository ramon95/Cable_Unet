<?php
/**
*
*/
class Horas
{
  private $con;
  public $descripcion;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $this->con->real_escape_string($descripcion);
    $this->descripcion = ucwords($this->descripcion);
  }

  public function select()
  {
    $query = "SELECT * FROM `horas`";
    return $this->con->query($query);
  }

}
