<?php $page_id = 'archives'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<article>
  <div class="article-intro">
    <h1 class="center">Archives</h1>
  </div>
  <section class=cols>
    <div>
      <p class="pagetitle margin">A collection of all <a href="<?php echo SITE_URL ?>blog">words</a> and <a href="<?php echo SITE_URL ?>code">code</a>.</p>
    </div>
    <div>
      <ol class="styled">
      <?php
      $posts = all_entries();
      $limit = 0;
      foreach ($posts as $date => $entry)
      {
        if (++$limit > 100) break;
        ?>
        <li>
          <a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a>
          <postamble datetime="<?php echo date("Y-m-d", $date) ?>">
            <?php echo date("F j, Y", $date) ?>
          </postamble>
        </li>
        <?php
      }
      ?>
      </ol>
    </div>
  </section>
</article>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>
