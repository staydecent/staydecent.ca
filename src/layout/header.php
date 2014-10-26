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
    font: 14px/1.4 'Lucida Grande', sans-serif;
    background: #fefefe;
    color: #555;
    padding: 1em 3em;
  }
  a {
    color: black;
    text-decoration: none;
  }
  a:hover {
    color: white;
background-image: -o-linear-gradient(left bottom, #FFDEC9 0%, #E47964 100%);
background-image: -moz-linear-gradient(left bottom, #FFDEC9 0%, #E47964 100%);
background-image: -webkit-linear-gradient(left bottom, #FFDEC9 0%, #E47964 100%);
background-image: -ms-linear-gradient(left bottom, #FFDEC9 0%, #E47964 100%);
background-image: linear-gradient(to left bottom, #FFDEC9 0%, #E47964 100%);
  }
  h1,h2,h3,h4,h5 {
    font-weight: 400;
  }
  #site-title {
    border-bottom: 1px solid black;
  }
  #main {
    margin-top: 4em;
    max-width: 1180px;
  }
  #main p {
    font: 18px/1.7 georgia, serif;
    max-width: 510px;
  }
  #main blockquote > p {
    font: italic 18px/1.7 georgia, serif;
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
    font-family: 'Lucida Grande', sans-serif;
  }
  #foot {
    margin-top: 2em;
  }
  img {
    max-width: 100%;
    height: auto;
  }
  blockquote {
    border-left: 4px solid #FFDEC9;
    margin: 0;
    padding-left: 4em;
  }
  .mark {
    color: #FFDEC9;
  }
  </style>
</head>
<body>

<p>
  <a href="/" id="site-title">The website of Adrian Unger.</a>
</p>
