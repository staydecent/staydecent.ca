<?php 
  $title = 'Paris Noir';
  $page_id = 'noir';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class='aside wide'>
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

    <div>
      <img src="<?php echo $base_url ?>/images/parisnoir_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=left>
      <img src="<?php echo $base_url ?>/images/parisnoir_7.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/parisnoir_5.jpg" alt="Paris Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/parisnoir_13.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/parisnoir_11.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/parisnoir_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/parisnoir_2.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/parisnoir_9.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=>
      <img src="<?php echo $base_url ?>/images/parisnoir_6.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/parisnoir_10.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/parisnoir_14.jpg" alt="Paris Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/parisnoir_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/parisnoir_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=x>
      <img src="<?php echo $base_url ?>/images/parisnoir_4.jpg" alt="Paris Photo by Adrian Unger">
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
