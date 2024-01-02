<?php $page_id = 'code'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class="title-container">
  <h1 class=vp1-title>Software</h1>
</div>

<div class=container>
  <div class="grid-50 end">
    <h2 class="pagetitle margin">Notes on software development and technology.</h2>
  </div>
</div>

<section>
  <div class=container>
    <div class=grid-3>
      <div>&nbsp;</div>
      <?php
        $posts = $entries['code'];
        krsort($posts);
        $limit = 0;
        foreach ($posts as $date => $entry) {
          if (++$limit > 100) break;
          if ($limit % 3 == 0) {
            echo '<div>&nbsp;</div>';
            continue;
          }
          ?>
          <article>
            <h3><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3>
            <p><?php echo $entry['excerpt'] ?></p>
          </article>
          <?php
        }
      ?>
  </div>
</section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
