<?php require_once('../private/initialize.php'); ?>


<?php $page_title = ' Main Menu'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>


<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    
    <ul>
      <li><a href="<?php echo url_for('/members/index.php'); ?>">Member View -- contact information</a></li>
    </ul>
  </div>
  
<?php include(SHARED_PATH . '/footer.php'); ?>