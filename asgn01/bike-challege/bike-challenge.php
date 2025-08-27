<?php

class Bike {
  var $brand;
  var $model;
  var $year;
  var $description = "Used bicycle";
  var $weight_kg = 0.0;

  //put brand, model, and year into a string to define the bike
  function name() {
    return $this->year . " " . $this->brand . " " . $this->model;
  }

  //convert the weight from kg to lbs
  //1 kg = 2.2046226218 lbs
  function weight_lbs() {
    return "The weight of the " . $this->name() . " is " . floatval($this->weight_kg) * 2.2046226218 . "lbs.";
  }
  //return floatval($this->weight_kg) * 2.2046226218 guarantees that the original value is a float value and not a string

  //pass in a weight in lbs, convert it to kg, store into $weight_kg
  function set_weight_lbs($new_weight) {
    $this->weight_kg = floatval($new_weight) / 2.2046226218;
    return "The weight of the " . $this->name() . " is " . $this->weight_kg . "kg.";
  }
}

//Instantiate some instances of the Bike class
$alyssaBike = new Bike;
$dadBike = new Bike;

//Set and read properties
$alyssaBike->brand = "Gary Fisher";
$alyssaBike->model = "Marlin";
$alyssaBike->year = "2009";
$alyssaBike->weight_kg = 11;

$dadBike->brand = "Gary Fisher";
$dadBike->model = "Sugar";
$dadBike->year = "2011";
$dadBike->weight_kg = 9;


//Call all methods
echo "Testing the name() method: <br>";
echo $alyssaBike->name() . "<br>";
echo $dadBike->name() . "<br>";

echo "<br> Testing the weight_lbs() method: <br>";
echo $alyssaBike->weight_lbs() . "<br>";
echo $dadBike->weight_lbs() . "<br>";

echo "<br> Testing the set_weight_lbs() method (with 14lbs and 12lbs): <br>";
echo $alyssaBike->set_weight_lbs(14) . "<br>";
echo $dadBike->set_weight_lbs(12) . "<br>";
