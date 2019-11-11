<?php 
  $title = 'Maui';
  $page_id = 'maui';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class=aside>
  <nav>
    <a href="<?php echo SITE_URL ?>photography" class=back>&larr;</a>    
  </nav>

  <div class=title>
    <h1>Maui</h1>
  </div>

  <div class=body>
    <p class=bigger>10 days packed with rugged coastlines, beaches of assorted colours, roads to waterfalls, and dense tropical jungles.</p>
  </div>
</div>

<div class=container>
  <div class="content spaced">

    <div class=left>
      <img src="<?php echo $base_url ?>/images/maui_1.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_2.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class="container">
        <img src="<?php echo $base_url ?>/images/maui_6.jpg" alt="Maui Photo by Adrian Unger">      
        <img src="<?php echo $base_url ?>/images/maui_4.jpg" alt="Maui Photo by Adrian Unger">
      </div>
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_5.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_3.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_7.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_8.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_9.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_10.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div class=right>
      <div class=container>
        <img src="<?php echo $base_url ?>/images/maui_11.jpg" alt="Maui Photo by Adrian Unger">
        <img src="<?php echo $base_url ?>/images/maui_12.jpg" alt="Maui Photo by Adrian Unger">        
      </div>
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/maui_13.jpg" alt="Maui Photo by Adrian Unger">
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
