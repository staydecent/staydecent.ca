<?php 
$title = 'Forest Bathing 森林浴';
$page_id = 'shinrinyoku';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>

<article>
  <div class="article-intro">
    <h1 class="center"><?php echo $title ?></h1>
  </div>

  <section class="cols">

    <div>
      <p class=big>Forest Bathing is simply the act of leisurely spending time in a forest. The term, and research into the benefits, comes from Japan where it is recognized as a relaxation and stress management activity.</p>
      <p class=>For myself, it’s essential — I can’t go more than a week without feeling crazy. Time outdoors of any kind I’m sure is beneficial, but living in a Temperate Rainforest, it’s hard not to be in the trees.</p>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/shinrinyoku_5.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/shinrinyoku_1.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/shinrinyoku_2.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/shinrinyoku_4.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/shinrinyoku_6.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/shinrinyoku_7.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/shinrinyoku_10.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/shinrinyoku_8.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/shinrinyoku_9.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
  </section>
</article>


<?php include $config['dirs']['layout'].'/footer.php' ?>
