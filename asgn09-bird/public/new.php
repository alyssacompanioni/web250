<?php

require_once('../private/initialize.php');

if(is_post_request()) {

  // Create a record using the POST parameters:
  $args = [];
  $args['common_name'] = $_POST['common_name'] ?? NULL;
  $args['habitat'] = $_POST['habitat'] ?? NULL;
  $args['food'] = $_POST['food'] ?? NULL;
  $args['conservation_id'] = $_POST['conservation_id'] ?? NULL;
  $args['backyard_tips'] = $_POST['backyard_tips'] ?? NULL;

  //Create new instance and insert into database:
  $bird = new Bird($args);
  $result = $bird->save();

  if($result === true) {
    $new_id = $bird->id;
    $_SESSION['message'] = 'The bird sighting was created successfully!';
    redirect_to(url_for('/show.php?id=' . $new_id));
  } else {
    // show errors
  }
} else {
  //display the form
  $bird = new Bird;
}

$page_title = 'Add a Sighting';
include(SHARED_PATH . '/public_header.php'); 
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/birds.php'); ?>">&laquo; Back to List</a>

  <div class="bird new">
    <h1>Create Bird</h1>

    <form action="<?php echo url_for('/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Bird Sighting">
      </div>

    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
