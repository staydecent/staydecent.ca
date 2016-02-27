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

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/solarized_light.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,300italic,500' rel='stylesheet' type='text/css'>
    
  <style type="text/css">
    body { 
      font-family: "Fira Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 24px;
      font-weight: 300;
      line-height: 1.6;
      color: #333;
      padding: 1em 3em;
      background: #fafafa;
    }
    a {
      color: black;
      text-decoration: underline;
    }
    a:hover {
      text-decoration: none;
      color: #81A059;
    }
    h1,h2,h3,h4,h5 {
      font-size: 1em;
      font-weight: 500;
      color: black;
    }
    strong {
      font-weight: 500;
    }
    abbr {
      font-style: italic;
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
    #main p,
    #main h3 {
      max-width: 680px;
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
    ol.styled {
      list-style-type: none;
      padding: 0;;
    }
    ol.styled > li {
      padding-bottom: 1em;;
    }
    .post-navigation {
      display: block;
      margin-top: 4em;
    }
    img {
      max-width: 100%;
      height: auto;
    }
    .photo {
      position: relative;
      width: auto;
      margin-top: 42px;
      padding-bottom: 42px;
    }
    .photo img {
      display: block;
    }
    .photo .caption {
      position: absolute;
      bottom: 0;
      right: 0;
      font-size: 12px;
      opacity: .6;
    }
    blockquote {
      border-left: 4px solid #FFDEC9;
      margin: 0;
      padding-left: 2em;
    }
    p > code {
      background-color: aliceblue;
    }
  </style>

</head>
<body>

<!-- <nav class="container">
  <a href="/" id="site-title">staydecent.ca</a> &mdash;
  <br />
  <a href="<?php echo SITE_URL ?>blog" title="Infrequent thoughts on almost anything">Thoughts</a>
  &nbsp;
  <a href="<?php echo SITE_URL ?>code" title="Blog posts about programming and web development">Devlog</a>
  &nbsp;
  <a target="_blank" href="http://instagram.com/staydecent">Instagram</a>
  &nbsp;
  <a target="_blank" href="http://chaosboogie.tumblr.com/">Tumblr</a>
  &nbsp;
</nav> -->
