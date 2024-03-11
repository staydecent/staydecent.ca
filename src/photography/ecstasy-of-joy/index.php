<?php 
$title = 'But why this ecstasy of joy?';
$page_id = 'ecstasy';
$body_class = 'viewport';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<?php 
$base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<main>

  <section>
    <div class=f-center>
      <h1 class=break>But why this ecstasy of joy?</h1>
    </div>
    <div>
      <img src="<?php echo $base_url ?>/images/ecstasy_7.jpg" alt="Photo by Adrian Unger">      
    </div>
  </section>


  <section>
    <article class=f-center>
      <img src="<?php echo $base_url ?>/images/ecstasy_8.jpg" alt="Photo by Adrian Unger">
    </article>
    <div class='f-end'>
      <article class=f-center>
        <img src="<?php echo $base_url ?>/images/ecstasy_11.jpg" alt="Photo by Adrian Unger">
      </article>
    </div>
  </section>

  <section class=right>
    <img src="<?php echo $base_url ?>/images/ecstasy_5.jpg" alt="Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

  <section>
    <img src="<?php echo $base_url ?>/images/ecstasy_13.jpg" alt="Photo by Adrian Unger">
    <img src="<?php echo $base_url ?>/images/ecstasy_1.jpg" alt="Photo by Adrian Unger">
  </section>


  <section>
    <div class=no-mobile>&nbsp;</div>
    <img src="<?php echo $base_url ?>/images/ecstasy_2.jpg" alt="Photo by Adrian Unger">
  </section>

  <section class=right>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/ecstasy_9.jpg" alt="Photo by Adrian Unger">
    </figure>
  </section>

  <section class=>
    <img src="<?php echo $base_url ?>/images/ecstasy_6.jpg" alt="Photo by Adrian Unger">
  </section>

  <section class=center>
    <div class="f-end">
      <img src="<?php echo $base_url ?>/images/ecstasy_14.jpg" alt="Photo by Adrian Unger"> 
    </div>
    <article class=f-center>
      <img src="<?php echo $base_url ?>/images/ecstasy_10.jpg" alt="Photo by Adrian Unger">
    </article>
  </section>

  <section>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/ecstasy_12.jpg" alt="Photo by Adrian Unger">      
    </figure>
  </section>

  <section class=right>
    <figure class="contain">
    <img src="<?php echo $base_url ?>/images/ecstasy_3.jpg" alt="Photo by Adrian Unger">
      
    </figure>
  </section>

  <section class=x>
    <img src="<?php echo $base_url ?>/images/ecstasy_4.jpg" alt="Photo by Adrian Unger">
    <div class=no-mobile>&nbsp;</div>
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>

