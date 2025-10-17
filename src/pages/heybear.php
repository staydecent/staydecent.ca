<?php $title = 'Hey Bear!'; ?>
<?php $page_id = 'heybear'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article id="heybear">
  <div class="article-intro">
    <h2 class="center">Hey Bear!</h2>
    <section class="cols">
      <div>
        <p>Revelations from Nature. Just honest-to-goodness nuggets of joy and delight with the occasional self-reflection. <a href="https://buttondown.com/heybear" target=_blank>Subscribe to the newsletter</a>.</p>
        <br>
      </div>
    </section>
  </div>

  <section class="cols">
    <?php
      $posts = $entries['heybear'];
      krsort($posts);
      $limit = 0;
      foreach ($posts as $date => $entry) {
        if (++$limit > 1000) break;
        ?>
        <div>
          <?php echo entry_image($entry, 'contain') ?>
          <div class=title>
            <a class=plain href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?> →</a>
          </div>
        </div>
        <?php
      }
    ?>
  </section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
