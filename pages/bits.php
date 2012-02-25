<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <?php
    $posts = $entries['bits'];
    krsort($posts);

    $limit = 0;
    foreach ($posts as $date => $entry)
    {
        if (++$limit > 44) break;
        ?>
        <div class="padding row-fluid">
            <div class="span3 meta padding">
                <a href="<?php echo $entry['url']; ?>">Published <?php echo get_relative_date(date("Y M D", $date)) ?></a>
                <p>
                    <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
                </p>
            </div>

            <div class="span6">
                <header><h1><a class="black" href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h1></header>
            
                <p><?php echo $entry['excerpt'] ?></p>

                <a class="btn-small" href="<?php echo $entry['url']; ?>" title="Permalink to <?php echo $entry['title'] ?>">Continue reading&hellip;</a>
            </div>
        </div>
        <?php
    }
    ?>

</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>