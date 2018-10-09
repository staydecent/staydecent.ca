<?php 
  $title = 'Paris Couleur'
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div id="couleur" class="book">
  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Paris Couleur</h1>
          <p class="big">I recently visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
          <p>After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a two rolls of Kodak ColorPlus 200. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_6.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_10.jpg" alt="Paris Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_5.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_11.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_2.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_9.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_4.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_13.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <div class="text">
        <div class="title">
          <h2>Thanks for stopping by!</h2>
          <h2>For prints or inquiries, <br /><a href="mailto:photo@staydecent.ca">send me an email</a>.</h2>
          <h2><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></h2>
        </div>
      </div>
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/ParisCouleur_7.jpg" alt="Paris Photo by Adrian Unger">
    </div>
  </div>

</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
