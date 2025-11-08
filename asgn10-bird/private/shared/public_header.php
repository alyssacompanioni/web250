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
    <h1>Welcome to WNC Bird Sightings!</h1>
    <navigation>
      <ul>
        <?php if ($session->is_logged_in()) { ?>
          <li><a href="<?php echo url_for('/index.php'); ?>">WNC Birds</a></li>
          <li><a href="<?php echo url_for('/members/logout.php'); ?>">Log Out</a></li>
        <?php } ?>
      </ul>
    </navigation>
  </header>
