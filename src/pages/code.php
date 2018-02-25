<?php include $config['dirs']['layout'].'/header.php' ?>

  <div class="grid">
    <h1>An attempt to share what I learn creating web and mobile apps.</h1>
    <div>&nbsp;</div>
  </div>
  
  <div class="page content grid">
    <?php
    $posts = $entries['code'];
    krsort($posts);
    $limit = 0;
    foreach ($posts as $date => $entry) {
      if (++$limit > 100) break;
      ?>
      <div>
        <h3><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3>
        <p><?php echo $entry['excerpt'] ?><p>
      </div>
      <?php
    }
    ?>
  </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>

