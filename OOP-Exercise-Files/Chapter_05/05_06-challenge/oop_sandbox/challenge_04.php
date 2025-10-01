<?php

class Bicycle {

  public static $instance_count = 0;

  public $brand;
  public $model;
  public $year;
  public $category; //instance property
  public $description = 'Used bicycle';
  protected $weight_kg = 0.0;
  protected $wheels = 2;

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX']; //class property

  //creates an instance of the class first
  //increments the counter
  //returns the newly created instance
  public static function create() {
    $class_name = get_called_class();   //get_called_class returns the class that is called at runtime, the late static binding version
    $obj = new $class_name;             // "new" expects a class or a string, not a function
    // $obj = new static;               // "self" and "static" can be used to refer to the current/called class
    self::$instance_count++;            //shared variable. can use "static" too. 
    return $obj;
  }

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheel_details() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

class Unicycle extends Bicycle {
  // visibility must match property being overridden
  protected $wheels = 1;

  public function bug_test() {
    return $this->weight_kg;
  }
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";
echo "<hr />";

echo "Set weight using kg<br />";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";

echo "Set weight using lbs<br />";
$trek->set_weight_lbs(2);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";

// Will this work?
echo "Set weight for Unicycle<br />";
$uni->set_weight_kg(1);
echo $uni->weight_kg() . "<br />";
echo $uni->weight_lbs() . "<br />";

echo $uni->bug_test() . "<br />";

?>
