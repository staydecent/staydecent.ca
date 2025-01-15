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
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/style-v26.css">
  <link rel="alternate" type="application/rss+xml" href="<?php echo SITE_URL ?>/feed" />
</head>
<body id="<?php echo $page_id; ?>" <?php if (isset($body_class)): ?>class="<?php echo $body_class; endif;?>">
<main>

<header>
  <section class="cols">
    <div>
      <h1>
        <a href="/" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?> rel=home>Adrian Unger</a>
        (<a href="<?php echo SITE_URL ?>about">Info.</a>)
      </h1>
    </div>
    <div>
      <nav>
        <a href="<?php echo SITE_URL ?>" <?php echo current_class('adrian') ?><?php echo current_class('photography') ?>>Photos</a>,
        <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?>>Blog</a>,
        <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?>>Code</a>
      </nav>
    </div>
  </section>
</header>
