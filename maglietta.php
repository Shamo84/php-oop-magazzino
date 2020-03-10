<?php require_once 'indumento.php';

class Maglietta extends Indumento
{
  protected $collo;
  protected $manica;
  public $costo_stampe;

  public function CostoPerStampa($num_stampe) {
    return $this->costo_stampe * $num_stampe;
  }

}

$pyrex = new Maglietta(4);
var_dump($pyrex);
$pyrex->costo_stampe = 1;
$costo = $pyrex->CostoPerStampa(4);
echo $costo;

?>
