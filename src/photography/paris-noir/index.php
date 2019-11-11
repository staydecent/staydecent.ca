<?php 
  $title = 'Paris Noir';
  $page_id = 'noir';
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
    <h1>Paris Noir</h1>
  </div>

  <div class="body">
    <p class="bigger">I recently visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
    <p class=big>After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a roll of Ilford XP2. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
  </div>
</div>

<div class=container>
  <div class="content spaced">

    <div class=left>
      <img src="<?php echo $base_url ?>/images/ParisNoir_7.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisNoir_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class="container">
        <img src="<?php echo $base_url ?>/images/ParisNoir_5.jpg" alt="Paris Photo by Adrian Unger">      
        <img src="<?php echo $base_url ?>/images/ParisNoir_13.jpg" alt="Paris Photo by Adrian Unger">
      </div>
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/ParisNoir_11.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class="container">
        <img src="<?php echo $base_url ?>/images/ParisNoir_1.jpg" alt="Paris Photo by Adrian Unger">
        <img src="<?php echo $base_url ?>/images/ParisNoir_2.jpg" alt="Paris Photo by Adrian Unger">
      </div>
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/ParisNoir_9.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=>
      <img src="<?php echo $base_url ?>/images/ParisNoir_6.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/ParisNoir_10.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/ParisNoir_14.jpg" alt="Paris Photo by Adrian Unger">      
    </div>
    <div class=>
      <img src="<?php echo $base_url ?>/images/ParisNoir_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/ParisNoir_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=x>
      <img src="<?php echo $base_url ?>/images/ParisNoir_4.jpg" alt="Paris Photo by Adrian Unger">
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
