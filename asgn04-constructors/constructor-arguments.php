<?php 

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($args = []) {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }

  public function summary() {
    echo "Common name: " . $this->commonName . "<br>";
    echo "Latin name: " . $this->latinName . "<br>";
    echo "<hr>";
  }
}

$bird1 = new Bird([
  "commonName" => "Acadian Flycatcher", 
  "latinName" => "Empidonax virescens"
]);
$bird2 = new Bird([
  "commonName" => "Carolina Wren",
  "latinName" => "Thryothorus ludovicianus"
]);

$bird1->summary();
$bird2->summary();

?>
