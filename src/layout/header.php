<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">

  <title><?php 
    if (stristr($title, 'adrian'))
      echo 'staydecent.ca';
    else
      echo $title.' ~ staydecent.ca';
?></title>
    
  <style type="text/css">body{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;line-height:1.428571429;color:#1a1a1a}a{color:#1a1a1a}p.big{font-size:21px}#site{margin:0 auto;max-width:1440px}.menu{padding:4rem 4rem 0 4rem}nav.menu{text-align:right}.menu a{font-size:14px;text-decoration:none}.menu a:hover{background-color:#FFF5E8;color:#3F5C47}pre{font-size: 14px}.grid{display:flex;flex-wrap:wrap;margin:-1rem}.grid > *{flex:1 0 12rem;margin:1rem}footer{padding:4rem 4rem 4rem 4rem;margin-top:4rem;font-size:14px}footer a{text-decoration:none}footer > div{padding-top:1rem;border-top:1px solid #eee}footer > div:last-child{text-align:right}#intro{position:relative;padding:4rem 4rem 1rem 4rem}#intro a{color:#1a1a1a}h1{font-weight:400;font-size:35px;line-height:1.2;text-decoration:underline;max-width:580px;margin-bottom:-90px;position:relative;z-index:2}.bigger{font-size:42px;}.mainImage{max-width:100%;padding:4rem 0 0 4rem}.mainImage > img{max-width:100%}#page{padding:0 4rem 4rem}@media all and (max-width: 1199px){#intro{padding:2rem 2rem .5rem 2rem}#page{font-size:16px}}@media all and (max-width: 980px){#menu{padding-top:1rem}#intro{padding:1rem 1rem 0rem 1rem}h1{font-size:28px}#page{font-size:16px}.grid > *{flex:1 0 100%;margin:1rem}footer > div:not(:first-child){border-top:none}}.content{margin-top:6rem;}.content > *{flex-basis: 20rem;}.post{align-self:right;flex-basis:42rem;}.post > *:not(img){max-width:700px;}.meta{font-size:16px;flex-basis:0rem;color:#555;font-style:italic;}</style>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/solarized_light.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>

</head>
<body>

  <div id="site">

    <nav id="top" class="menu grid">
      <a href="/" id="site-title" <?php echo current_class('adrian') ?>>About</a>
      <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?>>Programming</a>
      <a href="<?php echo SITE_URL ?>photography" <?php echo current_class('photography') ?>>Photography</a>
      <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?>>Blog</a>
    </nav>
