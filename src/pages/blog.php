<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class="title-container">
  <h1 class=vp1-title>Notes</h1>
</div>

<div class=container>
  <div class="content repeat-4">

    <div class="col-2 end">
      <h1 class="pagetitle">Infrequent and transient thoughts.</h1>
    </div>

    <?php
      $posts = $entries['blog'];
      krsort($posts);
      $limit = 0;
      foreach ($posts as $date => $entry) {
        if (++$limit > 100) break;
        ?>
        <div>
          <h2><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h2>
          <p><?php echo $entry['excerpt'] ?></p>
        </div>
        <?php
      }
    ?>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>

