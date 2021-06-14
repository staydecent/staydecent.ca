<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class=content>

    <div>
      <div>
        <h1 class="pagetitle"><?php echo $entry['title']['rendered'] ?></h1>
        <div class="meta"><p>Posted on <?php echo date("F j, Y", strtotime($entry['date'])) ?></p></div>
      </div>

      <div class=blog>
        <?php echo $entry['content']['rendered'] ?>
        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
