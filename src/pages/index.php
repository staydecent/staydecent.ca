<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <article>
        <header>
            <h1>Hello,</h1>  
        </header>

        <p class="big">My name is Adrian Unger and I am a software developer at <a href="//ecquire.com" target="_blank">Ecquire</a>.</p>
        
        <p>Previously, I ran a freelance web development practice under the alias <em>Staydecent</em>. Currently, I live in a trailer on a <a href="//ubcfarm.ca" target="_blank">farm</a> in a <a href="//wikitravel.org/en/Vancouver" target="_blank">city</a>.</p>

        <p class="nodent">I enjoy homesteading, hiking and learning&mdash;among other things.</p>
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
        <p><em>View the <a href="<?php echo SITE_URL ?>archives">archives</a> for all posts.</em><p>
    </div>        

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>