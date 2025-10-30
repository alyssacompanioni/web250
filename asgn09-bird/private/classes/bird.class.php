<?php

class Bird extends DatabaseObject {

  static protected $table_name = 'birds';
  static protected $db_columns = ['id', 'common_name', 'habitat', 'food', 'conservation_id', 'backyard_tips'];

  protected function validate() {
    $this->errors = [];

    if (is_blank($this->common_name)) {
      $this->errors[] = "'Common Name' cannot be blank.";
    }
    if (is_blank($this->habitat)) {
      $this->errors[] = "'Habitat' cannot be blank.";
    }

    return $this->errors;
  }

  public $id;
  public string $common_name;
  public string $habitat;
  public string $food;
  public int $conservation_id;
  public string $backyard_tips;

  public CONST CONSERVATION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct'
  ];
 
  public function __construct($args=[]) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? 1;
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }

  public function get_conservation() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

  public function name() {
    return "{$this->common_name}";
  }
}

?>
