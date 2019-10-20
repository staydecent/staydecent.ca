<?php 
  $title = 'Waves';
  $page_id = 'waves';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class=aside>
  <a href="<?php echo SITE_URL ?>photography" class=back>&larr;</a>

  <div class=title>
    <h1>Waves</h1>
    <p class="big">A cold, but sunny day during winter, we headed to the west coast.</p>
  </div>
</div>

<div class=container>
  <div class=content>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/waves_4.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/waves_2.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class=container>
        <img src="<?php echo $base_url ?>/images/waves_6.jpg" alt="Waves Photo by Adrian Unger">      
        <img src="<?php echo $base_url ?>/images/waves_7.jpg" alt="Waves Photo by Adrian Unger">
      </div>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/waves_3.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class=container>
        <img src="<?php echo $base_url ?>/images/waves_5.jpg" alt="Waves Photo by Adrian Unger">
        <img src="<?php echo $base_url ?>/images/waves_8.jpg" alt="Waves Photo by Adrian Unger">
      </div>
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/waves_9.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/waves_11.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/waves_12.jpg" alt="Waves Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class=container>
        <img src="<?php echo $base_url ?>/images/waves_13.jpg" alt="Waves Photo by Adrian Unger">
        <img src="<?php echo $base_url ?>/images/waves_10.jpg" alt="Waves Photo by Adrian Unger">
      </div>
    </div>

    <div class=center>
      <div class=text>
        <p>Thanks for stopping by!</p>
        <p>For prints or inquiries, <br /><a href="mailto:photo@staydecent.ca">send me an email</a>.</p>
        <p><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></p>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
