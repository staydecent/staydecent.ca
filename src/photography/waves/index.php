<?php
  $title = 'Waves';
  $page_id = 'waves';
  $body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>

<article>
  <div class="article-intro">
    <h1 class="center">Waves</h1>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/waves_2.jpg" alt="Waves Photo by Adrian Unger">
      <p class="display">A cold, but sunny day during winter, we headed to the west coast.</p>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/waves_6.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/waves_7.jpg" alt="Waves Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/waves_8.jpg" alt="Waves Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <figure class="contain">
      <img src="<?php echo $base_url ?>/waves_3.jpg" alt="Waves Photo by Adrian Unger">
      </figure>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/waves_5.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
      <img src="<?php echo $base_url ?>/waves_12.jpg" alt="Waves Photo by Adrian Unger">
      </figure>
    </div>


    <div>
      <div class=f-end>
        <img src="<?php echo $base_url ?>/waves_9.jpg" alt="Waves Photo by Adrian Unger">
      </div>
      <div>
      <img src="<?php echo $base_url ?>/waves_11.jpg" alt="Waves Photo by Adrian Unger">
      </div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/waves_13.jpg" alt="Waves Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/waves_10.jpg" alt="Waves Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
        
    </div>
  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php'; ?>
