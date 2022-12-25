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
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/style-v22.css">
  <link rel="alternate" type="application/rss+xml" href="<?php echo SITE_URL ?>/feed" />
</head>
<body id="<?php echo $page_id; ?>" class="page">
<div id="site" class='scale-up'>
  <a class="wordmark" href="<?php echo SITE_URL ?>" rel=home>Staydecent</a>
