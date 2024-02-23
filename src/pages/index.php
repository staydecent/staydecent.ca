<?php $page_id = 'index'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<main>

  <section style="background-color: #aaa;">
    <div class=f-center>
      <h1 class=blur>But why this ecstasy of joy?</h1>
    </div>
    <figure>
      <img src="<?php echo $base_url ?>/assets/media/ecstasy_2.jpeg" alt="Photo by Adrian Unger">        
    </figure>
  </section>

  <!-- Sebastion beach -->
  <section>
    <div class=f-center>
      <h1>
        <a style="color: #7c8ea8ab;" href="<?php echo SITE_URL ?>photography/sebastion-beach">Sebastion Beach</a>
      </h1>
    </div>
    <figure>
      <a href="<?php echo SITE_URL ?>photography/sebastion-beach">
        <img src="<?php echo $base_url ?>photography/sebastion-beach/images/sebastion_10_dithered.jpg" alt="Photo by Adrian Unger">
      </a>        
    </figure>
  </section>

  <!-- July town -->
  <section style="background-color: #D0DBD7;">
    <figure class=contain>
      <a href="<?php echo SITE_URL ?>photography/july-town">
        <img src="<?php echo $base_url ?>photography/july-town/images/town_14_dithered.jpg" alt="Photo by Adrian Unger">
      </a>
      <h1>
        <a style="color: #C74938;" href="<?php echo SITE_URL ?>photography/july-town">A Small Canadian Town in July</a>
      </h1>
    </figure>
  </section>

  <!-- Picos -->
  <section>
    <div class=f-end>
      <img src="<?php echo $base_url ?>photography/picos-on-portra/images/picos_11_dithered.jpg" alt="Photo by Adrian Unger">
    </div>
    <div class=pt>
      <h1 style="word-spacing: 100vw;">
        <a href="<?php echo SITE_URL ?>photography/picos-on-portra">Picos on Portra</a>
      </h1>
    </div>
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>
