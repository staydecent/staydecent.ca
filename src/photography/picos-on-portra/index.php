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


<main>

  <section>
    <div class=f-center>
      <h1 class=break>Picos on Portra</h1>
      <p class="display">In September of 2018 I left the North American continent for the first time, to spend three weeks in Spain.</p>
      <p>Part of the trip involved hiking in the Picos De Europa national park in northern Spain. These are some selected photos from a roll of Kodak Portra 160. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
    </div>
    <div class="f-end">
      <img src="<?php echo $base_url ?>/images/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/picos_8.jpg" alt="Picos De Europa Photo by Adrian Unger">      
    </figure>
  </section>


  <section>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/picos_2.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_6.jpg" alt="Picos De Europa Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_11.jpg" alt="Picos De Europa Photo by Adrian Unger">
  </section>

  <section>
    <div class=no-mobile>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/picos_12.jpg" alt="Picos De Europa Photo by Adrian Unger">      
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_5.jpg" alt="Picos De Europa Photo by Adrian Unger">
    <div class=f-end>
      <article>
        <p>The scale of the of the place was hard to comprehend.</p>
        <p>When I spotted a group of people ahead of us, the massive size of the rock walls became clear.</p>        
      </article>
    </div>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

  <section>
    <div class=no-mobile>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/picos_4.jpg" alt="Picos De Europa Photo by Adrian Unger">
  </section>

  <section>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/picos_10.jpg" alt="Picos De Europa Photo by Adrian Unger">      
    </figure>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_1.jpg" alt="Picos De Europa Photo by Adrian Unger">
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_7.jpg" alt="Picos De Europa Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

  <section>
    <div class=no-mobile>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/picos_9.jpg" alt="Picos De Europa Photo by Adrian Unger">
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/picos_14.jpg" alt="Picos De Europa Photo by Adrian Unger">
  </section>

  <section class=center>
    <div class=no-mobile>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/picos_13.jpg" alt="Picos De Europa Photo by Adrian Unger">
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>