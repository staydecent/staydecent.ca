<?php $page_id = 'now'; ?>
<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<main>
  <section>
    <div class=f-start>
      <h1>Now</h1>
    </div>
    <figure class=pt>
      <div>
        <p class=bigger>Here's what I'm currently focusing on</p>
        <p class="big"><del datetime="2023-09-01">Leading Engineering at <a href="https://mudwtr.com">MUD\WTR</a>.</del> Taking a <a href="/sabbatical">sabbatical</a> as of Sept 2023.</p>
        <p class="big">Continuously adjusting how I perceive the world, especially in regards to how I react.</p>
        <p class=big>Learning to flow with the universe ✨.</p>
        <p class=big>Playing video games again.</p>
        <p>This page was inspired by&nbsp;<a href="https://sivers.org/now">Derek Sivers</a>. <em>Updated: 2nd January, 2024</em></p>
      </div>
    </figure>
  </section>

<?php 
$in_viewport = true;
include $config['dirs']['layout'].'/footer.php'
?>