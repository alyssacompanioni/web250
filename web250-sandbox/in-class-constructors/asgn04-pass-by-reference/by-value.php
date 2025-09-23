<?php

function modifyValue($val) {
    $val += 10;
    echo "Inside function: \$val = $val<br>";
}

$a = 5;
$b = $a; // $b is a **copy** of $a, not a reference

echo "Before:<br>";
echo "\$a = $a, \$b = $b<br>";

modifyValue($a);

echo "After modifying \$a (passed by value):<br>";
echo "\$a = $a, \$b = $b<br>";

$b += 5;

echo "After modifying \$b:<br>";
echo "\$a = $a, \$b = $b<br>";
