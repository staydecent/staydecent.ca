<?php include 'header.php' ?>

<div role="main" id="main" class="container-fluid">

        <article>
            <header>
                <h1><?php echo $entry['title'] ?></h1>  

                <div class="meta centre">
                <i class="icon-calendar icon-white"></i> Published <?php echo date("F j, Y", $entry['date']) ?>
                <i class="icon-align-left icon-white"></i> <?php echo str_word_count($entry['body']) ?> words
                </div>
            </header>
            
            <?php echo $entry['body'] ?>
        </article>  

        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>

</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>