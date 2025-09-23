<?php

//The ampersand means pass-by-reference
function modifyValue(&$ref) {
    $ref += 10;
    echo "<p>Inside function: \$ref = $ref . </p>";
}

$a = 5;
$b =& $a; // Make $b a reference to $a

echo "Before: . <br>";
echo "\$a = $a, \$b = $b . <br>";

modifyValue($a);

echo "After modifying \$a by reference: . <br>";
echo "<p>\$a = $a, \$b = $b . </p>";

$b += 5;

echo "After modifying \$b: . <br>";
echo "\$a = $a, \$b = $b . <br>";

