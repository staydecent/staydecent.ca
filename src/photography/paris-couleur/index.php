<?php 
$title = 'Paris Couleur';
$page_id = 'paris';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = "https://media.staydecent.ca/sd/" . str_replace(SOURCE, '', __DIR__);
?>

<article id="paris">
  <div class="article-intro">
    <h1 class="center">Paris Couleur</h1>
  </div>

  <section class="cols">
    <div>
      <img src="<?php echo $base_url ?>/pariscouleur_8.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/pariscouleur_5.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div class=center>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/pariscouleur_6.jpg" alt="Paris Photo by Adrian Unger">
      </figure>
    </div>

    <div class=center>
      <img src="<?php echo $base_url ?>/pariscouleur_10.jpg" alt="Paris Photo by Adrian Unger">      
      <div class=no-mobile>&nbsp;</div>
    </div>


    <div>
      <div class=f-end>
        <img src="<?php echo $base_url ?>/pariscouleur_11.jpg" alt="Paris Photo by Adrian Unger">
      </div>
      <div class=no-mobile>&nbsp;</div>
    </div>

    <div>
      <div class=no-mobile>&nbsp;</div>

      <img src="<?php echo $base_url ?>/pariscouleur_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/pariscouleur_2.jpg" alt="Paris Photo by Adrian Unger">
      <div class='f-end'>
        <article class=f-center>
        </article>
      </div>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/pariscouleur_4.jpg" alt="Paris Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/pariscouleur_3.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/pariscouleur_9.jpg" alt="Paris Photo by Adrian Unger">
      <p>In 2018, I visited Paris for the first time. Really, it was my frist time off the North American continent! These are a selection of photos shot on Kodak Gold 200 (or maybe 400?), all shot with a Yashica FX-D and Yashica ML 50mm/2</p>
    </div>


    <div>
      <img src="<?php echo $base_url ?>/pariscouleur_13.jpg" alt="Paris Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/pariscouleur_12.jpg" alt="Paris Photo by Adrian Unger">
    </div>

  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php'; ?>
