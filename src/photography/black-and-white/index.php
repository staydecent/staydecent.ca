<?php 
$title = 'Black &amp; White';
$page_id = 'noir';
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
      <img src="<?php echo $base_url ?>/bnw_10.jpg" alt="Black and White Photo by Adrian Unger">        
    </div>

    <div class="photo">
      <img src="<?php echo $base_url ?>/bnw_11.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/bnw_2.jpg" alt="Black and White Photo by Adrian Unger">       
    </div>

    <div>
        <img src="<?php echo $base_url ?>/bnw_12.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
        <img src="<?php echo $base_url ?>/bnw_15.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
        <img src="<?php echo $base_url ?>/bnw_9.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
        <img src="<?php echo $base_url ?>/bnw_14.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div class="photo">
      <img src="<?php echo $base_url ?>/bnw_7.jpg" alt="Black and White Photo by Adrian Unger">
    </div>

    <div class="photo">
      <img src="<?php echo $base_url ?>/bnw_8.jpg" alt="Black and White Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/bnw_6.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/bnw_1.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/bnw_4.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/bnw_5.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/bnw_3.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>


  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>
