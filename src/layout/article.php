<?php include 'header.php' ?>

<div role="main" id="main">

        <article>
            <header>
                <div class="container-fluid">
                    <h1><?php echo $entry['title'] ?></h1>  

                    <div class="meta centre">
                    <i class="icon-calendar"></i> Published <?php echo date("F j, Y", $entry['date']) ?>
                    <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
                    </div>
                </div>
            </header>
            
            <div class="container-fluid">
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