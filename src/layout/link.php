<?php include $config['dirs']['layout'].'/header.php' ?>

  <div id="main">
    <h1 class="bigger"><?php echo $entry['title'] ?></h1>
    <div>&nbsp;</div>
  </div>
  
  <grid columns=12 class="page content">
    <column span=2>
      <div class="meta"><p>Published on <?php echo date("F j, Y", $entry['date']) ?></p></div>
    </column>
    <column span=4-9>
      <div class="post">
        <p class="big">
          <span class="mark">&rarr;</span> <a href="<?php echo $entry['link'] ?>" target="_blank"><?php echo (array_key_exists('link_title', $entry)) ? $entry['link_title'] : $entry['link'] ?></a>
        </p>

        <?php echo $entry['body'] ?>

        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>  
      </div>
    </column>
  </grid>

<?php include $config['dirs']['layout'].'/footer.php' ?>
