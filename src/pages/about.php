<?php $page_id = 'about'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<div class=container>
  <div class=content>

    <div>
      <div class="grid">
        <div class="col">
          <h1 class=pagetitle>Hi there, I’m Adrian Unger, a software engineer who prefers to be outdoors.</h1>
        </div>

        <div class=col>
          <p class="bigger">I have a particular fondness for rocky coastlines and mountain meadows.</p>
          <p class="bigger">I&rsquo;m an enthuisiast for food, nature and exploring new places. I also <em title="🦊🦊🦊">can&rsquo;t stop</em> taking <a href="/photography">photos</a> of those experiences.</p>
          <p>See what I'm up to <a href="<?php echo SITE_URL ?>now">now</a>, or find out how I <a href="<?php echo SITE_URL ?>colophon">built </a>this site.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
