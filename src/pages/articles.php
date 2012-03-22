<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <h1>Archive: <em>Articles</em></h1>

    <?php
    $posts = $entries['articles'];
    krsort($posts);

    $limit = 0;
    foreach ($posts as $date => $entry)
    {
        if (++$limit > 44) break;
        ?>
        <article>
            <header>
                <h2><a class="black" href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h2>  
            </header>
            
            <p><?php echo $entry['excerpt'] ?></p>

            <a class="btn-small" href="<?php echo $entry['url']; ?>" title="Permalink to <?php echo $entry['title'] ?>">Continue reading&hellip;</a>

            <footer class="meta">
                <i class="icon-calendar"></i> <a href="<?php echo $entry['url']; ?>">Published <?php echo date("F j, Y", $date) ?></a>
                <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
            </footer>
        </article>
        <?php
    }
    ?>

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>