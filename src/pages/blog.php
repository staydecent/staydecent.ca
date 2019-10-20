<?php include $config['dirs']['layout'].'/header.php' ?>

<div class=aside>
  <h1 class=wordmark>Staydecent</h1>
  <?php include $config['dirs']['layout'].'/nav.php' ?>
</div>

<div class=container>
  <div class=content>

    <div>
      <div class="container wrap start">
        <div class="col">
          <div class="col-inner">
            <h1 class=pagetitle>Infrequent thoughts, links and creations.</h1>
          </div>
        </div>
        <?php
        $posts = $entries['blog'];
        krsort($posts);
        $limit = 0;
        foreach ($posts as $date => $entry) {
          if (++$limit > 100) break;
          ?>
          <div class=col>
            <div class="col-inner">
              <h3><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3>
              <p><?php echo $entry['excerpt'] ?><p>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>

