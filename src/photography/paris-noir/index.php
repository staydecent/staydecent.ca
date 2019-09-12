<?php 
  $title = 'Paris Noir';
  $page_id = 'noir';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div id="main" class="book">

  <grid columns=12>
    <column span=3+4 span-s=row class="text">
      <div class="title">
        <h1>Paris Noir</h1>
        <p class="big">I recently visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
        <p>After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a roll of Ilford XP2. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
      </div>
    </column>
    <column span=6 span-s=row>
      <img src="<?php echo $base_url ?>/images/ParisNoir_7.jpg" alt="Paris Photo by Adrian Unger">
    </column>
  </grid>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/ParisNoir_8.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=2-6>
        <img src="<?php echo $base_url ?>/images/ParisNoir_5.jpg" alt="Paris Photo by Adrian Unger">      
      </column>
      <column span=8-11 class=down>
        <img src="<?php echo $base_url ?>/images/ParisNoir_13.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/ParisNoir_11.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=2-5>
        <img src="<?php echo $base_url ?>/images/ParisNoir_1.jpg" alt="Paris Photo by Adrian Unger">
      </column>
      <column span=7-11>
        <img src="<?php echo $base_url ?>/images/ParisNoir_2.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=9>
        <img src="<?php echo $base_url ?>/images/ParisNoir_9.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=3-12>
        <img src="<?php echo $base_url ?>/images/ParisNoir_6.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/ParisNoir_10.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page spaced">
    <grid columns=12 class=split>
      <column span=2-5>
        <img src="<?php echo $base_url ?>/images/ParisNoir_14.jpg" alt="Paris Photo by Adrian Unger">      
      </column>
      <column span=7-11>
        <img src="<?php echo $base_url ?>/images/ParisNoir_12.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=9>
        <img src="<?php echo $base_url ?>/images/ParisNoir_3.jpg" alt="Paris Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=4 span-s=row>
        <img src="<?php echo $base_url ?>/images/ParisNoir_4.jpg" alt="Paris Photo by Adrian Unger">
      </column>
      <column span=6.. span-s=row class="photo text">
        <div class="title">
          <h2>Thanks for stopping by!</h2>
          <h2>For prints or inquiries, <br /><a href="mailto:photo@staydecent.ca">send me an email</a>.</h2>
          <h2><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></h2>
        </div>
      </column>
    </grid>
  </div>

</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
