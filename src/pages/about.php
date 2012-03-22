<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <div id="colophon" class="marketing">
        <header>
            <h2>Adrian Unger</h2>
        </header>

        <ul id="about-me" class="grossly-massive">
            <li>Vancouver based web designer &amp; developer</li>
            <li>Freelancing since 2008</li>
            <li>Lives in a trailer on a farm in the city</li>
            <li>I&rsquo;m the founder of <a href="http://www.cookitlocal.com">Cook It Local</a> and <a href="http://fullioapp.com">Fullio App</a></a></li>
            <li>College dropout.</li>
        </ul>

        <p><a href="<?php echo SITE_URL ?>cv.txt" target="_blank"><i class="icon-bookmark"></i>View my CV</a></p>
    </div>

</div>

<?php 
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>          

<?php include $config['dirs']['layout'].'/footer.php' ?>