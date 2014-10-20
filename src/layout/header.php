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
      echo $title;
    else
      echo $title.' &middot; Adrian Unger';
  ?></title>

  <style type="text/css">
  body { 
    font-family: Arial, Helvetica, Verdana, sans-serif;
    background: #eee;
    color: #333;
    padding: 1em 3em;
  }
  a {
    color: rgb(13, 10, 104);
  }
  a:hover {
    color: white;
    background: black;
  }
  h1,h2,h3,h4,h5 {
    font-weight: 400;
  }
  p {
    line-height: 1.6;
  }
  #main {
    margin-top: 4em;
    max-width: 680px;
  }
  #main p {
    max-width: 480px;
  }
  header h1, header h2 {
    margin: 0;
  }
  .meta {
    margin: 0;
    font-size: 75%;
  }
  #foot {
    margin-top: 8em;
  }
  </style>
</head>
<body>

<p>
  <strong><a href="/" class="no-bg-link">staydecent.ca</a></strong><br>
  programming, biodiversity, travel, etc.
</p>
