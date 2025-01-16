<?php
$page_id = 'about';
$body_class = 'text';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>

<article>
  <section class=cols>
    <div>
      <p>Former <a href="<?php echo SITE_URL ?>code">software developer</a> currently on <a href="<?php echo SITE_URL ?>sabbatical">sabbatical</a>. Interested in philosophy, spirituality, technology and society. I write about existing as a human in our current times over at <a href="https://tednet.org">The Existential Detective Network</a>. I write more loosely on my <a href="<?php echo SITE_URL ?>blog">blog</a> here.</p>
      <p>I love to take <a href="<?php echo SITE_URL ?>photography">photos</a> as it helps me slow down and notice the mundane.</p>
      <p>See what I'm up to <a href="<?php echo SITE_URL ?>now">now</a>, or find out how I <a href="<?php echo SITE_URL ?>colophon">built </a>this site.</p>

      <aside>
        <h3>Projects</h3>
        <ul>
          <li><a href="https://tednet.org/" target=_blank>TEDNET</a></li>
          <li><a href="https://pathofheart.ca/" target=_blank>Path of Heart</a></li>
          <li><a href="https://app.prepkitmeals.com/" target=_blank>PrepKit Meals</a></li>
        </ul>
      </aside>
    </div>

    <div class=mobile-first>
      <img src="/assets/media/about-VSCO.jpeg" alt="Photo of Adrian sitting in Nature" />
    </div>
  </section>  
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>
