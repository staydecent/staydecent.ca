<?php $page_id = 'about'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class=content>

    <div>
      <div class="grid">
        <div class="col">
          <h1 class=pagetitle>Staydecent is the personal homepage of Adrian Unger.</h1>
        </div>

        <div class=col>
          <p class="bigger">It is a playground where I mainly explore photography. For me, photography is a means of bringing attention into the current moment, with the intention to capture the magic that exists in even the most mundane of moments. Through curation, I hope to notice how my perspective changes over time.</p>
          <p>See what I'm up to <a href="<?php echo SITE_URL ?>now">now</a>, or find out how I <a href="<?php echo SITE_URL ?>colophon">built </a>this site.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
