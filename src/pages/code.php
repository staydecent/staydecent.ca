<?php $page_id = 'code'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article id="code">
  <div class="article-intro">
    <h1 class="center">Lessons and opinions on software development.</h1>
  </div>

  <section class="cols">
    <div>&nbsp;</div>
    <div class="cols">      
      <?php
        $posts = $entries['code'];
        krsort($posts);
        $limit = 0;
        foreach ($posts as $date => $entry) {
          if (++$limit > 1000) break;
          ?>
          <div>
            <h2 class="normal inline"><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h2>
            <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>">
              <?php echo date("F j, Y", $entry['date']) ?>
            </postamble>

            <p><?php echo $entry['excerpt'] ?>
          </div>
          <?php
        }
      ?>
    </div>
  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>
