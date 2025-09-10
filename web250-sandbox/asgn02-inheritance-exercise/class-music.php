<?php 

class Guitar {
  public $brand;
  protected $price;
  
  public function setPrice($amount) {
    $this->price = $amount;
  }

  public function getPrice() {
    return $this->price;
  }
}

$guitar = new Guitar();
$guitar->brand = "Fender";
$guitar->setPrice(800);

echo "This guitar is a " . $guitar->brand . " priced at $" . $guitar->getPrice();


class electricGuitar extends Guitar {
  public function applyDiscount($percent) {
    $discountAmount = $this->price * ($percent / 100);
    $this->price -= $discountAmount;
  }
}

// Test 
$electric = new ElectricGuitar(); $electric->brand = "Gibson"; 
$electric->setPrice(1200); 
echo "<br> This guitar is a " . $electric->brand . " priced at $" . $electric->getPrice();
$electric->applyDiscount(10); 
echo "<br>" . $electric->brand . " guitar now costs $" . $electric->getPrice() . " with a 10% discount"; 
// Desired output: Gibson guitar now costs $1080
