<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article>
        <header>
            <h1>Archives</h1>  
        </header>

        <div class="container-fluid">
            <ol class="styled">
            <?php
            $posts = $entries['articles'] + $entries['bits'];
            krsort($posts);

            $limit = 0;
            foreach ($posts as $date => $entry)
            {
                if (++$limit > 44) break;
                ?>
                <li>
                    <a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a>
                    &nbsp;&middot;
                    <span class="meta date"><?php echo date("M j, Y", $date) ?></span>
                </li>
                <?php
            }
            ?>
            </ol>
        </div>
    </article>

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>