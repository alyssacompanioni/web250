<!doctype html>

<html lang="en">

<head>
  <title>WNC Birds <?php if (isset($page_title)) {
                      echo '- ' . h($page_title);
                    } ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/birds.css'); ?>" />
</head>

<body>

  <header>
    <h1><a href="<?php echo url_for('/index.php'); ?>">Welcome to WNC Birds!</a></h1>
    <navigation>
      <ul>
        <?php if ($session->is_logged_in()) { ?>
          <li>User: <?php echo $session->username; ?></li>
          <li><a href="<?php echo url_for('/birds.php'); ?>">Bird Sightings</a></li>
          <li><a href="<?php echo url_for('/logout.php'); ?>">Log Out</a></li>
          <?php if ($session->is_admin_logged_in()) { ?>
            <li><a href="<?php echo url_for('members/index.php'); ?>">View Members</a></li>
          <?php } ?>
        <?php } else { ?>
            <li><a href="<?php echo url_for('/login.php'); ?>">Log In</a></li>
            <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
        <?php } ?>
        <li><a href="<?php echo url_for('/about.php'); ?>">About WNC Birds</a></li>
      </ul>
    </navigation>
  </header>
