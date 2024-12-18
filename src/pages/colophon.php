<?php
$page_id = 'colophon';
$body_class = 'text';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>

<article>
  <section class=cols>
    <div>
      <h2>Colophon</h2>
      <p class=bigger>Here's how I publish this here website.</p>
      <p class="big">I iterate on the design right in the browser, with as little CSS as I can manage. I also avoid any front-end tooling and JavaScript is not required.</p>
      <p class="big">It's really just a mash of Markdown and HTML files, hobbled together with my <a target=_blank rel=noopener href="https://github.com/staydecent/staydecent.ca">ridiculous build script</a>.</p>
      <p>And, the site is hosted on <a target=_blank rel=noopener href="https://netlify.com">Netlify</a>, without any ads or tracking. Really, I have no idea if anyone will ever see this&hellip;</p>
    </div>

    <div>&nbsp;</div>
  </section>  
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>
