<?php include $config['dirs']['layout'].'/header.php' ?>

  <div id="main" class="grid">
    <h1 class="bigger"><?php echo $entry['title'] ?></h1>
  </div>
  
  <grid columns=12 class="page content">
    <column span=2>
      <div class="meta"><p>Posted on <br /><?php echo date("F j, Y", $entry['date']) ?></p></div>
    </column>
    <column span=4-9>
      <div class="post double">
        <?php echo $entry['body'] ?>
        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
      </div>
    </column>
  </grid>

<?php include $config['dirs']['layout'].'/footer.php' ?>
