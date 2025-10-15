<?php

class Bird {

  //START of ACTIVE RECORD CODE
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  } 

  static public function find_by_sql($sql){
    $result = self::$database->query($sql);
    if(!$result) {
      exit("Database query failed");
    } 
    //results into objects:
    $object_array = [];
    while($record = $result->fetch_assoc()) {
      $object_array[] = self::instantiate($record);
    }
    $result->free();
    return $object_array;
  }

  static protected function instantiate($record) {
    $object = new self;
    foreach($record as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    return $object;
  }

  static public function find_all() {
    $sql = "SELECT * FROM birds";
    return self::find_by_sql($sql);
  }
  //END of ACTIVE RECORD CODE

  public string $common_name;
  public string $habitat;
  public string $food;
  public string $nest_placement;
  public string $behavior;
  public int $conservation_id;
  public string $backyard_tips;

  protected CONST CONSERVATION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct'
  ];
 
  public function __construct($args=[]) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
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
}

?>
