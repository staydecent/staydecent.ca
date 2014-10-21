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
    font: 14px/1.4 'menlo', 'monaco', 'consolas', 'inconsolata', monospace;
    background: #fff;
    color: #555;
    padding: 1em 3em;
  }
  a {
    color: black;
    text-decoration: none;
  }
  a:hover,
  #site-title {
    color: white;
    background: black;
  }
  h1,h2,h3,h4,h5 {
    font-weight: 400;
  }
  #main {
    margin-top: 4em;
    max-width: 1180px;
  }
  #main p {
    font: 18px/1.7 georgia, serif;
    max-width: 510px;
  }
  header h1, header h2 {
    margin: 0;
  }
  #main p.meta {
    margin: 0;
    font-size: 85%;
  }
  #foot {
    margin-top: 8em;
  }
  img {
    max-width: 100%;
    height: auto;
  }
  </style>
</head>
<body>

<p>
  <a href="/" id="site-title">staydecent.ca</a><br>
  programming, biodiversity, travel, etc.
</p>
