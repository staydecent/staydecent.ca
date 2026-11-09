<?php 
$title = 'Paris Noir';
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
      <img src="<?php echo $base_url ?>/parisnoir_7.jpg" alt="Paris Photo by Adrian Unger">      
    </div>

    <div>
      <article class=f-center>
        <img src="<?php echo $base_url ?>/parisnoir_8.jpg" alt="Paris Photo by Adrian Unger">
      </article>

      <p class="display">In 2018, I visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/parisnoir_5.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <div class='f-end'>
        <article class=f-center>
          <img src="<?php echo $base_url ?>/parisnoir_11.jpg" alt="Paris Photo by Adrian Unger">
        </article>
      </div>
      <p>After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a roll of Ilford XP2. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
    </div>

    <div>
      <img src="<?php echo $base_url ?>/parisnoir_13.jpg" alt="Paris Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/parisnoir_1.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/parisnoir_2.jpg" alt="Paris Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/parisnoir_4.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/parisnoir_6.jpg" alt="Paris Photo by Adrian Unger">
      <img src="<?php echo $base_url ?>/parisnoir_9.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/parisnoir_14.jpg" alt="Paris Photo by Adrian Unger"> 
      <img src="<?php echo $base_url ?>/parisnoir_10.jpg" alt="Paris Photo by Adrian Unger">
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/parisnoir_12.jpg" alt="Paris Photo by Adrian Unger">      
      </figure>
    </div>

    <div>
      <figure class="contain">
        <img src="<?php echo $base_url ?>/parisnoir_3.jpg" alt="Paris Photo by Adrian Unger">
      </figure>
    </div>

  </section>
</article>

<?php include $config['dirs']['layout'].'/footer.php'; ?>
