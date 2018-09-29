<?php
/**
*
*/
class Dias
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
    $query = "SELECT * FROM `dias`";
    return $this->con->query($query);
  }

}
