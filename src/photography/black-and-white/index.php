<?php 
  $title = 'Black &amp; White'
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class="book">
  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_1.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Black &amp; White</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_2.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_3.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_4.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_5.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_6.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_7.jpg" alt="Black and White Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_8.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_9.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_10.jpg" alt="Black and White Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_11.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_12.jpg" alt="Black and White Photo by Adrian Unger">      
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
  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
