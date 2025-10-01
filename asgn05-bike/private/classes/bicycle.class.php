<?php 

class Bicycle {
  public string $brand;
  public string $model;
  public int $year;
  public string $category;
  public string $color;
  public string $description;
  public string $gender;
  public float $price;
  public float $weight_kg;
  public int $condition_id;

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public const GENDERS = ['Mens', 'Womens', 'Unisex'];

//This protected property is accessed with getter function, get_condition_id() as shown below
//By associating the qualitative conditions with a numerical id, the developer of the website can easily change the string values associated with the condition_id without altering the functionality of the website
  protected const CONDITION_OPTIONS =[
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good', 
    4 => 'Great',
    5 => 'Like New'
  ];

  public function __construct(array $args) {
    $this->brand = $args['brand'] ?? '';
    $this->model = $args['model'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->color = $args['color'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->weight_kg = $args['weight_kg'] ?? 0.0;
    $this->condition_id = $args['condition_id'] ?? 0;
  }

  public function get_weight_kg() {
    return number_format($this->weight_kg, 2) . ' kg';
  }

  public function set_weight_kg(float $value) {
    $this->weight_kg = floatval($value);
  }

  public function get_weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return number_format($weight_lbs, 2) . ' lbs';
  }

  public function set_weight_lbs(float $value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  //This is a "getter function" that returns the string value associated with the numerical condition_id. 
  //This utilization method allows the developer to easily change the string values associated with the condition_id without altering the functionality
  public function get_condition() {
    if($this->condition_id > 0) {
      return self::CONDITION_OPTIONS[$this->condition_id];
    } else
      return "Unknown";
  }
}

?>
