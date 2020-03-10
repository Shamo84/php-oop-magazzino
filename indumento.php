<?php
class Indumento {
  public $id;
  public $marca;
  public $colore;
  public $tessuto;
  public $provenienza;
  protected $taglia;

  function __construct($id) {
    $this->id = $id;
  }
  public function get_value($value) {
    return $this->$value;
  }
  public function set_value($key, $value) {
    $this->$key = $value;
  }

}

trait Prezzo
{
  protected $prezzo;
}

$tshirt = new Indumento(3);
var_dump($tshirt);
 ?>
