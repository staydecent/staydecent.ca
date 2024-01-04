<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class="grid-50 end">
    <h1 class="pagetitle margin"><?php echo $entry['title'] ?></h1>
  </div>
</div>

<section>
  <div class=container>
    <div class=grid-3>
      <div>&nbsp;</div>
      <article class="post span-2">
        <?php echo $entry['body'] ?>

        <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>"><?php echo date("F j, Y", $entry['date']) ?></postamble>

        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
      </article>
  </div>
</section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
