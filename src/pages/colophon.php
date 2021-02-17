<?php $page_id = 'colophon'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class=content>

    <div>
      <div class="grid">
        <div class="col">
          <h1 class=pagetitle>Here's how I publish this here website.</h1>
        </div>

        <div class=col>
          <p class="bigger">I iterate on the design right in the browser, with as little CSS as I can manage. I also avoid any front-end tooling and JavaScript is not required.</p>
          <p class="bigger">It's really just a mash of Markdown and HTML files, hobbled together with my <a href="https://github.com/staydecent/staydecent.ca">ridiculous build script</a>.</p>
          <p>And, the site is hosted on <a href="https://netlify.com">Netlify</a>, without any ads or tracking. Really, I have no idea if anyone will ever see this&hellip;</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
