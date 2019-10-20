<?php include $config['dirs']['layout'].'/header.php' ?>

<div class=aside>
  <h1 class=wordmark>Staydecent</h1>
  <?php include $config['dirs']['layout'].'/nav.php' ?>
</div>

<div class=container>
  <div class=content>

    <div>
      <div class="grid">
        <div class="col">
          <h1 class=pagetitle>An attempt to share what I learn creating web and mobile apps.</h1>
        </div>
        <?php
        $posts = $entries['code'];
        krsort($posts);
        $limit = 0;
        foreach ($posts as $date => $entry) {
          if (++$limit > 100) break;
          ?>
          <div class=col>
            <h3><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3>
            <p><?php echo $entry['excerpt'] ?><p>
          </div>
          <?php
        }
        ?>
      </div>
    </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>

