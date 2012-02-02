<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container">

    <div class="inner cf">
    <?php
    $posts = $entries['articles'] + $entries['bits'];
    krsort($posts);

    $limit = 0;
    foreach ($posts as $date => $entry)
    {
        if (++$limit > 44) break;
        ?>
        <article class="cf spacing">
            <div class="col3 meta tright">
                <small>Published <?php echo get_relative_date(date("Y M D", $date)) ?><br>
                <a href="<?php echo SITE_URL . $entry['category'] ?>"><?php echo ucwords(substr($entry['category'], 0, -1)) ?></a>
            </small></div>

            <div class="col6 last">
                <header><h1><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h1></header>
            
                <p><?php echo $entry['excerpt'] ?></p>
            </div>
        </article>
        <?php
    }
    ?>
    </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>