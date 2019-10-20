<?php 
  $title = 'Black &amp; White';
  $page_id = 'black';
?>

<?php include $config['dirs']['layout'].'/header.php' ?>

<?php 
  $base_url = SITE_URL . str_replace(SOURCE, '', __DIR__);
?>

<div class=aside>
  <a href="<?php echo SITE_URL ?>photography" class=back>&larr;</a>

  <div class=title>
    <h1>Black &amp; White</h1>
  </div>
</div>

<div class=container>
  <div class=content>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_1.jpg" alt="Black and White Photo by Adrian Unger">        
    </div>

    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_2.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_3.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_4.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_5.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_6.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_7.jpg" alt="Black and White Photo by Adrian Unger">
    </div>

    <div class="photo">
      <img src="<?php echo $base_url ?>/images/bnw_10.jpg" alt="Black and White Photo by Adrian Unger">
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_11.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <img src="<?php echo $base_url ?>/images/bnw_12.jpg" alt="Black and White Photo by Adrian Unger">      
    </div>

    <div>
      <div class=text>
        <p>Thanks for stopping by!</p>
        <p>For prints or inquiries, <br /><a href="mailto:photo@staydecent.ca">send me an email</a>.</p>
        <p><a href="<?php echo SITE_URL ?>photography">View more galleries.</a></p>
      </div>
    </div>

  </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>
