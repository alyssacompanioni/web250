<?php
class Guitar
{
  // Properties
  var $model;
  var $brand;
  var $color;
  var $price;


  // Methods
  function description()
  {
    return "This is a " .  $this->color . ", " . $this->brand . ", " . $this->model . " priced at " . $this->price;
  }
}

// Initialize properties

// Create a new guitar
$telecaster = new Guitar();
$telecaster->brand = "Fender";
$telecaster->model = "Telecaster";
$telecaster->color = "red";
$telecaster->price = "$1,999.00";

$martin = new Guitar();
$martin->brand = "Fender";
$martin->model = "Martin";
$martin->color = "blue";
$martin->price = "$2,500.00";

echo $telecaster->brand . " " . $telecaster->model;

echo "<br>";

echo $martin->brand . " " . $martin->model;

echo "<br>";

echo $telecaster->description();

echo "<br>";

echo $martin->description();

echo "<br>";


// http://localhost/web250-sandbox/guitar/my-guitar/class-guitar.php
