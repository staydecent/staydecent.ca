<?php 
$title = 'Sebastion Beach';
$page_id = 'sebastion';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<main>

  <section id=sebastion>
    <div class=f-center>
      <h1 class=break>Sebastion Beach</h1>
      <p class=bigger>Typical winter days captured at Sebastion Beach.</p>
    </div>
    <div>
      <img src="<?php echo $base_url ?>/images/sebastion_10.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <figure class=contain>
      <img src="<?php echo $base_url ?>/images/sebastion_15.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <figure>
      <img src="<?php echo $base_url ?>/images/sebastion_6.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <article class=f-center>
      <img src="<?php echo $base_url ?>/images/sebastion_4.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </article>
    <div class='f-end'>
      <article class=f-center>
        <img src="<?php echo $base_url ?>/images/sebastion_5.jpg" alt="Sebastion Beach Photo by Adrian Unger">
      </article>
    </div>
  </section>

  <section>
    <div>
      <img src="<?php echo $base_url ?>/images/sebastion_3.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>
    <div class=no-mobile>&nbsp;</div>
  </section>

  <section>
    <figure>
      <img src="<?php echo $base_url ?>/images/sebastion_7.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <figure class=contain>
      <img src="<?php echo $base_url ?>/images/sebastion_13.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <figure>
      <img src="<?php echo $base_url ?>/images/sebastion_9.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <figure>
      <img src="<?php echo $base_url ?>/images/sebastion_11.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <figure class=contain>
      <img src="<?php echo $base_url ?>/images/sebastion_12.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </figure>
  </section>

  <section>
    <div class=no-mobile>&nbsp;</div>
    <div>
      <img src="<?php echo $base_url ?>/images/sebastion_1.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/sebastion_2.jpg" alt="Sebastion Beach Photo by Adrian Unger">      
    </figure>
  </section>

  <section>
    <div class=f-end>
      <img src="<?php echo $base_url ?>/images/sebastion_16.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <div>
      <img src="<?php echo $base_url ?>/images/sebastion_8.jpg" alt="Sebastion Beach Photo by Adrian Unger">
    </div>
  </section>

  <section>
    <figure class="contain">
      <img src="<?php echo $base_url ?>/images/sebastion_17.jpg" alt="Sebastion Beach Photo by Adrian Unger">      
    </figure>
  </section>


<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>