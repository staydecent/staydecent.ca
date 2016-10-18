<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">

  <title>Forest Bathing ~ Photo Series by Adrian Unger</title>

  <style type="text/css">
    body { 
      font-family: georgia, serif;
      font-size: 18px;
      font-weight: 400;
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
    p a:visited {
      color: #666;
    }
    h1,h2,h3,h4,h5 {
      font-size: 1em;
      font-weight: 400;
      color: black;
    }
    strong {
      font-weight: 500;
    }
    abbr {
      font-style: italic;
    }
    nav a {
      color: #333;
      text-decoration: none;
    }
    nav a.current {
      color: #81A059;
    }
    h1>a,h2>a,h3>a,h4>a,h5>a {
      text-decoration: none;
      text-transform: uppercase;
    }
    #main,
    .container {
      max-width: 1080px;
      margin: 1rem;
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
      margin: 1rem 0 0;
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
      background-color: aliceblue;
    }
    p > code {
      background-color: aliceblue;
    }
    pre {
      font-size: 85%;
    }

    #slider {
      width: 80%;
      height: 80%;
      overflow: hidden;
    }

    .slide {
      width: 80%;
      height: 80%;
      float: left;
      position: relative;
    }

    #slide-holder {
      // wide enough to fit all the slides
      width: 400%;
      position: relative;
      left: 0;
      will-change: transform;
      animation: scroller 10s infinite;
    }

    // need a step for each slide
    @keyframes scroller {
      0% { transform: translateX(0); }
      33% { transform: translateX(-80%); }
      66% { transform: translateX(-80%*2); }
      100% { transform: translateX(0); }
    }
  </style>

</head>
<body>

<?php echo 'hi' ?>

<div id="slider">
  <div id="slide-holder">
    <div class="slide">
      <img src="images/shinrinyoku_0.jpg" alt="Forest Bathing Photo by Adrian Unger">
      <img src="images/shinrinyoku_1.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>
    <div class="slide">
      <img src="images/shinrinyoku_2.jpg" alt="Forest Bathing Photo by Adrian Unger">
      <img src="images/shinrinyoku_3.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>
    <div class="slide">
      <img src="images/shinrinyoku_4.jpg" alt="Forest Bathing Photo by Adrian Unger">
      <img src="images/shinrinyoku_5.jpg" alt="Forest Bathing Photo by Adrian Unger">
    </div>
  </div>
</div>

</body>
</html>
