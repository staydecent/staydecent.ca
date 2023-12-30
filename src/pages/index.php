<?php $page_id = 'index'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class="viewport vp1">
  <h1 class=vp1-title>Welcome</h1>
  <div class="vp1-content container">
    <div class="grid-3">
      <p class="big">Hi, my name's Adrian.</p>
      <p class=big>This is my <a class=black href="">digital garden</a> where I share my perspective through <a class=black href="">words</a> and <a class=black href="">photos</a>. Most recently, I <a class=black href="">worked</a> as a Product Developer. But, right <a class=black href="">now</a>, I'm taking a sabbatical.</p>
    </div>
  </div>
</div>

<div class="viewport vp1" style="background: url('<?php echo SITE_URL ?>photography/sebastion-beach/images/sebastion_10_dithered.jpg') center center no-repeat;">
  <h1 class=vp1-title style="font-weight: 600; color: #7c8ea8ab">Sebastion Beach</h1>
  <div class="vp1-content container">
    <div class="grid-3">
      <p class=big>Winter</p>
      <p class=big>2022</p>
    </div>
  </div>
</div>

<div class="viewport vp1" style="background: url('<?php echo SITE_URL ?>photography/july-town/images/town_14_dithered.jpg') center center no-repeat, linear-gradient(to top, #D0DBD7aa, #D0DBD7aa); justify-content: flex-end;">
  <div class="vp1-content container">
    <div class="grid-3">
      <div>&nbsp;</div>
      <div>
        <h1 class=vp2-title style="color: #C74938;">A Small Canadian Town In July</h1>
      </div>
    </div>
  </div>
</div>

<div class="viewport vp1" style="background: url('<?php echo SITE_URL ?>photography/picos-on-portra/images/picos_11_dithered.jpg') left bottom no-repeat; justify-content: flex-start;">
  <div class="vp1-content container">
    <div class="grid-3">
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>
        <h1 class=vp1-title style="font-size: 8vw; line-height: 1; color: #000;">Picos on Portra</h1>
      </div>
    </div>
  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
