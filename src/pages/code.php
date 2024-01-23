<?php $page_id = 'code'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<section>
  <div class=container>
    <div class="grid-50 end">
      <h2 class="pagetitle margin">Lessons and opinions on software development.</h2>
    </div>
    <div class=grid-3>
      <div>&nbsp;</div>
      <?php
        $posts = $entries['code'];
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
            echo '<div>&nbsp;</div>';
          }
        }
      ?>
  </div>
</section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
