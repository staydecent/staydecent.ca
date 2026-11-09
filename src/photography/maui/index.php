<?php 
$title = 'Maui';
$page_id = 'maui';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>

<article>
  <div class="article-intro">
    <h1 class="center">Maui</h1>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/maui_2.jpg" alt="Maui Photo by Adrian Unger">
      <p class="display">10 days packed with rugged coastlines, beaches of assorted colours, roads to waterfalls, and dense tropical jungles.</p>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_6.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_4.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_5.jpg" alt="Maui Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_3.jpg" alt="Maui Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_7.jpg" alt="Maui Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/maui_8.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_9.jpg" alt="Maui Photo by Adrian Unger">      
      <img src="<?php echo $base_url ?>/maui_10.jpg" alt="Maui Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_12.jpg" alt="Maui Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_13.jpg" alt="Maui Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/maui_11.jpg" alt="Maui Photo by Adrian Unger">
    </div>

  </section>

</article>

<?php include $config['dirs']['layout'].'/footer.php'; ?>
