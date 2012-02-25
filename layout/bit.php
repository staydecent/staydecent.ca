<?php include 'header.php' ?>

<div role="main" id="main" class="container-fluid">

    <article class="row-fluid">
        <header class="span3">
            <h1><?php echo $entry['title'] ?></h1>
            <div class="date meta">Published <?php echo get_relative_date(date("r",$entry['date'])) ?></div>
            <p>
                <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
            </p>
        </header>

        <div class="body span7">
            <?php echo $entry['body'] ?>
            <a href="https://twitter.com/intent/tweet?screen_name=staydecent" class="twitter-mention-button" data-related="staydecent">Tweet to @staydecent</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>

        <footer></footer>
    </article>

</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>