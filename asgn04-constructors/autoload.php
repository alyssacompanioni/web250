<?php

function my_autoload($class)
{
  if (preg_match('/\A\w+\Z/', $class)) {
    include 'classes/' . $class . '.class.php';
  }
}
spl_autoload_register('my_autoload');

$bird1 = new Bird([
  "commonName" => "Acadian Flycatcher", 
  "latinName" => "Empidonax virescens"
]);
$bird2 = new Bird([
  "commonName" => "Carolina Wren",
  "latinName" => "Thryothorus ludovicianus"
]);

$bird1->summary();
$bird2->summary();
