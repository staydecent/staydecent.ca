<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article id="blog">
  <div class="article-intro">
    <h2 class="center">Mostly incomplete thoughts on&nbsp;stuff.</h2>
  </div>

  <section class="cols">
    <?php
      $posts = $entries['blog'];
      krsort($posts);
      $limit = 0;
      foreach ($posts as $date => $entry) {
        if (++$limit > 1000) break;
        ?>
        <div>
          <h3 class=normal><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3 class=normal>
          <p><?php echo $entry['excerpt'] ?> <a href="<?php echo $entry['url']; ?>" title="Continue reading: <?php echo $entry['title'] ?>"> →</a></p>
        </div>
        <?php
      }
    ?>
  </section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
