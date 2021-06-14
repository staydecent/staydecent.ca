<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class="content repeat-4">

    <div class=col-2>
      <h1 class="pagetitle">Infrequent thoughts, links and creations.</h1>
    </div>

    <?php
      $posts = $entries['blog'];
      krsort($posts);
      $limit = 0;
      foreach ($posts as $date => $entry) {
        if (++$limit > 100) break;
        ?>
        <div>
          <?php if (!empty($entry['jetpack_featured_media_url'])): ?>
            <a href="<?php entry_href($entry); ?>">
              <img src="<?php echo $entry['jetpack_featured_media_url'] ?>" alt="<?php echo $entry['title']['rendered'] ?>">
            </a>
            <h3 class=caption><a href="<?php entry_href($entry); ?>"><?php echo $entry['title']['rendered'] ?></a></h3>
          <?php else: ?>
            <h3><a href="<?php entry_href($entry); ?>"><?php echo $entry['title']['rendered'] ?></a></h3>
            <p><?php echo $entry['excerpt']['rendered'] ?></p>
          <?php endif; ?>
        </div>
        <?php
      }
    ?>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>

