<?php
$page_id = 'index';
$body_class = 'viewport';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<main>

  <section id=intro>
    <article class=f-end>
      <div>
        <h1>Photography and notes by Adrian Unger</h1>        
      </div>
    </article>
    <div class=bg>
      <div class="circle"></div>
    </div>
  </section>

  <section id=ecstasy>
    <article class=f-end>
      <div>
        <h1>But why this ecstasy of joy?</h1>        
      </div>
    </article>
    <figure>
      <img src="<?php echo $base_url ?>/assets/media/ecstasy_2.jpeg" alt="Photo by Adrian Unger">        
    </figure>
  </section>

  <section id=sebastion>
    <div class=f-center>
      <h1 class=break>
        <a href="<?php echo SITE_URL ?>photography/sebastion-beach">Sebastion Beach</a>
      </h1>
    </div>
    <figure>
      <a href="<?php echo SITE_URL ?>photography/sebastion-beach">
        <img src="<?php echo $base_url ?>photography/sebastion-beach/images/sebastion_10_dithered.jpg" alt="Photo by Adrian Unger">
      </a>        
    </figure>
  </section>

  <section id=july-town>
    <figure class=contain>
      <a href="<?php echo SITE_URL ?>photography/july-town">
        <img src="<?php echo $base_url ?>photography/july-town/images/town_14_dithered.jpg" alt="Photo by Adrian Unger">
      </a>
      <h1>
        <a href="<?php echo SITE_URL ?>photography/july-town">A Small Canadian Town in July</a>
      </h1>
    </figure>
  </section>

  <section id=picos>
    <div class=f-end>
      <h1 class=break>
        <a href="<?php echo SITE_URL ?>photography/picos-on-portra">Picos on Portra</a>
      </h1>
    </div>
    <div class=contain>
      <a href="<?php echo SITE_URL ?>photography/picos-on-portra">
        <img src="<?php echo $base_url ?>photography/picos-on-portra/images/picos_11_dithered.jpg" alt="Photo by Adrian Unger">
      </a>        
    </div>
  </section>

  <section id=noir>
    <div class=f-center>
      <h1 class=break>
        <a href="<?php echo SITE_URL ?>photography/paris-noir">Paris Noir</a>
      </h1>
    </div>
    <div class=f-center>
      <a href="<?php echo SITE_URL ?>photography/paris-noir">
        <img src="<?php echo $base_url ?>photography/paris-noir/images/parisnoir_7_dithered.jpg" alt="Photo by Adrian Unger">
      </a>        
    </div>
  </section>

  <section id=paris>
    <div class=f-center>
      <h1 class=break>
        <a href="<?php echo SITE_URL ?>photography/paris-couleur">Paris Couleur</a>
      </h1>
    </div>
    <figure class=f-center>
      <a href="<?php echo SITE_URL ?>photography/paris-couleur">
        <img src="<?php echo $base_url ?>photography/paris-couleur/images/pariscouleur_8_dithered.jpg" alt="Photo by Adrian Unger">
      </a>        
    </figure>
  </section>

  <section id=waves>
    <figure>
      <a href="<?php echo SITE_URL ?>photography/waves">
        <img src="<?php echo $base_url ?>photography/waves/images/waves_2.jpg" alt="Photo by Adrian Unger">
      </a>
      <h1>
        <a href="<?php echo SITE_URL ?>photography/waves">Waves</a>
      </h1>
    </figure>
  </section>

  <section id=maui>
    <figure class=contain>
      <a href="<?php echo SITE_URL ?>photography/maui">
        <img src="<?php echo $base_url ?>photography/maui/images/maui_5_dithered.jpg" alt="Photo by Adrian Unger">
      </a>
      <h1>
        <a href="<?php echo SITE_URL ?>photography/maui">Maui</a>
      </h1>
    </figure>
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>
