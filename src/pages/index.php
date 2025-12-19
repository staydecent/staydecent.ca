<?php
$page_id = 'index';
$body_class = 'text';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>

<article>
  <section class="cols">
    <div class="article-intro">
      <p>Former Digital Product Developer of 17 years turned <a class=ul href="<?php echo SITE_URL ?>sabbatical" title="To be determined, been on sabbatical for a few years now...">TBD</a>. I like to take <a class=ul href="<?php echo SITE_URL ?>photography">Photos</a> and write about <a class=ul href="https://buttondown.com/heybear" target="_blank" title="Hey Bear! Newsletter">Nature <span class="mono">↗</span></a>, <a class=ul href="https://tednet.org" target="_blank" title="The Existential Detective Network">Existence <span class="mono">↗</span></a> and <a class=ul title="Coming soon..." role="link" aria-disabled="true">Symbolism <span class="mono">↗</span></a>. Yeehaw.</p>
    </div>
  </section>
</article>

<article>
  <section class="cols">
    <div>
      <img class="contain" src="https://storage.googleapis.com/staydecent/heybear/heybear.jpg">
      <div class=title>
        <a class=plain href="https://buttondown.com/heybear" target="_blank" title="Hey Bear! Newsletter">Hey Bear! <span class="mono">↗</span></a>
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