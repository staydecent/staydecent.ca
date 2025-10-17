<?php
$page_id = 'index';
$body_class = 'text';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>

<article>
  <section class="cols">
    <div>
      <img class="contain" src="https://storage.googleapis.com/staydecent/heybear/heybear.jpg">
      <div class=title>
        <a class=plain href="<?php echo SITE_URL ?>heybear">Hey Bear! →</a>
      </div>
    </div>

    <div>
      <img class="contain" src="<?php echo SITE_URL ?>assets/media/tednet.jpg">
      <div class=title>
        <a class=plain href="https://tednet.org" target="_blank">The Existential Detective Network <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <img class="contain" src="<?php echo SITE_URL ?>photography/july-town/images/town_14.jpg">
      <div class=title>
        <a class=plain href="<?php echo SITE_URL ?>photography">Photography →</a>
      </div>
    </div>

    <div>
      <img class="contain" src="<?php echo SITE_URL ?>assets/media/pathofheart-flowers.jpg">
      <div class=title>
        <a class=plain href="https://pathofheart.ca" target="_blank">Path of Heart <span class="mono">↗</span></a>
      </div>
    </div>

  </section>


</article>


<?php include $config['dirs']['layout'].'/footer.php' ?>