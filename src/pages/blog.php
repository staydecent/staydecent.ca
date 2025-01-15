<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article id="blog">
  <div class="article-intro">
    <h2 class="center">Mostly incomplete thoughts on&nbsp;stuff.</h2>
    <p>I don't want to box myself in, but some common topics: nature, photography, philoshophy, ai, economics, design, etc.</p>
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
          <p><?php echo $entry['excerpt'] ?></p>
          <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>">
            <a class="black plain" href="<?php echo $entry['url']; ?>"><?php echo date("F j, Y", $entry['date']) ?></a>
          </postamble>
        </div>
        <?php
      }
    ?>
  </section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
