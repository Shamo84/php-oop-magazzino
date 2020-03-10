<?php
class Indumento {
  protected $id;
  protected $marca;
  protected $colore;
  protected $materiale;
  protected $provenienza;
  protected $taglia;

  function __construct($id) {
    $this->id = $id;
  }
}

$tshirt = new Indumento(3);
var_dump($tshirt);
 ?>
