<?php
/**
*
*/
class Internet
{
  public $id;
  public $con;
  public $nombre;
  public $precio;
  public $cantMB;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setNombre(string $nombre)
  {
    $this->nombre = $this->con->real_escape_string($nombre);
    $this->nombre = ucwords($this->nombre);
  }

  public function setPrecio(float $precio)
  {
    $this->precio = $this->con->real_escape_string($precio);
  }

  public function setId(int $id)
  {
    $this->id = $this->con->real_escape_string($id);
  }

  public function setCantMB(int $cantMB)
  {
    $this->cantMB = $this->con->real_escape_string($cantMB);
  }

  public function insert(): int
  {
    $query = "INSERT INTO `internet` (`nombre`, `precio`, `cantMB`) VALUES ('$this->nombre',$this->precio, $this->cantMB)";
    return $this->con->query($query);
  }

  public function select(): mysqli_result
  {
    $query = "SELECT * FROM `internet`";
    return $this->con->query($query);
  }

  public function delete(): int
  {
    $query = "DELETE FROM `internet` WHERE `id` = $this->id";
    $this->con->query($query);
    return $this->con->affected_rows;
  }

  public function select_by_id(): mysqli_result
  {
    $query = "SELECT * FROM `internet` WHERE `id` = $this->id";
    return $this->con->query($query);
  }
}
