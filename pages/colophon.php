<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <div id="colophon" class="marketing">
        <header>
            <h2>Colophon</h2>
        </header>

        <ul class="grossly-massive">
            <li>Designed in-browser</li>
            <li>Type set in <a href="">Open Sans</a> &amp; serverd by <a href="">Google</a></li>
            <li><a href="">Bootstrap</a> &amp; <a href="">Less</a> for CSS organization</li>
            <li>Written with <a href="">Sublime Text 2</a></li>
            <li>Powered by my <a href="">ridiculous build script</a></li>
            <li>Hosted by <a href="">Web Faction</a></li>
        </ul>

        <p><a href="http://github.com/staydecent/staydecent.ca" target="_blank"><i class="icon-bookmark"></i>View source on Github</a></p>
    </div>

</div>

<?php 
$next = array();

$next['url'] = 'work';
$next['text'] = 'Selected work';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>