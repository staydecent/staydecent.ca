<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article>
        <header>
            <h1>Photos</h1>  
        </header>

        <div class="container-fluid">
            <ol class="styled">
            <?php
            $posts = $entries['photos'];
            krsort($posts);
            $limit = 0;
            foreach ($posts as $date => $entry)
            {
                if (++$limit > 100) break;
                ?>
                <li>
                    <h3><a href="<?php echo $entry['url']; ?>"><?php echo $entry['title'] ?></a></h3>

                    <p><?php echo $entry['excerpt'] ?><p>
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
