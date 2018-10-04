<?php
/**
*
*/
class DiasSemana
{
  private $con;
  private $Canales_id;
  private $Dias_id;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setCanalId(int $Canales_id)
  {
    $this->Canales_id = $this->con->real_escape_string($Canales_id);
  }

  public function setDiaId(int $Dias_id)
  {
    $this->Dias_id = $this->con->real_escape_string($Dias_id);
  }

  public function insert(): int
  {
    $query = "INSERT INTO `diasemanas`(`Canales_id`, `Dias_id`) VALUES ($this->Canales_id,$this->Dias_id)";
    return $this->con->query($query);

  }

  public function select()
  {
    $query = "SELECT * FROM `diasemanas`";
    return $this->con->query($query);
  }

}
