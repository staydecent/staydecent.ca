<?php $page_id = 'code'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class=content>

    <div>
      <div class="grid">
        <div>
          <h1 class=pagetitle><?php echo $entry['title'] ?></h1>
        </div>
        <div class=span-2>
          <?php echo $entry['body'] ?>
          <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>"><?php echo date("F j, Y", $entry['date']) ?></postamble>
          <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
