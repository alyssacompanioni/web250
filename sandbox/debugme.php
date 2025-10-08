<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  function addNumbers($a, $b) {
    $sum = $a + $b;
    return $sum;
  }

  $numbers = [1,2,3,4,5];
  $total = 0;

  foreach($numbers as $num) {
    $total = addNumbers($total, $num); // good spt for breakpoint
  }
  
?>
