<?php 
  $title = 'Shinrinyoku';
  $page_id = 'shinrinyoku';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class='aside wide'>
  <a href="<?php echo SITE_URL ?>" class=back>
    <h1 class=wordmark>Staydecent</h1>
  </a>

  <div class="title">
    <h1>Forest Bathing</h1>
    <h2>森林浴</h2>
  </div>

  <div class="body">
    <p class=big>Forest Bathing is simply the act of leisurely spending time in a forest. The term, and research into the benefits, comes from Japan where it is recognized as a relaxation and stress management activity.</p>
    <p class=>For myself, it’s essential — I can’t go more than a week without feeling crazy. Time outdoors of any kind I’m sure is beneficial, but living in a Temperate Rainforest, it’s hard not to be in the trees.</p>
  </div>
</div>

<div class=container>
  <div class="content spaced">

    <div class=right>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_5.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_1.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_2.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_4.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_6.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_7.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_10.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_8.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/shinrinyoku_9.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
