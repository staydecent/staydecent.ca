<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">

  <title>Black &amp; White ~ Photo Series by Adrian Unger</title>

  <style type="text/css">
    *, *:before, *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    html, body {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
    body {
      background: #fff;
      font-family: system, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Lucida Grande";
    }

    a {
      color: black;
    }

    img {
      max-width: 100%;
      max-height: 100%;
    }

    h1 {
      color: #000;
      font-size: 8em;
      line-height: .8;
      max-width: 800px;
      margin: 0;
    }

    h2 {
      margin: 0;
      color: #000;
      font-size: 5em;
      font-weight: 600;
    }

    .book {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
    }

    .page {
      height: 100%;
      display: flex; /* 1 */
      flex-wrap: wrap; /* 2 */
      margin: 0; /* 5 (edit me!) */
    }
    .page > * {
      flex: 1 0 calc(50%); /* 3 (edit me!) */
      margin: 0; /* 4 (edit me!) */
      height: 100%;
      animation: fadein 2s;
    }

    .photo {
      padding: 3rem;
    }

    .photo + .photo {
      padding-left: 0;
    }

    .spread img {
      max-width: 100%;
      max-height: 100%;
    }

    .text {
      display: flex;
      flex-direction: column;
      height: 100%;
      background-color: #fff;
      padding: 2em;
    }

    .page:last-child .text {
      background-color: white;
    }

    .page:last-child .text .body {
      color: black;
    }

    .text > .title {
      flex: 1;
    }

    .text > .body {
      color: #000;
      font-size: 1.5em;
      max-width: 74%;
      line-height: 1.4;
    }

    @media all and (max-width: 1200px) {
      h1 {
        font-size: 4em;
      }
      h2 {
        font-size: 3em;
      }
      .text > .body {
        font-size: 1.2em;
      }
      .page {
        width: 100%;
        height: auto;
        display: block;
      }
      .photo + .photo {
        padding-left: 1em;
      }
    }

    @keyframes fadein {
      from { opacity: 0; transform: translateY(-100px);  }
      to   { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class="book">
  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_1.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Black &amp; White</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_2.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_3.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_4.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_5.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_6.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_7.jpg" alt="Black and White Photo by Adrian Unger">
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_8.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_9.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_10.jpg" alt="Black and White Photo by Adrian Unger">
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_11.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_12.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <div class="text">
        <div class="title">
          <h2>Thanks for stopping by!</h2>
          <h2>For prints or inquiries, <a href="mailto:photo@staydecent.ca">send me an email</a>.</h2>
          <h2><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></h2>
        </div>
        <div class="body">
          <small>All photos are © Adrian Unger and cannot be used without written permission.</small>
        </div>
      </div>      
    </div>
  </div>
</div>

</body>
</html>
