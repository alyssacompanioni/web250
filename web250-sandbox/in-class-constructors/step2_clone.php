<?php

class Guitar
{
  public string $brand;
  public string $model;
  public float $price;

  public function __construct(string $b, string $m, float $p)
  {
    $this->brand = $b;
    $this->model = $m;
    $this->price = $p;
  }

  public function summary(): string
  {
    return "{$this->brand} {$this->model}  - $" . number_format($this->price, 2);
  }
}

$g1 = new Guitar("Fender", "Player Telecaster", 799.99);
echo $g1->summary() . "<br> <hr>";

$g2 = clone $g1;
echo "Original: " . $g1->summary() . "<br>";
echo "Clone: " . $g2->summary();
