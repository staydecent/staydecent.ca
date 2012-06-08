<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <article>
        <header>
            <h1>I&rsquo;m Adrian Unger</h1>  
        </header>
        
        <p>I&rsquo;m a software developer at <a href="//ecquire.com" target="_blank">Ecquire</a>. Previously, I ran a freelance design practice under the alias <em>Staydecent</em>. I currently live in a trailer on a <a href="//ubcfarm.ca" target="_blank">farm</a> in a <a href="//wikitravel.org/en/Vancouver" target="_blank">city</a>.</p>

        <p>I enjoy homesteading, hiking and learning&mdash;among other things.</p>
    </article>          

    <div class="post-navigation">
        <h4>Writing</h4>
        <?php $posts = get_entries('articles') + get_entries('bits'); krsort($posts); ?>
        <ol class="styled">
        <?php $limit = 0; foreach ($posts as $date => $entry) : if (++$limit > 6) break; ?>
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