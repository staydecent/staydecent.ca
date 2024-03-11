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
        <h1><?php echo $entry['title'] ?></h1>        
      </div>
    </article>
    <div>
      <postamble datetime="<?php echo date("Y-m-d", $entry['date']) ?>">
        <span><?php echo date("F j, Y", $entry['date']) ?></span>
      </postamble>
    </div>
  </section>

  <section class="alt">
    <article>
      <div>
        <?php echo $entry['body'] ?>
      </div>
    </article>
    <div class="no-mobile"></div>
  </section>

</main>

<?php include $config['dirs']['layout'].'/footer.php' ?>