<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">
  <article class="spaced">
    <div class="container-fluid">
      <p>Hello, my name is Adrian Unger. I&rsquo;m an app developer <a href="<?php echo SITE_URL ?>now" title="Currenly, since I have moved every year for the past 8 years.">currently</a> living and working on Vancouver Island. I really enjoy food, nature and exploring new places.</p>
      <div class="photo" style="max-width: 776px;">
        <img src="http://i.imgur.com/TmEyP9o.jpg" alt="Photo of me standing by a very large tree" />
        <p class="caption">Photo by <a href="http://instagram.com/hapaway" target="_blank">Angela Harrington</a></p>
      </div>

      <p>I try to keep a <a href="<?php echo SITE_URL ?>code" title="Blog posts about programming and app development">Devlog</a> about app development and technical things I learn. I also, infrequently, share <a href="<?php echo SITE_URL ?>blog">stories and opinions</a> on whatever&rsquo;s piqued my interest.</p>

      <p>More recently, I&rsquo;ve started a <a href="http://adrianunger.tumblr.com" target="_blank">daily journal</a> where I aim to take and share a photo every damn <del>day</del> <ins title="Once and awhile?">week</ins>.</p>

      <p>Follow me on <a href="http://instagram.com/staydecent" target="_blank">Instagram</a>.</p>
    </div>
  </article>
</div>

<?php
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>
