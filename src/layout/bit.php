<?php include 'header.php' ?>

<div role="main" id="main" class="container-fluid">

        <article>
            <header>
                <h1><?php echo $entry['title'] ?></h1>  
            </header>
            
            <?php echo $entry['body'] ?>

            <footer class="meta">
                <i class="icon-calendar"></i> Published <a href="<?php echo $entry['url']; ?>"><?php echo date("F j, Y", $entry['date']) ?></a>
                <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
            </footer>
        </article>  

        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>

</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>