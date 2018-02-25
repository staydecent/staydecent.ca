<?php 
  $title = 'Mundane'
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div id="mundane" class="book">
  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_4.jpg" alt="Mundane Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/images/mundane_2.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Mund—<br />ane</h1>
          <p class="big">Everyday scenes that happen to feel almost surreal.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_1.jpg" alt="Mundane Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_3.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_5.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_6.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
  </div>

  <div class="grid">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_7.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/mundane_8.jpg" alt="Mundane Photo by Adrian Unger">
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
