<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">
  <title><?php 
    if (stristr($title, 'adrian'))
      echo 'Adrian Unger — Staydecent';
    else
      echo $title.' — by Adrian Unger';
?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/solarized-light.min.css">
  <link rel="alternate" type="application/rss+xml" href="<?php echo SITE_URL ?>/feed" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
</head>
<body class="page">
  <div id="site">

    <div id="topbar"<?php if (stristr($title, 'shinrinyoku')): ?> class="shinrinyoku"<?php endif; ?><?php if (stristr($title, 'black') || stristr($title, 'noir') || stristr($title, 'picos')): ?> class="black"<?php endif; ?><?php if (stristr($title, 'waves')): ?> class="waves"<?php endif; ?><?php if (stristr($title, 'mundane')): ?> class="mundane"<?php endif; ?>>
      <div class="page grid">
        <div>
          <a class="skip" href="#main" title="Skip to main content">&darr;</a> 
        </div>
        <nav>
          <a id="photography" href="/" <?php echo current_class('adrian') ?>>
            Photography
          </a>
          <a id="software" href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?>>
            Software
          </a>
          <a id="etc" href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?>>
            Etc.
          </a>
        </nav>
      </div>
    </div>
