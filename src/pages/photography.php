<?php $page_id = 'index'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class="viewport-scroller">


  <!-- Picos on Portra -->
  <div
    class="viewport vp1"
    style="background: url('<?php echo SITE_URL ?>photography/picos-on-portra/images/picos_11_dithered.jpg') left bottom no-repeat; justify-content: flex-start;"
    data-link="<?php echo SITE_URL ?>photography/picos-on-portra"
  >
    <div class="vp1-content container">
      <div class="grid-3">
        <div class=no-mobile>&nbsp;</div>
        <div class=no-mobile>&nbsp;</div>
        <div>
          <h1 class=vp1-title style="font-size: 10vh; line-height: 1; color: #000; margin-left: -4px; margin-top: 1em;">
            <a class=plain href="<?php echo SITE_URL ?>photography/picos-on-portra" data-color='F1E0D0'>Picos on Portra</a>
          </h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Paris Noir -->
  <div
    class="viewport vp1 vp-paris-noir"
    style="background-image: url('<?php echo SITE_URL ?>photography/paris-noir/images/parisnoir_7_dithered.jpg');"
    data-link="<?php echo SITE_URL ?>photography/paris-noir"
  >
    <div class="vp1-content container">
      <div class="grid-3">
        <div>
          <h1 class="vp1-title serif" style="font-size: 8vh; line-height: 1; color: #000; font-weight: 400; margin-left: 0">
            <a class=plain href="<?php echo SITE_URL ?>photography/paris-noir" data-color='fff'>Paris Noir</a>
          </h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Paris Couleur -->
  <div
    class="viewport vp1"
    style="background: url('<?php echo SITE_URL ?>photography/paris-couleur/images/pariscouleur_8_dithered.jpg') center center no-repeat, linear-gradient(to top, #f3e7bd, #f3e7bd); justify-content: center;"
    data-link="<?php echo SITE_URL ?>photography/paris-couleur"
  >
    <div class="vp1-content container">
      <h1 class="vp1-title serif" style="font-size: 6vh; line-height: 1; color: #2f425c; font-weight: 400; margin: 0 auto;">
        <a class="level plain" href="<?php echo SITE_URL ?>photography/paris-couleur" data-color='f3e7bd'>
          <span>Paris</span>
          <span>Couleur</span>
        </a>
      </h1>
    </div>
  </div>

  <!-- Waves -->
  <div
    class="viewport vp1"
    style="background: url('<?php echo SITE_URL ?>photography/waves/images/waves_2.jpg') left top no-repeat; background-size: cover;"
    data-link="<?php echo SITE_URL ?>photography/waves"
  >
    <h1 class=vp1-title style="color: #ffffffaa; line-height: 1;"><a class=plain href="<?php echo SITE_URL ?>photography/waves" data-color='f9f3e1'>Waves</a></h1>
  </div>

  <!-- Black & White -->
  <div
    class="viewport vp1"
    style="background: url('<?php echo SITE_URL ?>photography/black-and-white/images/bnw_10_dithered.jpg') center center no-repeat, linear-gradient(to top, #ACA8B0aa, #ACA8B0aa); justify-content: center;"
    data-link="<?php echo SITE_URL ?>photography/black-and-white"
  >
    <div class="level">
      <div style="background: #D6F500; width: 50vh; text-align: center; margin: 0.8rem auto 0;">
        <h1 class="vp1-title" style="font-size: 2vh; line-height: 1; color: #000; padding: 1px 0; letter-spacing: -1px; margin: 0 auto;">
          <a class="plain level no-padding" href="<?php echo SITE_URL ?>photography/black-and-white" data-color='666'>
            <span>Black</span>
            <span>&amp;</span>
            <span>White</span>
          </a>
        </h1>
      </div>
    </div>
  </div>

  <!-- Maui -->
  <div
    class="viewport vp1"
    style="background: url('<?php echo SITE_URL ?>photography/maui/images/maui_5_dithered.jpg') center center no-repeat;"
    data-link="<?php echo SITE_URL ?>photography/maui"
  >
    <h1 class=vp1-title style="font-weight: 600; color: #FBCBC1; line-height: 1;"><a class=plain href="<?php echo SITE_URL ?>photography/maui" data-color='FBCBC1'>MAUI</a></h1>
  </div>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>
