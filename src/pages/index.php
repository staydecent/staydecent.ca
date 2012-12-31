<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article>
        <header>
            <h1>Hello, nice to meet you.</h1>  
        </header>

        <div class="container-fluid">            
            <p class="big">I&rsquo;m a software developer at <a href="http://ecquire.com" target="_blank">Ecquire</a>. Previously, I ran a freelance web development practice under the alias <em>Staydecent</em>. Currently, I&rsquo;m trying out this <a href="https://en.wikipedia.org/wiki/Digital_nomad" target="_blank">Digital Nomad</a> thing down in <a href="//wikitravel.org/en/Mexico" target="_blank">Mexico</a>.</p>

            <p class="nodent">I enjoy homesteading, hiking and learning&mdash;among other things.</p>
        </div>
    </article>  

    <article>
        <h2>Writing</h2>
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
    </article>        

</div>

<?php 
$next = array();

$next['url'] = 'about';
$next['text'] = 'About me';
?>  

<?php include $config['dirs']['layout'].'/footer.php' ?>