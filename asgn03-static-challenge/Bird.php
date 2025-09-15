<?php

class Bird {
    public static $instance_count = 0;
    public static $egg_num = 0;

    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public $flying = "yes";

    public static function create() {
      $class_string = get_called_class();
      $obj = new $class_string;
      self::$instance_count++;
      return $obj;
    }

    public function can_fly() {
        // if ( $this->flying == "yes" ) {
        //     $flying_string = "can fly";
        // } else {
        //     $flying_string = "is stuck on the ground";
        // }
        $flying_string = static::$flying == "yes" ? "can fly" : "is stuck on the ground";
        return  $flying_string ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    public static $egg_num = "3-4, sometimes 5";
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}
