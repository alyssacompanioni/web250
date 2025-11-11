<?php
require_once('../private/initialize.php');
include(SHARED_PATH . '/public_header.php');
?>

<h2>Home</h2>
<p>Welcome to WNC Bird Sightings! <a href="<?php echo url_for('/login.php'); ?>">Login</a> to see a list of recent bird sightings from our local members.</p>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
