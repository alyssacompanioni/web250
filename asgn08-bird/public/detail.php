<?php require_once('../private/initialize.php');

$id = $_GET['id'] ?? false;
if (!$id) {
  redirect_to('birds.php');
}

$bird = Bird::find_by_id($id);

$page_title = 'Detail: ' . $bird->name();
include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">
  <a href="birds.php">Back to Bird Sightings</a>

  <div class="detail">
    <dl>
      <dt>Common Name</dt>
      <dd><?php echo h($bird->common_name); ?></dd>
    </dl>
    <dl>
      <dt>Habitat</dt>
      <dd><?php echo h($bird->habitat); ?></dd>
    </dl>
    <dl>
      <dt>Food</dt>
      <dd><?php echo h($bird->food); ?></dd>
    </dl>
    <dl>
      <dt>Conservation Level</dt>
      <dd><?php echo h($bird->get_conservation()); ?></dd>
    </dl>
    <dl>
      <dt>Backyard Tips</dt>
      <dd><?php echo h($bird->backyard_tips); ?></dd>
    </dl>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
