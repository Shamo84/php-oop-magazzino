<?php require_once 'indumento.php';

class Pantalone extends Indumento
{
  use Prezzo;

  protected $vita;
  public $vestibilita;
  public $lunghezza;
}

$Lewis = new Pantalone(54);
$Lewis->set_value("taglia", "XXL");
$Lewis->set_value("vita", "bassa");
$Lewis->vestibilita = "large";

var_dump($Lewis);
echo $Lewis->get_value("taglia");
