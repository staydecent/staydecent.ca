<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<section>
  <div class=container>
    <div class="grid-50 end">
      <h1 class="pagetitle margin">Mostly incomplete thoughts on&nbsp;<em>stuff</em>.</h1>
    </div>
    <div class=grid-3>
      <div class=no-mobile>&nbsp;</div>
      <?php
        $posts = $entries['blog'];
        krsort($posts);
        $limit = 0;
        foreach ($posts as $date => $entry) {
          if (++$limit > 1000) break;
          ?>
          <article>
            <h2 class=normal><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h2 class=normal>
            <p><?php echo $entry['excerpt'] ?></p>
            <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>">
              <a class="black plain" href="<?php echo $entry['url']; ?>"><?php echo date("F j, Y", $entry['date']) ?></a>
            </postamble>
          </article>
          <?php
          if ($limit % 2 == 0) {
            echo '<div class=no-mobile>&nbsp;</div>';
          }
        }
      ?>
  </div>
</section>

<?php include $config['dirs']['layout'].'/footer.php' ?>