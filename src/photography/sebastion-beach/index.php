<?php 
$title = 'Sebastion Beach';
$page_id = 'sebastion';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>

<article id="sebastion">
  <div class="article-intro">
    <h1 class="center">Sebastion Beach</h1>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/sebastion_10.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_15.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_6.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_4.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_5.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_3.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_7.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_13.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_9.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_11.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_12.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div class=right>
      <div>
        <img src="<?php echo $base_url ?>/sebastion_1.jpg" alt="Sebastion Beach Photo by Adrian Unger">        
      </div>
    </div>

    <div class="contain">
      <img src="<?php echo $base_url ?>/sebastion_2.jpg" alt="Sebastion Beach Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_16.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/sebastion_8.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>

    <div class="contain">
      <img src="<?php echo $base_url ?>/sebastion_17.jpg" alt="Sebastion Beach Photo by Adrian Unger">      
    </div>

  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php'; ?>