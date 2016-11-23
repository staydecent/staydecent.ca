<?php include $config['dirs']['layout'].'/header.php' ?>

  <div id="intro">
    <h1>Infrequent thoughts on almost anything.</h1>
  </div>
  
  <div id="page" class="content grid">
    <?php
    $posts = $entries['blog'];
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
