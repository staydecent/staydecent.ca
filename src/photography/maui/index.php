<?php 
  $title = 'Maui'
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div id="maui" class="book">
  <div id="main" class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_1.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Maui</h1>
          <p class="big">10 days packed with rugged coastlines, <br/>beaches of assorted colours, roads to waterfalls and dense tropical jungles.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_2.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_6.jpg" alt="Maui Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_4.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_5.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_3.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_7.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_8.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_9.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_10.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_11.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_12.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_13.jpg" alt="Maui Photo by Adrian Unger">
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
