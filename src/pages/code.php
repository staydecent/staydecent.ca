<?php include $config['dirs']['layout'].'/header.php' ?>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=12>
        <?php include $config['dirs']['layout'].'/nav.php' ?>
      </column>
      <column span=6-12>
        <h1>An attempt to share what I learn creating web and mobile apps.</h1>
      </column>
    </grid>
  </div>
  
  <grid columns=6 columns-s=1 class="page content">
    <?php
    $posts = $entries['code'];
    krsort($posts);
    $limit = 0;
    foreach ($posts as $date => $entry) {
      if (++$limit > 100) break;
      ?>
      <column span=2>
        <div class="col-inner">
          <h3><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3>
          <p><?php echo $entry['excerpt'] ?><p>
        </div>
      </column>
      <?php
    }
    ?>
  </grid>

<?php include $config['dirs']['layout'].'/footer.php' ?>

