<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article id="blog">
  <div class="article-intro">
    <h2 class="center"><?php echo $entry['title'] ?></h2>
    <p class=small><postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>"><?php echo date("F j, Y", $entry['date']) ?></postamble></p>
  </div>

  <section class="cols">
    <div>
      <?php echo $entry['body'] ?>
      <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
    </div>
    <div class="mobile-first">
      <?php echo entry_image($entry) ?>
    </div>
  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>