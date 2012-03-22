<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <div id="colophon" class="marketing">
        <header>
            <h2>Colophon</h2>
        </header>

        <ul class="grossly-massive">
            <li>Designed in-browser</li>
            <li>Type set in <a target="_blank" href="http://www.google.com/webfonts/specimen/Open+Sans">Open Sans</a> &amp; serverd by <a target="_blank" href="http://google.com/webfonts">Google</a></li>
            <li><a target="_blank" href="http://twitter.github.com/bootstrap/">Bootstrap</a> &amp; <a target="_blank" href="http://lesscss.org/">Less</a> for CSS organization</li>
            <li>Written with <a target="_blank" href="http://www.sublimetext.com/2">Sublime Text 2</a></li>
            <li>Powered by my <a target="_blank" href="https://github.com/staydecent/staydecent.ca">ridiculous build script</a></li>
            <li>Hosted by <a target="_blank" href="http://www.webfaction.com?affiliate=staydecent">Web Faction</a></li>
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