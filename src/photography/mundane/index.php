<?php 
$title = 'Mundane';
$page_id = 'mundane';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>


<article>
  <div class="article-intro">
    <h1 class="center">Mundane</h1>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/mundane_4.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
    <div>
      <img src="<?php echo $base_url ?>/mundane_2.jpg" alt="Mundane Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/mundane_1.jpg" alt="Mundane Photo by Adrian Unger">      
    </div>
    <div>
      <img src="<?php echo $base_url ?>/mundane_3.jpg" alt="Mundane Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/mundane_5.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
    <div>
      <img src="<?php echo $base_url ?>/mundane_6.jpg" alt="Mundane Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/mundane_7.jpg" alt="Mundane Photo by Adrian Unger">
    </div>
    <div>
      <img src="<?php echo $base_url ?>/mundane_8.jpg" alt="Mundane Photo by Adrian Unger">
    </div>

  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>
