<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <?php 
        $posts = get_entries('articles') + get_entries('bits'); krsort($posts); 
        $keys = array_keys($posts);
    ?>

    <article>
        <?php $first_post = $posts[$keys[0]] ?>
        <header class="container-fluid">
            <h1><a href="<?php echo $first_post['url']; ?>"><?php echo $first_post['title'] ?></a></h1>
            <div class="meta">
                Published <?php echo date("F j, Y", $keys[0]) ?>
            </div>
        </header>

        <div class="container-fluid">
            <p class="big"><?php echo $first_post['excerpt'] ?> <small><em><a href="<?php echo $first_post['url']; ?>">Keep reading &rarr;</a></em></small></p>
        </div>
    </article>

    <article>
        <h4>More posts</h4>
        <ol class="styled">
        <?php 
            $limit = 0; 
            foreach ($posts as $date => $entry) : 
            // if (++$limit > 6) break; 
            if (++$limit == 1)  continue;
        ?>
            <li>
                <a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a>
                &nbsp;&middot;
                <span class="meta date"><?php echo date("M j, Y", $date) ?></span>
            </li>
        <?php endforeach; ?>
        </ol>
    </article>        

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>