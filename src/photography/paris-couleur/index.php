<?php 
  $title = 'Paris Couleur';
  $page_id = 'paris';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class='aside wide'>
  <a href="<?php echo SITE_URL ?>" class=back>
    <h1 class=wordmark>Staydecent</h1>
  </a>

  <div class="title">
    <h1>Paris Couleur</h1>
  </div>

  <div class="body">
    <p class="bigger">I recently visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
    <p class=big>After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a two rolls of Kodak ColorPlus 200. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
  </div>
</div>

<div class=container>
  <div class="content spaced">

    <div>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_5.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_6.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_10.jpg" alt="Paris Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_11.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_2.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_9.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_4.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_13.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisCouleur_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
