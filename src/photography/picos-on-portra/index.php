<?php
  $title = 'Picos on Portra';
  $page_id = 'picos';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class=aside>
  <nav>
    <a href="<?php echo SITE_URL ?>photography" class=back>&larr;</a>    
  </nav>

  <div class="title">
    <h1>Picos on Portra</h1>
  </div>

  <div class="body">
    <p class="bigger">In September of 2018 I left the North American continent for the first time, to spend three weeks in Spain.</p>
    <p class="big">Part of the trip involved hiking in the Picos De Europa national park in northern Spain. These are some selected photos from a roll of Kodak Portra 160. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
  </div>
</div>

<div class=container>
  <div class="content spaced">

    <div class=center>
      <img src="<?php echo $base_url ?>/images/picos_2.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <div class="container start">
        <img src="<?php echo $base_url ?>/images/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
        <img src="<?php echo $base_url ?>/images/picos_6.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </div>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/picos_8.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/picos_11.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <div class="text">
        <div class="title">
          <p class="bigger">The scale of the of the place was hard to comprehend.</p>
          <p class="bigger">When I spotted a group of people ahead of us, the massive size of the rock walls became clear.</p>
        </div>
      </div>
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/picos_5.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/picos_10.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <div class="container start">
        <img src="<?php echo $base_url ?>/images/picos_12.jpg" alt="Picos De Europa Photo by Adrian Unger">      
        <img src="<?php echo $base_url ?>/images/picos_4.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </div>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/picos_1.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div>
      <div class="container start">
        <img src="<?php echo $base_url ?>/images/picos_7.jpg" alt="Picos De Europa Photo by Adrian Unger">      
        <img src="<?php echo $base_url ?>/images/picos_9.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </div>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/picos_14.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/picos_13.jpg" alt="Picos De Europa Photo by Adrian Unger">
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
