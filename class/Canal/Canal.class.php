<?php
/**
*
*/
class Canal
{
  public $con;
  public $nombre;
  public $precio;

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

  public function select(): mysqli_result
  {
    $query = "SELECT * FROM `canales`";
    return $this->con->query($query);
  }

  public function insert(): int
  {
    $query = "INSERT INTO `canales`(`nombre`, `precio`) VALUES ('$this->nombre',$this->precio)";
    if($this->con->query($query)){
      return $last_id = $this->con->insert_id;
    }
    return 0;
  }

  public function update(): int
  {
    if ($this->img) {
      $query = "UPDATE `articulo` SET `categoria_id`= $this->categorie_id, `titulo`= '$this->title', `contenido`= '$this->content', `img`='$this->img' WHERE `articulo_id` = $this->article_id";
    } else{
      $query = "UPDATE `articulo` SET `categoria_id`= $this->categorie_id, `titulo`= '$this->title', `contenido`= '$this->content' WHERE `articulo_id` = $this->article_id";
    }
    $this->con->query($query);
    return $this->con->affected_rows;
  }

  public function delete(): int
  {
    $query = "DELETE FROM `articulo` WHERE `articulo_id` = $this->article_id";
    $this->con->query($query);
    return $this->con->affected_rows;
  }
}
