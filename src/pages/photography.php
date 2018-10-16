<?php include $config['dirs']['layout'].'/header.php' ?>

  <div id="main" class="page grid">
    <div>
      <h1 id="wordmark">Staydecent</h1>
    </div>
    <div class="half">
      <p class="big">Hi there, I’m Adrian Unger, a software developer who prefers to be outdoors. I have a particular fondness for rocky coastlines and mountain meadows.</p>

      <p class="big">I&rsquo;m an enthuisiast for food, nature and exploring new places. I also <em title="🦊🦊🦊">can&rsquo;t stop</em> taking <a href="#galleries">photos</a> of those experiences.</p>
    </div>
  </div>

  <div id="galleries" class="page grid">
    <div class="down">
      <a href="<?php echo SITE_URL ?>photography/paris-noir">
        <img src='<?php echo SITE_URL ?>photography/paris-noir/images/ParisNoir_7.jpg' />
        <h5>Paris Noir</h5>
      </a>
    </div>
    <div>&nbsp;</div>
    <div class="double">
      <a href="<?php echo SITE_URL ?>photography/picos-on-portra">
        <img src='<?php echo SITE_URL ?>photography/picos-on-portra/images/picos_2.jpg' />
        <h5>Picos On Portra</h5>
      </a>
    </div>
  </div>

  <div class="page grid spaced">
    <div>&nbsp;</div>
    <div>
      <a href="<?php echo SITE_URL ?>photography/paris-couleur">
        <img src='<?php echo SITE_URL ?>photography/paris-couleur/images/ParisCouleur_8.jpg' />
        <h5>Paris Couleur</h5>
      </a>
    </div>
    <div>&nbsp;</div>
  </div>

  <div class="page grid spaced">
    <div>
      <a href="<?php echo SITE_URL ?>photography/waves">
        <img src='<?php echo SITE_URL ?>photography/waves/images/waves_4.jpg' />
        <h5>Waves</h5>
      </a>
    </div>
    <div>&nbsp;</div>
    <div class="down">
      <a href="<?php echo SITE_URL ?>photography/black-and-white">
        <img src='<?php echo SITE_URL ?>photography/black-and-white/images/bnw_1.jpg' alt="Black and White" />
        <h5>Black &amp; White</h5>
      </a>
    </div>
  </div>

  <div class="page grid spaced">
    <div class="up">
      <a href="<?php echo SITE_URL ?>photography/maui">
        <img src='<?php echo SITE_URL ?>photography/maui/images/maui_5.jpg' />
        <h5>Maui</h5>
      </a>
    </div>
    <div>&nbsp;</div>
  </div>

  <div class="page grid spaced">
    <div class="pre-1 double">
      <a href="<?php echo SITE_URL ?>photography/shinrinyoku">
        <img src='<?php echo SITE_URL ?>photography/shinrinyoku/images/shinrinyoku_1.jpg' />
        <h5>森林浴</h5>
      </a>
    </div>
    <div>&nbsp;</div>
  </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
