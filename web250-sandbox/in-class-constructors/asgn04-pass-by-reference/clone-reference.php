<?php

class Beverage {
    public $name;

    function __construct() {
        echo "Created a new beverage.<br>";
    }

    function __clone() {
        echo "Copied an existing beverage.<br>";
    }   

}

$a = new Beverage;
$a->name = "coffee";
echo $a->name . '<br>';

echo '<hr>';

// passing in the instance and its properties
$b = clone $a;
echo '<pre>';
echo $b->name . '<br>';
echo $b->name . '<br>';
echo '</pre>';

echo '<hr>';

// show that each of these are a different value
echo "<p>By changing the value of \$b we can see that it does not 
change the value of \$a</p>";
echo "<p>This only calls the code that is inside of clone.</p>";

echo "<pre>\$b->name = \"tea\"</pre>";
echo "<p>\$b was cloned so the changes do not take effect.</p>";

$b->name = "tea";

echo "<pre>";
echo "\$a: " . $a->name . "<br>";
echo "\$b: " . $b->name . "<br>";
echo "</pre>";

echo '<hr>';

$c = $b;
echo "<p>\$c = \$b is an assignment by reference so the changes will have an effect.</p>";

$c->name = "beer";
echo "<pre>";
echo "\$c->name = \"beer\"<br>";
echo "\$a: " . $a->name . '<br>';
echo "\$b: " . $b->name . '<br>';
echo "\$c: " . $c->name . '<br>';
echo "</pre>";
