<?php 
$title = 'Paris Noir';
$page_id = 'noir';
$body_class = 'photography';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<main>

  <section>
    <div class=f-center>
      <h1 class=break>Paris Noir</h1>
      <p class="display">In 2018, I visited Paris for the first time. Really, it was my frist time off the North American continent!</p>
      <p >After spending three weeks in Spain, my partner and I wandered around Paris for 4 days. These are some selected photos from a roll of Ilford XP2. All shot with a Yashica FX-D and Yashica ML 50mm/2.</p>
    </div>
    <img src="<?php echo $base_url ?>/images/parisnoir_7.jpg" alt="Paris Photo by Adrian Unger">
  </section>


  <section>
    <article class=f-center>
      <img src="<?php echo $base_url ?>/images/parisnoir_8.jpg" alt="Paris Photo by Adrian Unger">
    </article>
    <div class='f-end'>
      <article class=f-center>
        <img src="<?php echo $base_url ?>/images/parisnoir_11.jpg" alt="Paris Photo by Adrian Unger">
      </article>
    </div>
  </section>

  <section class=right>
    <img src="<?php echo $base_url ?>/images/parisnoir_5.jpg" alt="Paris Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/parisnoir_13.jpg" alt="Paris Photo by Adrian Unger">
    <img src="<?php echo $base_url ?>/images/parisnoir_1.jpg" alt="Paris Photo by Adrian Unger">
  </section>


  <section>
    <div class=no-mobile>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/parisnoir_2.jpg" alt="Paris Photo by Adrian Unger">
  </section>

  <section class=right>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/parisnoir_9.jpg" alt="Paris Photo by Adrian Unger">
    </figure>
  </section>

  <section class=>
    <img src="<?php echo $base_url ?>/images/parisnoir_6.jpg" alt="Paris Photo by Adrian Unger">
  </section>

  <section class=center>
    <div class="f-end">
      <img src="<?php echo $base_url ?>/images/parisnoir_14.jpg" alt="Paris Photo by Adrian Unger"> 
    </div>
    <article class=f-center>
      <img src="<?php echo $base_url ?>/images/parisnoir_10.jpg" alt="Paris Photo by Adrian Unger">
    </article>
  </section>

  <section>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/parisnoir_12.jpg" alt="Paris Photo by Adrian Unger">      
    </figure>
  </section>

  <section class=right>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/parisnoir_3.jpg" alt="Paris Photo by Adrian Unger">
      
    </figure>
  </section>

  <section class=x>
    <img src="<?php echo $base_url ?>/images/parisnoir_4.jpg" alt="Paris Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>

