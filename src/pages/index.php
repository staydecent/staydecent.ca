<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <?php
    $posts = $entries['articles'] + $entries['bits'];
    krsort($posts);

    $limit = 0;
    foreach ($posts as $date => $entry)
    {
        if (++$limit > 1) break;
        // remove this post from $posts
        unset($posts[$date]);
        ?>
        <article>
            <header>
                <h1><a class="black" href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h1>  
            </header>
            
            <?php echo $entry['body'] ?>

            <footer class="meta">
                <i class="icon-calendar"></i> Published <a href="<?php echo $entry['url']; ?>"><?php echo date("F j, Y", $date) ?></a>
                <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words

                <a href="https://twitter.com/intent/tweet?screen_name=staydecent" class="twitter-mention-button" data-related="staydecent">Tweet to @staydecent</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </footer>
        </article>        
        <?php
    }
    ?>

    <?php include $config['dirs']['layout'].'/author-part.php'; ?>

    <div class="post-navigation">
        <h4 class="padding">Previous posts</h4>
        <?php $posts = get_entries('articles') + get_entries('bits'); krsort($posts); ?>
        <ol class="styled">
        <?php $limit = 0; foreach ($posts as $date => $entry) : if (++$limit > 6) break; ?>
            <?php if ($limit === 1) continue; ?>
            <li>
                <a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a>
                &nbsp;&middot;
                <span class="meta date"><?php echo date("M j, Y", $date) ?></span>
            </li>
        <?php endforeach; ?>
        </ol>
    </div>

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>