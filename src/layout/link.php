<?php include 'header.php' ?>

<div role="main" id="main">
  <article>
    <header class="container-fluid">
      <h1><?php echo $entry['title'] ?></h1>
      <p class="meta centre"><?php echo date("F j, Y", $entry['date']) ?></p>
    </header>
      
      <div class="container-fluid">
        <p class="big">
          <a href="<?php echo $entry['link'] ?>" target="_blank"><?php echo $entry['link'] ?></a>
        </p>
        <?php echo $entry['body'] ?>
      </div>
  </article>  

  <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>
</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>
