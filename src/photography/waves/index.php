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


<main>

  <section>
    <div class=f-center>
      <h1>Waves</h1>
      <p class=display>A cold, but sunny day during winter, we headed to the west coast.</p>
    </div>
    <div class=f-center>
      <img src="<?php echo $base_url ?>/images/waves_4.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/waves_2.jpg" alt="Waves Photo by Adrian Unger">
  </section>

  <section>
    <div>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/waves_6.jpg" alt="Waves Photo by Adrian Unger">
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/waves_7.jpg" alt="Waves Photo by Adrian Unger">
    <div>&nbsp;</div>
  </section>

  <section class=center>
    <img src="<?php echo $base_url ?>/images/waves_8.jpg" alt="Waves Photo by Adrian Unger">
    <div>&nbsp;</div>
  </section>

  <section>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/waves_3.jpg" alt="Waves Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <div>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/waves_5.jpg" alt="Waves Photo by Adrian Unger">
  </section>

  <section>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/waves_12.jpg" alt="Waves Photo by Adrian Unger">
    </figure>
  </section>


  <section>
    <div class=f-end>
      <img src="<?php echo $base_url ?>/images/waves_9.jpg" alt="Waves Photo by Adrian Unger">
    </div>
    <div>
    <img src="<?php echo $base_url ?>/images/waves_11.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <div>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/waves_13.jpg" alt="Waves Photo by Adrian Unger">      
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/waves_10.jpg" alt="Waves Photo by Adrian Unger">
    <div>&nbsp;</div>
      
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>

