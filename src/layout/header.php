<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">
  <meta name="description" content="Adrian Unger is the CTO of Ecquire. He lives in Canada, but thinks lovingly of México. He also enjoys gardening.">

  <title><?php 
    if (stristr($title, 'adrian'))
      echo 'staydecent.ca';
    else
      echo $title.' ~ staydecent.ca';
  ?></title>
  
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
  <style type="text/css">
    body { 
      font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
      font-size: 21px;
      line-height: 1.6;
      color: black;
      background: #fff;
      padding: 1em 3em;
    }
    a {
      color: black;
      border-bottom: 1px solid black;
      text-decoration: none;
    }
    a:hover {
      color: white;
      border-color: #E47964;
      background-color: #FFDEC9;
    }
    h1,h2,h3,h4,h5 {
      font-weight: 400;
    }
    #main,
    .container {
      margin-top: 4em;
      max-width: 1080px;
      margin: 0 auto;
      clear: both;
    }
    #main p {
      max-width: 640px;
    }
    #forest {
      margin: 20px 0;
    }
    #forest:after {
      display: block;
      content: ' ';
      height: 150px;
    }
    #main blockquote > p {
      font: italic 21px/1.7 'Georgia', serif;
    }
    header h1, header h2 {
      margin: 0;
    }
    #main p.meta {
      margin: 0;
      font-size: 85%;
    }
    .post-navigation {
      display: block;
      margin-top: 4em;
    }
    img {
      max-width: 100%;
      height: auto;
    }
    blockquote {
      border-left: 4px solid #FFDEC9;
      margin: 0;
      padding-left: 2em;
    }
    .plot {
      width: 16px;
      height: 16px;
      float: left;
      overflow: hidden;
    }
    .tree {
      width: 16px;
      height: 16px;
      background-image: url(<?php echo SITE_URL ?>favicon.ico);
      background-repeat: no-repeat;
      background-position: 0px 0px;
      opacity: 0;
      transition: opacity .2s ease-out;
    }
    .grow {
      opacity: 1;
      animation: grow-tree .7s ease .2s;
      -webkit-animation: grow-tree .7s ease .2s;
    }
    @keyframes grow-tree {
       from { transform: translateY(16px); }
       to   { transform: translateY(0px); }
    }
    @-webkit-keyframes grow-tree {
       from { -webkit-transform: translateY(16px); }
       to   { -webkit-transform: translateY(0px); }
    }
  </style>
</head>
<body>

<div class="container">
<small>
  <a href="/" id="site-title">Hello</a>
  /
  <a href="<?php echo SITE_URL ?>archives" title="view all posts">Archives</a>
  /
  <a href="<?php echo SITE_URL ?>about" title="about adrian unger">Information</a>
</small>
</div>

<div id="forest">
<?php 
$i = 730;
while ($i > 0):
?>
<div class="plot"><?php if (rand(0, 1)): ?><div class="tree"></div><?php endif; ?></div>
<?php
$i--;
endwhile;
?>
</div>
