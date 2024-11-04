<?php 
  $title = 'Maui';
  $page_id = 'maui';
  $body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<article id="picos">
  <div class="article-intro">
    <h2 class="center">Maui</h2>
    <p class="display">10 days packed with rugged coastlines, beaches of assorted colours, roads to waterfalls, and dense tropical jungles.</p>
  </div>

  <section class="cols">


  <div>
    <figure class=contain>
      <img src="<?php echo $base_url ?>/images/maui_2.jpg" alt="Maui Photo by Adrian Unger">
    </figure>
  </div>

  <div>
    <img src="<?php echo $base_url ?>/images/maui_6.jpg" alt="Maui Photo by Adrian Unger">
    <img src="<?php echo $base_url ?>/images/maui_4.jpg" alt="Maui Photo by Adrian Unger">
  </div>

  <div>
    <figure>
      <img src="<?php echo $base_url ?>/images/maui_5.jpg" alt="Maui Photo by Adrian Unger">      
    </figure>
  </div>

  <div>
    <figure class=contain>
      <img src="<?php echo $base_url ?>/images/maui_3.jpg" alt="Maui Photo by Adrian Unger">      
    </figure>
  </div>

  <div>
    <div>
      <img src="<?php echo $base_url ?>/images/maui_7.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class=f-end>
      <img src="<?php echo $base_url ?>/images/maui_8.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/maui_9.jpg" alt="Maui Photo by Adrian Unger">      
    </figure>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/maui_10.jpg" alt="Maui Photo by Adrian Unger">      
    </figure>
  </div>

  <div>
    <figure class="cover">
      <img src="<?php echo $base_url ?>/images/maui_12.jpg" alt="Maui Photo by Adrian Unger">      
    </figure>
    <figure class="cover">
      <img src="<?php echo $base_url ?>/images/maui_11.jpg" alt="Maui Photo by Adrian Unger">      
    </figure>
  </div>

  <div>
    <figure class=contain>
      <img src="<?php echo $base_url ?>/images/maui_13.jpg" alt="Maui Photo by Adrian Unger">
    </figure>
  </div>

</section>

<?php 
include $config['dirs']['layout'].'/footer.php'
?>

