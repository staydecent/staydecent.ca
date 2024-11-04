<?php
  $title = 'Waves';
  $page_id = 'waves';
  $body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<article id="picos">
  <div class="article-intro">
    <h2 class="center">Waves</h2>
    <p class="display">A cold, but sunny day during winter, we headed to the west coast.</p>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/images/waves_2.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/waves_6.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/waves_7.jpg" alt="Waves Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/waves_8.jpg" alt="Waves Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <figure class="contain">
      <img src="<?php echo $base_url ?>/images/waves_3.jpg" alt="Waves Photo by Adrian Unger">
      </figure>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/waves_5.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
      <img src="<?php echo $base_url ?>/images/waves_12.jpg" alt="Waves Photo by Adrian Unger">
      </figure>
    </div>


    <div>
      <div class=f-end>
        <img src="<?php echo $base_url ?>/images/waves_9.jpg" alt="Waves Photo by Adrian Unger">
      </div>
      <div>
      <img src="<?php echo $base_url ?>/images/waves_11.jpg" alt="Waves Photo by Adrian Unger">
      </div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/waves_13.jpg" alt="Waves Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/waves_10.jpg" alt="Waves Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
        
    </div>
  </section>

<?php 
include $config['dirs']['layout'].'/footer.php'
?>

