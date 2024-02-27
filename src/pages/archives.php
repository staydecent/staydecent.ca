<?php $page_id = 'archives'; ?>

<?php include $config['dirs']['layout'].'/header.php' ?>
<?php include $config['dirs']['layout'].'/nav.php' ?>

<section>
  <div class=container>
    <div class="grid-50 end">
      <h2 class="pagetitle margin">Archives</h2>
    </div>
    <div class=grid-3>
      <div class=no-mobile>&nbsp;</div>
      <ol class="styled">
      <?php
      $posts = all_entries();
      $limit = 0;
      foreach ($posts as $date => $entry)
      {
        if (++$limit > 100) break;
        ?>
        <li>
          <h2 class=normal><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h2>
        </li>
        <?php
      }
      ?>
      </ol>
    </div>
  </div>
</section>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>
