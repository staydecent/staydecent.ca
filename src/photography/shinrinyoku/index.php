<?php 
  $title = 'Shinrinyoku';
  $page_id = 'shinrinyoku';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class="book">
  <grid id="main" columns=12>
    <column span=6 class="photo">
      <div class="text">
        <div class="title">
          <h1>Forest Bathing</h1>
          <h2>森林浴</h2>
        </div>
        <div class="body">
          <p>Forest Bathing is simply the act of leisurely spending time in a forest. The term, and research into the benefits, comes from Japan where it is recognized as a relaxation and stress management activity.</p>
          <p>For myself, it’s essential — I can’t go more than a week without feeling crazy. Time outdoors of any kind I’m sure is beneficial, but living in a Temperate Rainforest, it’s hard not to be in the trees.</p>
        </div>
      </div>
    </column>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_3.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </column>
  </grid>

  <grid columns=12 class=split>
    <column span=6 class=photo>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_2.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </column>
    <column span=6 class=photo>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_1.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </column>
  </grid>

  <grid columns=12 class=split>
    <column span=6 class=photo>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_4.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </column>
    <column span=6 class=photo>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_5.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </column>
  </grid>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_6.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>
  </div>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_7.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
  </div>

  <grid columns=12>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_8.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </column>
    <column span=6 class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_9.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </column>
  </grid>

  <div class="spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_10.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>
  </div>

  <grid columns=12>
    <column span=10 class="photo">
      <div class="text">
        <div class="title">
          <h2>Thanks for stopping by!</h2>
          <h2>For prints or inquiries, <br /><a href="mailto:photo@staydecent.ca">send me an email</a>.</h2>
          <h2><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></h2>
        </div>
      </div>
    </column>
  </grid>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
