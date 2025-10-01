<?php

class Bird {

/*
Use the wnc-birds.csv file to create the properties:
common_name|habitat|food|nest_placement|behavior|conservation_id|backyard_tips
Make all of the properties public.
*/

public string $common_name;
public string $habitat;
public string $food;
public string $nest_placement;
public string $behavior;
public int $conservation_id;
public string $backyard_tips;

 
  /*
  Create a protected constant array called CONSERVATION_OPTIONS using the following scale.
  Use the CONDITION_OPTIONS from the bicycle.class.php file

  1 = Low concern
  2 = Moderate concern
  3 = Extreme concern
  4 = Extinct
  */

  protected CONST CONSERVATION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct'
  ];
 

 /*
   - Create a public __construct that accepts a list of $args[]
   - Use the Null coalescing operator
   - Create a default value of 1 for conservation_id
 */

  public function __construct(array $args) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? 1;
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }


/*
  Create a public method called conservation(). This method should mimic the
    public function condition() from the bicycle.class.php file


*/
  public function get_conservation() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

}

?>
