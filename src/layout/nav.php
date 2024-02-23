<header>
  <section>
    <nav>
      <a href="/" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?> rel=home>Adrian Unger</a>
    </nav>

    <section>
      <nav>
        <a href="<?php echo SITE_URL ?>photography" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?> data-color='433C06'>Photos</a>
        <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?> data-color='ddd'>Software</a>
        <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?> data-color='B6CAC0'>Notes</a>
      </nav>
      <nav>
        <a href="<?php echo SITE_URL ?>about">About</a>
        <a rel='alternate' type='application/rss+xml' href='<?php echo SITE_URL ?>feed'>(RSS)</a>
      </nav>   
    </section>
  </section>
</header>

<?php /* ?>
<header>
  <div class=container>
    <div class=grid-3>
      <div>
        <a href="/" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?> rel=home>Adrian Unger</a>
      </div>
      <div>
        <nav>
          <a href="/" <?php echo current_class('adrian') ?>>Index</a>
        </nav>
        <small>Last updated: <?php echo $mod_date ?></small>
      </div>
      <div>
        <nav>
          <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?> data-color='B6CAC0'>Notes</a>
          <a href="<?php echo SITE_URL ?>photography" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?> data-color='433C06'>Photos</a>
          <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?> data-color='ddd'>Software</a>
        </nav>
      </div>
    </div>
  </div>
</header>

<nav>
  <a href="/" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?> data-color='433C06'>Photography</a>
  <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?> data-color='ddd'>Software</a>
  <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?> data-color='B6CAC0'>Etc.</a>
</nav>
<nav>
  <a href="<?php echo SITE_URL ?>about" <?php echo current_class('about') ?> data-color='433C06'>About</a>
  <a href="<?php echo SITE_URL ?>now" <?php echo current_class('now') ?> data-color='433C06'>Now</a>
</nav>
<?php */ ?>