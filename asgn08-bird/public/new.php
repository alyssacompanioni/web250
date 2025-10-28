<?php

require_once('../private/initialize.php');

// Create a record using the POST parameters:
$args = [];
$args['common_name'] = $_POST['common_name'] ?? NULL;
$args['habitat'] = $_POST['habitat'] ?? NULL;
$args['food'] = $_POST['food'] ?? NULL;
$args['conservation_id'] = $_POST['conservation_id'] ?? NULL;
$args['backyard_tips'] = $_POST['backyard_tips'] ?? NULL;

//Create new instance and insert into database:
$bird = new Bird($args);
$result = $bird->create();

if($result === true) {
  $new_id = $bird->id;
  $_SESSION['message'] = 'The bird sighting was created successfully!';
  redirect_to(url_for('/asgn08-bird/public/show.php?id=' . $new_id));
} else {
  $bird = new Bird();
}

include(SHARED_PATH . '/public_footer.php');
