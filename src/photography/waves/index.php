<?php 
  $title = 'Waves'
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div id="waves" class="book">
  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_4.jpg" alt="Waves Photo by Adrian Unger">
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Waves</h1>
          <p class="big">A cold, but sunny day during winter, we headed to the west coast.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_2.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_6.jpg" alt="Waves Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_7.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_3.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_5.jpg" alt="Waves Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_8.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_9.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_11.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_12.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_10.jpg" alt="Waves Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_13.jpg" alt="Waves Photo by Adrian Unger">
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
