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
  
  <style type="text/css">
    body { 
      font-family: 'Monaco', 'Consolas', 'Menlo', monospace;
      font-size: 16px;
      line-height: 1.6;
      color: black;
      background: #fff;
      padding: 1em 3em;
    }
    a {
      color: black;
      border-radius: 4px;
      transition-property: color, background-color, box-shadow, opacity;
      transition-duration: 0.2s;
      transition-timing-function: ease-out;
    }
    a:hover {
      text-decoration: none;
      color: #FFDEC9;
      background-color: #4433AA;
      box-shadow: 0 0 7px #4433AA;
    }
    h1,h2,h3,h4,h5 {
      font-weight: 400;
    }
    nav > ul {
      list-style: none;
      margin: 0;
      padding: 0;
      font-size: 75%;
    }
    nav a {
      text-decoration: none;
    }
    #main,
    .container {
      max-width: 1080px;
      margin: 5% auto;
      clear: both;
    }
    #main p {
      font-size: 18px;
      font-family: 'georgia', serif;
      max-width: 640px;
    }
    #main blockquote > p {
      font-style: italic;
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
  </style>
</head>
<body>

<nav class="container">
<ul>
  <li><a href="/" id="site-title">Home</a></li>
  <li><a href="<?php echo SITE_URL ?>archives" title="view all posts">Archives</a></li>
  <li><a href="<?php echo SITE_URL ?>about" title="about adrian unger">Information</a></li>
</ul>
</nav>
