<?php
/**
*
*/
class HoraDia
{
  private $con;
  private $Canales_id;
  private $Horas_id;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setCanalId(int $Canales_id)
  {
    $this->Canales_id = $this->con->real_escape_string($Canales_id);
  }

  public function setHoraId(int $Horas_id)
  {
    $this->Horas_id = $this->con->real_escape_string($Horas_id);
  }

  public function insert(): int
  {
    $query = "INSERT INTO `horadias`(`Canales_id`, `Horas_id`) VALUES ($this->Canales_id,$this->Horas_id)";
    return $this->con->query($query);

  }

  public function select()
  {
    $query = "SELECT * FROM `horadias`";
    return $this->con->query($query);
  }

}
