<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article id="blog">
  <div class="article-intro">
    <h1><?php echo $entry['title'] ?></h1>
  </div>

  <section class="cols">
    <div>
      <?php echo entry_image($entry) ?>
      <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>">
        <?php echo date("F j, Y", $entry['date']) ?>
      </postamble>
    </div>
    <div>
      <?php echo $entry['body'] ?>
      <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
    </div>
  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>