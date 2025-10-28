<?php
require_once('../private/initialize.php');
$page_title = 'Sightings';
?> 
<?php include(SHARED_PATH . '/public_header.php'); ?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>
<br>
<p><a class="action" href="<?php echo url_for('/new.php'); ?>">Add a Bird Sighting</a></p>

<table id="inventory">
  <tr>
    <th>Common Name</th>
    <th>Habitat</th>
    <th>Food</th>
    <th>Conservation Level</th>
    <th>Backyard Tips</th>
    <th>&nbsp;</th>
  </tr>

  <?php
  $birds = Bird::find_all();
  
  foreach($birds as $bird) {
  ?>

    <tr>
      <td><?php echo h($bird->common_name); ?></td>
      <td><?php echo h($bird->habitat); ?></td>
      <td><?php echo h($bird->food); ?></td>
      <td><?php echo h($bird->get_conservation()); ?></td>
      <td><?php echo h($bird->backyard_tips); ?></td>
      <td><a class="action" href="<?php echo url_for('/show.php?id=' . h(u($bird->id))); ?>">View</td>
      <td><a class="action" href="<?php echo url_for('/edit.php?id=' . h(u($bird->id))); ?>">Edit</td>
      <td><a class="action" href="<?php echo url_for('/delete.php?id=' . h(u($bird->id))); ?>">Delete</td>
    </tr>
  <?php } ?>
</table>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
