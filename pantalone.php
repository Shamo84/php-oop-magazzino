<?php require_once 'indumento.php';

class Pantalone extends Indumento
{
  use Prezzo;

  public $vita;
  public $vestibilita;
  public $lunghezza;

}

$Lewis = new Pantalone(54);
$Lewis->set_value("taglia", "XXL");
$Lewis->vita = "bassa";
$Lewis->vestibilita = "large";

var_dump($Lewis);
