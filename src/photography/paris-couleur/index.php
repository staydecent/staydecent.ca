<?php 
  $title = 'Paris Couleur';
  $page_id = 'paris';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class='aside wide'>
  <div class="title">
    <h1>Paris Couleur</h1>
  </div>

  <div class="body">
    <p class="bigger">In 2018, I visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
    <p class=big>After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a two rolls of Kodak ColorPlus 200. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
  </div>
</div>

<div class=container>
  <div class="content spaced">

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_5.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/pariscouleur_6.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/pariscouleur_10.jpg" alt="Paris Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_11.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_2.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>&nbsp;</div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_4.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_9.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/pariscouleur_13.jpg" alt="Paris Photo by Adrian Unger">
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
