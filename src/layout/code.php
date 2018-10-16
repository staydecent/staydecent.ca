<?php include $config['dirs']['layout'].'/header.php' ?>

  <div id="main" class="grid">
    <h1 class="bigger"><?php echo $entry['title'] ?></h1>
    <div>&nbsp;</div>
  </div>
  
  <div class="page grid content">
    <div class="meta"><p>Posted on <?php echo date("F j, Y", $entry['date']) ?></p></div>
    <div class="post double">
      <?php echo $entry['body'] ?>
      <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
    </div>
    <div>&nbsp;</div>
  </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
