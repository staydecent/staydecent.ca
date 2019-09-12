<?php 
  $title = 'Picos on Portra';
  $page_id = 'picos';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class="book">

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/picos_2.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div id="main" class="page">
    <grid columns=12 columns-s=1>
      <column span=1-4 span-s=row>
        <div class="text">
          <div class="title">
            <h1>Picos on Portra</h1>
          </div>
        </div>
      </column>
      <column span=7-12 span-s=row>
        <div class="text">
          <p class="bigger">In September of 2018 I left the North American continent for the first time, to spend three weeks in Spain.</p>
          <p class="big">Part of the trip involved hiking in the Picos De Europa national park in northern Spain. These are some selected photos from a roll of Kodak Portra 160. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
        </div>
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=2-5 class="down">
        <img src="<?php echo $base_url ?>/images/picos_3.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
      <column span=7-11 class="double">
        <img src="<?php echo $base_url ?>/images/picos_6.jpg" alt="Picos De Europa Photo by Adrian Unger">

      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/picos_8.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/picos_11.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=2-6 span-s=row class=down>
        <div class="text">
          <div class="title">
            <h2>The scale of the of the place was hard to comprehend.</h2>
            <p class="bigger">When I spotted a group of people ahead of us, the massive size of the rock walls became clear.</p>
          </div>
        </div>
      </column>
      <column span=7-12 span-s=row class=down>
        <img src="<?php echo $base_url ?>/images/picos_5.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/picos_10.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=2-5 span-s=row>
        <img src="<?php echo $base_url ?>/images/picos_12.jpg" alt="Picos De Europa Photo by Adrian Unger">      
      </column>
      <column span=8-11 span-s=row class=down>
        <img src="<?php echo $base_url ?>/images/picos_4.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/picos_1.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=1-5 span-s=row class="photo">
        <img src="<?php echo $base_url ?>/images/picos_7.jpg" alt="Picos De Europa Photo by Adrian Unger">      
      </column>
      <column span=8-12 span-s=row class="photo">
        <img src="<?php echo $base_url ?>/images/picos_9.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12>
      <column span=row>
        <img src="<?php echo $base_url ?>/images/picos_14.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=2-7 span-s=row class=down-more>
        <div class="text">
          <div class="title">
            <h2>Thanks for stopping by!</h2>
            <h2>For prints or inquiries, <br /><a href="mailto:photo@staydecent.ca">send me an email</a>.</h2>
            <h2><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></h2>
          </div>
        </div>
      </column>
      <column span=8-11 span-s=row>
        <img src="<?php echo $base_url ?>/images/picos_13.jpg" alt="Picos De Europa Photo by Adrian Unger">
      </column>
    </grid>
  </div>

</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
