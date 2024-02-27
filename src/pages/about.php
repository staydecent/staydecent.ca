<?php $page_id = 'about'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<section>
  <h1>About</h1>
</section>

<section>
  <article>
      <div><img src="/assets/media/about.jpeg" alt="Photo of Adrian sitting in Nature" /></div>
      <div class=no-mobile>&nbsp;</div>
      <div>
        <p class="bigger">What could you possibly want to know?! Well, if you haven't figured it out yet, my name is Adrian and this is my website.</p>

        <p>I've worked as a web developer for about 15 years. I've also dipped my toes as a CTO and Director of Digital Product. I love to learn and I got hooked on the internet as a gateway to a world of knowledge that I otherwise would not have had access to. That said, originally, I wanted to be a print designer or photographer. But, neither of those have happened&#8230; yet.</p>

        <p>This website is a playground where I mainly explore photography. For me, photography is a means of bringing attention into the current moment, with the intention to capture the magic that exists in even the most mundane of moments. Through curation, I hope to notice how my perspective changes over time.</p>
        <p>See what I'm up to <a href="<?php echo SITE_URL ?>now">now</a>, or find out how I <a href="<?php echo SITE_URL ?>colophon">built </a>this site.</p>
      </div>
  </article>
</section>

<?php include $config['dirs']['layout'].'/footer.php' ?>