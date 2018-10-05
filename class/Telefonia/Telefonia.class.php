<?php
/**
*
*/
class Telefonia
{
  public $id;
  public $con;
  public $nombre;
  public $precio;
  public $cantMin;

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

  public function setCantMin(int $cantMin)
  {
    $this->cantMin = $this->con->real_escape_string($cantMin);
  }

  public function insert(): int
  {
    $query = "INSERT INTO `telefonia` (`nombre`, `precio`, `cantMin`) VALUES ('$this->nombre',$this->precio, $this->cantMin)";
    return $this->con->query($query);
  }

  public function select(): mysqli_result
  {
    $query = "SELECT * FROM `telefonia`";
    return $this->con->query($query);
  }

  public function delete(): int
  {
    $query = "DELETE FROM `telefonia` WHERE `id` = $this->id";
    $this->con->query($query);
    return $this->con->affected_rows;
  }

  public function select_by_id(): mysqli_result
  {
    $query = "SELECT * FROM `canales` WHERE `id` = $this->id";
    return $this->con->query($query);
  }
}
