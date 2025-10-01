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
  protected array $CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  protected array $GENDERS = ['Mens', 'Womens', 'Unisex'];
  public array $CONDITION_OPTIONS =[
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good', 
    4 => 'Great',
    5 => 'Like New'
  ];

  protected function __construct(array $args) {
    $this->brand = $args['brand'] ?? '';
    $this->model = $args['model'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->color = $args['color'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->weight_kg = $args['weight_kg'] ?? 0.0;
    $this->condition_id = $args['condition_id'] ?? 3;
  }

  protected function get_weight_kg() {

  }

  protected function set_weight_kg(float $value) {

  }

  protected function get_weight_lbs() {
    
  }

  protected function set_weight_lbs(float $value) {

  }

  protected function get_condition() {

  }
}

?>
