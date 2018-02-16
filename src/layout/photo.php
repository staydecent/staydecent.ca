<?php include $config['dirs']['layout'].'/header.php' ?>

  <div class="grid">
    <h1 class="bigger"><?php echo $entry['title'] ?></h1>
    <div>&nbsp;</div>
  </div>
  
  <div id="page" class="grid content">
    <div class="meta"><p>Published on <?php echo date("F j, Y", $entry['date']) ?></p></div>
    <div class="post">
      <?php echo $entry['body'] ?>

      <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>  
    </div>
  </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
