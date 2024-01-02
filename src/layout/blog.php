<?php $page_id = 'blog'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class="title-container">
  <h1 class=vp1-title>Notes</h1>
</div>

<div class=container>
  <div class="grid-50 end">
    <h2 class="pagetitle margin"><?php echo $entry['title'] ?></h2>
  </div>
</div>

<section>
  <div class=container>
    <div class=grid-3>
      <div>&nbsp;</div>
      <article class=span-2>
        <?php echo $entry['body'] ?>

        <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>"><?php echo date("F j, Y", $entry['date']) ?></postamble>

        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
      </article>
  </div>
</section>

<?php include $config['dirs']['layout'].'/footer.php' ?>
