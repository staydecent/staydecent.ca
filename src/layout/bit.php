<?php include 'header.php' ?>

<div role="main" id="main" class="container-fluid">

        <article>
            <header>
                <h1><?php echo $entry['title'] ?></h1>  
            </header>
            
            <?php echo $entry['body'] ?>

            <footer class="meta">
                <i class="icon-calendar"></i> Published <a href="<?php echo $entry['url']; ?>"><?php echo date("F j, Y", $entry['date']) ?></a>
                <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words

                <a href="https://twitter.com/intent/tweet?screen_name=staydecent" class="twitter-mention-button" data-related="staydecent">Tweet to @staydecent</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </footer>
        </article>  

        <?php include $config['dirs']['layout'].'/author-part.php'; ?>
        <?php include $config['dirs']['layout'].'/post-navigation-part.php'; ?>

</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>