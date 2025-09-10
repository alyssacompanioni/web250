<?php 

class Employee {
  public $department;
  public $first_name;
  public $last_name;
  private $is_salaried = false;
  protected $is_full_time = true;

  public function fullName() {
    return $this->first_name . " " . $this->last_name;
  }

  public function isFullTime() {
    if($this->is_full_time) {
      return "is full-time";
    } else {
      return "is part-time";
    }
  }

  public function isSalaried() {
    if($this->is_salaried) {
      return "is salaried";
    } else {
      return "is hourly";
    }
  }
}

class Server extends Employee {
  public $canBartend;
  public $is_turnhouse_trained;

  public function canBartend() {
    if ($this->canBartend){
      return $this->fullName() . " can bartend";
    } else {
      return $this->fullName() . " cannot bartend";
    }
  }
}

class LineCook extends Employee {
  public $position;
  public $knifeSkills;

  public function getKnifeSkills() { 
    return $this->knifeSkills . "-level knife skills";
  }
}

$e = new Employee;
$e->department = "Front-of-House";
$e->first_name = "Gracie";
$e->last_name = "Nesbitt";

$bartender = new Server;
$bartender->department = "Front-of-House";
$bartender->first_name = "Hanna";
$bartender->last_name = "Kirby";
$bartender->canBartend = true;
$bartender->is_turnhouse_trained = true;

$pizzaCam = new LineCook;
$pizzaCam->first_name = "Cam";
$pizzaCam->last_name = "Dumme";
$pizzaCam->position = "pizza chef";
$pizzaCam->knifeSkills = "beginner";

echo $e->fullName() . " is an employee who " . $e->isFullTime() . " and " . $e->isSalaried() . ". <br>";
echo "Our server " . $bartender->canBartend() . ". <br>";
echo $pizzaCam->fullName() . " is a " . $pizzaCam->position . " who has " . $pizzaCam->getKnifeSkills() . ". <br>";

?>
