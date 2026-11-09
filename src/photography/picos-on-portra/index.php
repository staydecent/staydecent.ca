<?php
$title = 'Picos on Portra';
$page_id = 'picos';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>

<article id="picos">
  <div class="article-intro">
    <h1 class="center">Picos on Portra</h1>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/picos_8.jpg" alt="Picos De Europa Photo by Adrian Unger"> 
        <p class="display">In September of 2018 I left the North American continent for the first time, to spend three weeks in Spain.</p>     
      </figure>
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/picos_2.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </figure>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_6.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_11.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/picos_12.jpg" alt="Picos De Europa Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_5.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=f-end>
        <article>
          <p>The scale of the of the place was hard to comprehend.</p>
          <p>When I spotted a group of people ahead of us, the massive size of the rock walls became clear.</p>        
        </article>
      </div>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/picos_4.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/picos_10.jpg" alt="Picos De Europa Photo by Adrian Unger">      
      </figure>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_1.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_7.jpg" alt="Picos De Europa Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/picos_9.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/picos_14.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div class=center>
      <div class=no-mobile>&nbsp;</div>
      <img src="<?php echo $base_url ?>/picos_13.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

  </section>
</article>

<?php 
include $config['dirs']['layout'].'/footer.php'
?>