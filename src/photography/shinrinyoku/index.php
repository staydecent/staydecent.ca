<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Adrian Unger">

  <title>Forest Bathing ~ Photo Series by Adrian Unger</title>

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
      background: #2A3635;
      font-family: system, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Lucida Grande";
    }

    img {
      max-width: 100%;
      max-height: 100%;
    }

    h1 {
      color: white;
      font-size: 8em;
      line-height: .8;
      max-width: 800px;
      margin: 0;
    }

    h2 {
      margin: 0;
      color: white;
      font-size: 5em;
      font-weight: 600;
      font-family:"ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro",Osaka, "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
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
    }

    .photo {
      padding: 1em;
    }

    .photo + .photo {
      padding-left: 0;
    }

    .text {
      display: flex;
      flex-direction: column;
      height: 100%;
      background-color: #F8EBEE;
      padding: 2em;
    }

    .text > .title {
      flex: 1;
    }

    .text > .body {
      color: #869094;
      font-size: 1.5em;
      max-width: 74%;
      line-height: 1.4;
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
      <div class="text">
        <div class="title">
          <h1>Forest Bathing</h1>
          <h2>森林浴</h2>
        </div>
        <div class="body">
          A forest bathing trip involves visiting a forest for relaxation and recreation while breathing in volatile substances, called phytoncides (wood essential oils), which are antimicrobial volatile organic compounds derived from trees, such as a-pinene and limonene. Incorporating forest bathing trips into a good lifestyle was first proposed in 1982 by the Forest Agency of Japan. It has now become a recognized relaxation and/or stress management activity in Japan.
        </div>
      </div>
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_1.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_0.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_4.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
  </div>

  <div class="page">
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_2.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
    <div class="photo">
      <img src="<?php echo $base_url ?>/images/shinrinyoku_3.jpg" alt="Forest Bathing Photo by Adrian Unger">      
    </div>
  </div>
</div>


</body>
</html>
