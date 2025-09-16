<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>asgn02 Inheritance</title>
</head>

<body>
  <h1>Inheritance Examples</h1>

  <?php
  include 'Bird.php';

  // $bird = new Bird;
  $bird = Bird::create();
  echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

  // $fly_catcher = new YellowBelliedFlyCatcher;
  $fly_catcher = YellowBelliedFlyCatcher::create();
  echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

  // $kiwi = new Kiwi;
  $kiwi = Kiwi::create();
  $kiwi::$flying = "no";
  echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
  echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p><hr>";

  echo "<h1>Static Examples</h1>";
  echo "<h2>Before using the create method</h2>";

  echo "<p>Bird count: " . Bird::$instance_count . "<br>";
  echo "<p>Flycatcher count: " . YellowBelliedFlyCatcher::$instance_count . "<br>";
  echo "<p>Kiwi count: " . Kiwi::$instance_count . "</p>";

  echo "<h2>After using the create method</h2>";

  echo "<p>Bird count: " . Bird::$instance_count . "<br>";
  echo "<p>Flycatcher count: " . YellowBelliedFlyCatcher::$instance_count . "<br>";
  echo "<p>Kiwi count: " . Kiwi::$instance_count . "</p>";
  echo "<p><strong>Note:</strong> <em>Even though there are three birds, 1 flycatcher, and 1 kiwi, this example shows that the shared variable of <strong>instance_count</strong> is shared amongst the three classes and reflects the latest change made to this shared variable. It most accurately defines the number of total birds.</em></p>";

  echo "<h2>Late static bindings example after using the create method</h2>";
  
  echo "<p>Bird eggs: " . Bird::getEggs() . "<br>";
  echo "<p>Flycatcher eggs: " . YellowBelliedFlyCatcher::getEggs() . "<br>";
  echo "<p>Kiwi eggs: " . Kiwi::getEggs() . "</p>";
  echo "<p><strong>Note: </strong> <em>This example uses each instance of the three different kinds of birds to call the <strong>getEggs()</strong> function to return the static value of the variable <strong>num_eggs</strong>. I use <strong>'static'</strong> here instead of <strong>'self'</strong> to retrieve the number of eggs associated with different birds; <strong>'self'</strong> would return the number of eggs associated with the Bird parent class each time.</em></p>";

  ?>
</body>

</html>
