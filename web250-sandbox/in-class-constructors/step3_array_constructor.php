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
    // return "{$this->brand} {$this->model}  - $" . number_format($this->price, 2);
    // += does not work on strings, you silly goose!

    // $summary = "";
    // if ($this->brand == null)
    //   $summary += "Unknown Brand";
    // else  
    //   $summary += $this->brand;

    // if ($this->model == null)
    //   $summary += "Unknown Model";
    // else
    //   $summary += $this->model;

    // $summary += " - ";

    // if($this->price == null)
    //   $summary += "Price not available";
    // else
    //   $summary += number_format($this->price, 2);

    // return $summary;

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
  "price" => 899.95]);
echo $g->summary();


