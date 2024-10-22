<?php
$title = 'Picos on Portra';
$page_id = 'picos';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<article id="picos">
  <div class="article-intro">
    <h2 class="center">Picos on Portra</h2>
    <p class="display">In September of 2018 I left the North American continent for the first time, to spend three weeks in Spain.</p>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/images/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/images/picos_8.jpg" alt="Picos De Europa Photo by Adrian Unger">      
      </figure>
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/images/picos_2.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </figure>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_6.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_11.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/picos_12.jpg" alt="Picos De Europa Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_5.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=f-end>
        <article>
          <p>The scale of the of the place was hard to comprehend.</p>
          <p>When I spotted a group of people ahead of us, the massive size of the rock walls became clear.</p>        
        </article>
      </div>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/picos_4.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/images/picos_10.jpg" alt="Picos De Europa Photo by Adrian Unger">      
      </figure>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_1.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_7.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/picos_9.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/picos_14.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div class=center>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/images/picos_13.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

  </section>

<?php 
include $config['dirs']['layout'].'/footer.php'
?>