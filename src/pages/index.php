<?php
$page_id = 'index';
$body_class = 'photography';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>

<article>
  <section class="cols">
    <div class="article-intro">
      <p>Former Digital Product Developer of 17 years turned <a class="ul" href="<?php echo SITE_URL ?>/sabbatical" title="To be determined, been on sabbatical for a few years now...">TBD</a>. I like to take <a class="ul" href="<?php echo SITE_URL ?>/photography">Photos</a> and write about <a class="ul" href="https://heybear.staydecent.ca" target="_blank" title="Hey Bear! Newsletter">Nature <span class="mono">↗</span></a>, <a class="ul" href="https://tednet.org" target="_blank" title="The Existential Detective Network">Existence <span class="mono">↗</span></a> and <a class="ul" href="https://archetypalnumerology.com" target="_blank" title="Archetypal Numerology">Symbolism <span class="mono">↗</span></a>. Yeehaw.</p>
    </div>
  </section>

  <section class="cols">
    <div>
      <?php 
        echo pimg(
          'https://media.staydecent.ca/sd/arcnum-falls.jpg',
          'three-fourths',
          'alt="moody black and white photo of a river falling into darkness meant to represent the unconscious forces of the human pscyhe, or something like that"'
        );
      ?>
      <div class=title>
        <a class=plain href="https://archetypalnumerology.com" target="_blank">Archetypal Numerology <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <?php 
        echo pimg(
          'https://media.staydecent.ca/sd/tednet.jpg',
          'four-thirds',
          'alt="a moody river that is meant to evoke Existential Dread"'
        );
      ?>
      <div class=title>
        <a class=plain href="https://tednet.org" target="_blank">The Existential Detective Network <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <?php 
        echo pimg(
          'https://media.staydecent.ca/sd/heybear.jpg',
          'three-fourths',
          'loadin="lazy" alt="a bear wandering across a residential street"'
        );
      ?>
      <div class=title>
        <a class=plain href="https://heybear.staydecent.ca" target="_blank" title="Hey Bear! Newsletter">Hey Bear! <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <img loading=lazy class="contain" src="https://media.staydecent.ca/sd/photography/july-town/town_14.jpg" alt="a towering peak seen from a grimy street alley at dusk">
      <div class=title>
        <a class=plain href="<?php echo SITE_URL ?>photography">Photography →</a>
      </div>
    </div>

  </section>


</article>


<?php include $config['dirs']['layout'].'/footer.php' ?>
