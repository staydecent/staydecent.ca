<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <?php 
        $posts = get_entries('articles') + get_entries('bits'); krsort($posts); 
        $keys = array_keys($posts);
        $first_post = $posts[$keys[0]];
        $entry = $first_post;
        $entry['date'] = $keys[0];
    ?>

    <article>
        <header class="container-fluid">
            <h1><a href="<?php echo $first_post['url']; ?>"><?php echo $first_post['title'] ?></a></h1>
            <p class="meta centre"><a href="<?php echo SITE_URL ?>about" title="About Adrian Unger">Adrian Unger</a>, <?php echo date("F j, Y", $keys[0]) ?></p>
        </header>

        <div class="container-fluid">
            <?php echo $first_post['body'] ?>
        </div>
    </article>     

    <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>