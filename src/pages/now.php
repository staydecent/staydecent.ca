<?php
$page_id = 'now';
$body_class = 'viewport';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<main>

  <section id=intro>
    <article class=f-between>
      <div class="pt">
        <h1>Now</h1>        
      </div>
      <div>
        <p class=bigger>Here's what I'm currently focusing on</p>
        <p class="big"><del datetime="2023-09-01">Leading Engineering at <a href="https://mudwtr.com">MUD\WTR</a>.</del> Taking a <a href="/sabbatical">sabbatical</a> as of Sept 2023.</p>
        <p class="big">Continuously adjusting how I perceive the world, especially in regards to how I react.</p>
        <p class=big>Learning to flow with the universe ✨.</p>
        <p class=big>Playing video games again.</p>
        <p>This page was inspired by&nbsp;<a href="https://sivers.org/now">Derek Sivers</a>. <em>Updated: 2nd January, 2024</em></p>
      </div>
      </div>
    </article>
    <div class=bg>
      <div class="circle"></div>
    </div>
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>