<?php
  if(!isset($page_title)) { $page_title = 'Coffee-Club'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Coffee-Club - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/coffee-club.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Coffee-Club</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/members/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>
