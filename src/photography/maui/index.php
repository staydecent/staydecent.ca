<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">

  <title>Maui ~ Photo Series by Adrian Unger</title>

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
      background: #D1E8FB;
      font-family: system, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Lucida Grande";
      color: white;
    }

    a {
      color: white;
    }

    img {
      max-width: 100%;
      max-height: 100%;
    }

    h1 {
      color: #fff;
      font-size: 8em;
      line-height: .8;
      max-width: 800px;
      margin: 0;
    }

    h2 {
      margin: 0;
      color: #fff;
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
      background-color: #D1E8FB;
      padding: 2em;
    }

    .page:last-child .text {
      background-color: #D1E8FB;
    }

    .page:last-child .text .body {
      color: white;
    }

    .text > .title {
      flex: 1;
    }

    .text > .body {
      color: #fff;
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
      <img src="<?php echo $base_url ?>/images/maui_1.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <div class="text">
        <div class="title">
          <h1>Maui</h1>
          <p style="font-size: 2em;">10 days packed packed with rugged coastlines, <br/>beaches of assorted colours, roads to waterfalls <br />and dense, tropical jungles.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_2.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_3.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_4.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_5.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_6.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_7.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_8.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_9.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_10.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_11.jpg" alt="Maui Photo by Adrian Unger">
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_12.jpg" alt="Maui Photo by Adrian Unger">
    </div>
  </div>

  <div class="page spread">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/maui_13.jpg" alt="Maui Photo by Adrian Unger">
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
