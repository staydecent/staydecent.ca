<?php 
$page_id = 'blog';
$body_class = 'text';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<main>

  <section id=intro>
    <article class=f-end>
      <div>
        <h1>Mostly incomplete thoughts on&nbsp;<em>stuff</em>.</h1>        
      </div>
    </article>
    <div class=no-mobile>&nbsp;</div>
  </section>

  <?php
    $posts = $entries['blog'];
    krsort($posts);
    $limit = 0;
    foreach ($posts as $date => $entry) {
      if (++$limit > 1000) break;
      ?>
      <section class="spaced<?php echo $limit % 2 == 0 ? '' : ' alt' ?>">
        <section>
          <article>
            <div>
              <h2 class="normal"><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h2>
            </div>
          </article>
          <article>
            <div>
              <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>">
                <a class="black plain" href="<?php echo $entry['url']; ?>"><?php echo date("M j Y", $entry['date']) ?></a>
              </postamble>
            </div>
          </article>
        </section>
        <div class=no-mobile>&nbsp;</div>
      </section>

      <section class="<?php echo $limit % 2 == 0 ? '' : 'alt' ?>">
        <article>
          <div>
            <p class="h2"><?php echo $entry['excerpt'] ?></p>
          </div>
        </article>
        <div class="no-mobile"></div>
      </section>
      <?php
    }
  ?>

</main>

<?php include $config['dirs']['layout'].'/footer.php' ?>