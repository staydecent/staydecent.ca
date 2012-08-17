<?php include $config['dirs']['layout'].'/header.php' ?>

<?php unset($entry); ?>

<div role="main" id="main" class="container-fluid">
<?php
$posts = $entries['articles'] + $entries['bits'];
krsort($posts);

$limit = 0;
$global_entry = false;
foreach ($posts as $date => $entry) {
    if (++$limit > 1) break;
    $global_entry = $entry;
    ?>
    <article>
        <header>
            <h1><?php echo $entry['title'] ?></h1>  

            <div class="meta centre">
            <i class="icon-calendar"></i> Published <?php echo date("F j, Y", $entry['date']) ?>
            <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
            </div>
        </header>
        
        <?php echo $entry['body'] ?>

        <footer class="meta centre"><small>
            <a href="<?php echo $entry['url']; ?>" title="Permalink for <?php echo $entry['title'] ?>">
            <i class="icon-bookmark"></i> Permalink</a>
        </small></footer>
    </article>
<?php } ?> 
    <?php $entry = $global_entry; var_dump($entry['title']) ?>
    <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>