<?php

require_once('../private/initialize.php');

/* 
  Use the bicycles/staff/edit.php file as a guide 
  so your file mimics the same functionality.
  Be sure to include the display_errors() function.
*/

if (!isset($_GET['id'])) {
  redirect_to(url_for('/index.php'));
}
$id = $_GET['id'];

$bird = Bird::find_by_id($id);
if ($bird == false) {
  redirect_to(url_for('/index.php'));
}

if (is_post_request()) {

  $args = $_POST['bird'];
  $bird->merge_attributes($args);
  $result = $bird->save();

  if ($result === true) {
    $_SESSION['message'] = 'The bird sighting was updated successfully.';
    redirect_to(url_for('/show.php?id=' . $id));
  } else {
    // show errors
  }
} else {

  // display the form

}

?>

<?php $page_title = 'Edit Bird: ' . h($bird->name()); ; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/birds.php'); ?>">&laquo; Back to List</a>

  <div class="birdEdit">
    <h1>Edit Bird: <?php echo $bird->name(); ?></h1>

    <?php echo display_errors($bird->get_errors()); ?>

    <form action="<?php echo url_for('/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Bird">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
