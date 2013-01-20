<?php include 'header.php' ?>

<div role="main" id="main">

        <article>
            <header class="container-fluid">
                <h1><?php echo $entry['title'] ?></h1>  
            </header>
            
            <div class="container-fluid">
                <div class="meta">
                    Published <?php echo date("F j, Y", $entry['date']) ?>&nbsp;&middot;&nbsp;
                    <?php echo ucfirst(convertNumber(str_word_count($entry['body']))) ?> words
                </div>
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