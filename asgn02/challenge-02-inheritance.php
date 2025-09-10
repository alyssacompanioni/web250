<?php 

class Employee {
  var $department;
  var $first_name;
  var $last_name;
  var $is_salaried = false;
  var $is_full_time = true;

  function fullName() {
    return $this->first_name . " " . $this->last_name;
  }

  function isFullTime() {
    return $this->is_full_time;
  }

  function isSalaried() {
    return $this->is_salaried;
  }
}

class Server extends Employee {
  var $canBartend;
  var $is_turnhouse_trained;

  function canBartend() {
    if ($this->canBartend){
      return $this->fullName() . " can bartend.";
    } else {
      return $this->fullName() . " cannot bartend.";
    }
  }
}

class LineCook extends Employee {
  var $position;
  var $knifeSkills;

  function getKnifeSkills() { 
    return $this->knifeSkills . "-level knife skills.";
  }
}

$e = new Employee;
$e->department = "Front-of-House";
$e->first_name = "Gracie";
$e->last_name = "Nesbitt";
$e->is_salaried = false;
$e->is_full_time = false;

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

echo $e->fullName() . " is an employee. <br>";
echo "Our server " . $bartender->canBartend() . "<br>";
echo $pizzaCam->fullName() . " is a " . $pizzaCam->position . " who has " . $pizzaCam->getKnifeSkills() . "<br>";

?>
