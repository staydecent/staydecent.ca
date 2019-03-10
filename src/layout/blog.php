<?php include $config['dirs']['layout'].'/header.php' ?>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=12>
        <?php include $config['dirs']['layout'].'/nav.php' ?>
      </column>
      <column span=1-6>
        <h1 class="bigger"><?php echo $entry['title'] ?></h1>
      </column>
    </grid>
  </div>
  
  <grid columns=12 class="page content">
    <column span=2 span-s=row>
      <div class="meta"><p>Posted on <br /><?php echo date("F j, Y", $entry['date']) ?></p></div>
    </column>
    <column span=4-9 span-s=row>
      <div class="post double">
        <?php echo $entry['body'] ?>
        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
      </div>
    </column>
  </grid>

<?php include $config['dirs']['layout'].'/footer.php' ?>
