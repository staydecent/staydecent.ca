<?php include $config['dirs']['layout'].'/header.php' ?>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=4>
        <?php include $config['dirs']['layout'].'/nav.php' ?>
      </column>
      <column span=4>
        <h1 id="wordmark">Staydecent</h1>
      </column>
    </grid>
  </div>

  <div id="main" class="page">
    <grid columns=12>
      <column span=2-5 class="down">
        <a href="<?php echo SITE_URL ?>photography/paris-noir">
          <img src='<?php echo SITE_URL ?>photography/paris-noir/images/ParisNoir_7.jpg' />
          <h5>Paris Noir</h5>
        </a>
      </column>
      <column span=7-11 class="double">
        <a href="<?php echo SITE_URL ?>photography/picos-on-portra">
          <img src='<?php echo SITE_URL ?>photography/picos-on-portra/images/picos_2.jpg' />
          <h5>Picos On Portra</h5>
        </a>
      </column>
    </grid>
  </div>

  <div class="page spaced">
    <grid columns=12>
      <column span=6-10>
        <a href="<?php echo SITE_URL ?>photography/paris-couleur">
          <img src='<?php echo SITE_URL ?>photography/paris-couleur/images/ParisCouleur_8.jpg' />
          <h5>Paris Couleur</h5>
        </a>
      </column>
    </grid>
  </div>

  <div class="page spaced">
    <grid columns=12>
      <column span=4>
        <a href="<?php echo SITE_URL ?>photography/waves">
          <img src='<?php echo SITE_URL ?>photography/waves/images/waves_4.jpg' />
          <h5>Waves</h5>
        </a>
      </column>
      <column span=9.. class="down">
        <a href="<?php echo SITE_URL ?>photography/black-and-white">
          <img src='<?php echo SITE_URL ?>photography/black-and-white/images/bnw_1.jpg' alt="Black and White" />
          <h5>Black &amp; White</h5>
        </a>
      </column>
    </grid>
  </div>

  <div class="page spaced">
    <grid columns=12>
      <column span=1-8 class="up">
        <a href="<?php echo SITE_URL ?>photography/maui">
          <img src='<?php echo SITE_URL ?>photography/maui/images/maui_5.jpg' />
          <h5>Maui</h5>
        </a>
      </column>
    </grid>
  </div>

  <div class="page spaced">
    <grid columns=12>
      <column span=4.. class="pre-1 double">
        <a href="<?php echo SITE_URL ?>photography/shinrinyoku">
          <img src='<?php echo SITE_URL ?>photography/shinrinyoku/images/shinrinyoku_1.jpg' />
          <h5>森林浴</h5>
        </a>
      </column>
    </grid>
  </div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
