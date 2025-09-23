<?php

class Guitar
{
  public ?string $brand;
  public ?string $model;
  public ?float $price;

  public function __construct(array $args = [])
  {
    $this->brand = $args['brand'] ?? $this->brand;
    $this->model = $args['model'] ?? $this->model;
    $this->price = $args['price'] ?? $this->price;
  }

  public function summary() {
    $brand = $this->brand ?? "Unknown Brand";
    $model = $this->model ?? "Unknown Model";
    $price = $this->price !== null
      ? "$" . number_format($this->price, 2)
      : "Price not available";

    return "{$brand} {$model} - {$price}";
  }
}

$g = new Guitar([
  "brand" => "Fender",
  "model" => "player",
  "price" => 899.95
]);
echo $g->summary();

?>
