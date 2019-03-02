<?php 
  $title = 'Waves';
  $page_id = 'waves';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class="book">
  <grid id="main" columns=12 columns-s=1>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_4.jpg" alt="Waves Photo by Adrian Unger">
    </column>
    <column span=6 class="photo">
      <div class="text">
        <div class="title">
          <h1>Waves</h1>
          <p class="big">A cold, but sunny day during winter, we headed to the west coast.</p>
        </div>
      </div>
    </column>
  </grid>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_2.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <grid columns=12 columns-s=1>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_6.jpg" alt="Waves Photo by Adrian Unger">      
    </column>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_7.jpg" alt="Waves Photo by Adrian Unger">
    </column>
  </grid>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_3.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <grid columns=12 columns-s=1>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_5.jpg" alt="Waves Photo by Adrian Unger">
    </column>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_8.jpg" alt="Waves Photo by Adrian Unger">
    </column>
  </grid>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_9.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_11.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/waves_12.jpg" alt="Waves Photo by Adrian Unger">
    </div>
  </div>

  <grid columns=12 columns-s=1>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_10.jpg" alt="Waves Photo by Adrian Unger">
    </column>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/waves_13.jpg" alt="Waves Photo by Adrian Unger">
    </column>
  </grid>

  <div class=spread>
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
