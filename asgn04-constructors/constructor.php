<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($common, $latin) {
    $this->commonName = $common;
    $this->latinName = $latin;
  }

  public function summary() {
    echo "Common name: " . $this->commonName . "<br>";
    echo "Latin name: " . $this->latinName . "<br>";
    echo "<hr>";
  }
}

$bird1 = new Bird('American Robin', 'Turdus migratorius');
$bird2 = new Bird('Eastern Towhee', 'Pipilo erythrophthalmus');

$bird1->summary();
$bird2->summary();

?>
