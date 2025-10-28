<?php require_once('../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$bird = Bird::find_by_id($id);

/*
  Use the bicycles/staff/edit.php file as a guide 
  so your file mimics the same functionality.
*/

?>

<?php $page_title = 'Show Bird: ' . h($bird->name()); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/birds.php'); ?>">&laquo; Back to List</a>

  <div class="show bird">
    <h1>Bird: <?php h($bird->name()); ?></h1>

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
