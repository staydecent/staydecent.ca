<?php 
  $title = 'Paris Couleur';
  $page_id = 'paris';
  $body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<article id="picos">
  <div class="article-intro">
    <h2 class="center">Paris Couleur</h2>
    <p class="display">In 2018, I visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
  </div>

  <section class="cols">
    <div class=f-center>
      <img src="<?php echo $base_url ?>/images/pariscouleur_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_5.jpg" alt="Paris Photo by Adrian Unger">
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div class=center>
      <figure class="contain">
      <img src="<?php echo $base_url ?>/images/pariscouleur_6.jpg" alt="Paris Photo by Adrian Unger">
      </figure>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/images/pariscouleur_10.jpg" alt="Paris Photo by Adrian Unger">      
      <div class=no-mobile>&nbsp;</div>
    </div>


    <div>
      <div class=f-end>
        <img src="<?php echo $base_url ?>/images/pariscouleur_11.jpg" alt="Paris Photo by Adrian Unger">
      </div>
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>

      <img src="<?php echo $base_url ?>/images/pariscouleur_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_2.jpg" alt="Paris Photo by Adrian Unger">
      <div class='f-end'>
        <article class=f-center>
        </article>
      </div>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_4.jpg" alt="Paris Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/images/pariscouleur_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <div class=f-end>
      <img src="<?php echo $base_url ?>/images/pariscouleur_9.jpg" alt="Paris Photo by Adrian Unger">
      </div>
    </div>


    <div>
      <img src="<?php echo $base_url ?>/images/pariscouleur_13.jpg" alt="Paris Photo by Adrian Unger">        
    </div>

    <div class=right>
      <img src="<?php echo $base_url ?>/images/pariscouleur_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>

  </section>

<?php 
include $config['dirs']['layout'].'/footer.php'
?>

