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
      echo $title.' — Staydecent';
?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/solarized_light.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>
</head>
<body>
  <div id="site">
    <nav id="top" class="menu grid">
      <a href="/" id="site-title" <?php echo current_class('adrian') ?>>About</a>
      <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?>>Programming</a>
      <a href="<?php echo SITE_URL ?>photography" <?php echo current_class('photography') ?>>Photography</a>
      <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?>>Thoughts</a>
    </nav>
