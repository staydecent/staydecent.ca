<?php
$page_id = 'index';
$body_class = 'text';
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
      <noscript>
        <img 
          width=542 height=723 
          src="https://media.staydecent.ca/sd/arcnum-falls.jpg" 
          alt="moody black and white photo of a river falling into darkness meant to represent the unconscious forces of the human pscyhe, or something like that"
        >
      </noscript>
      <img 
        width=542 height=723 
        src="https://media.staydecent.ca/sd/arcnum-falls.jpg.webp" 
        data-src="https://media.staydecent.ca/sd/arcnum-falls.jpg" 
        alt="moody black and white photo of a river falling into darkness meant to represent the unconscious forces of the human pscyhe, or something like that"
      >

      <div class=title>
        <a class=plain href="https://archetypalnumerology.com" target="_blank">Archetypal Numerology <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <noscript>
        <img 
          width=602 height=451 
          src="https://media.staydecent.ca/sd/tednet.jpg" 
          alt="moody black and white photo that is meant to evoke Existential Dread"
        >
      </noscript>
      <img 
        width=602 height=451 
        src="https://media.staydecent.ca/sd/tednet.jpg.webp" 
        data-src="https://media.staydecent.ca/sd/tednet.jpg" 
        alt="moody black and white photo that is meant to evoke Existential Dread"
      >

      <div class=title>
        <a class=plain href="https://tednet.org" target="_blank">The Existential Detective Network <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <img loading=lazy class="contain" width=542 height=723 src="https://media.staydecent.ca/sd/heybear-big.webp">
      <div class=title>
        <a class=plain href="https://buttondown.com/heybear" target="_blank" title="Hey Bear! Newsletter">Hey Bear! <span class="mono">↗</span></a>
      </div>
    </div>

    <div>
      <img loading=lazy class="contain" width=602 height=401 src="https://media.staydecent.ca/sd/photography/july-town/town_14.jpg">
      <div class=title>
        <a class=plain href="<?php echo SITE_URL ?>photography">Photography →</a>
      </div>
    </div>

  </section>


</article>


<?php include $config['dirs']['layout'].'/footer.php' ?>
