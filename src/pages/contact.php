<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container-fluid">

    <div id="contact" class="row-fluid centre">
        <p class="big fitText"><a href="mailto:hello&#64;staydecent.ca">hello&#64;staydecent.ca</a></p>

        <ul class="grossly-massive">
            <li>Call me on <a href="callto://staydecent" title="skype staydecent">Skype</a></li>
            <li>Follow me on <a href="http://twitter.com/staydecent">Twitter</a></li>
            <li>Fork me on <a href="https://github.com/staydecent">Github</a></li>
            <li>Swap opinions on <a href="http://news.ycombinator.com/threads?id=cickpass_broken">Hacker News</a></li>
        </ul>
    </div>

</div>

<?php 
$next = array();

$next['url'] = '';
$next['text'] = 'Selected work';

$scripts = '<script src="'.SITE_URL.'assets/js/jquery.fittext.js"></script>';
$scripts.= '<script>';
$scripts.= 'jQuery(document).ready(function($) {';
$scripts.= '$(".fitText").fitText(1.2, { maxFontSize: \'96px\' });';
$scripts.= '});';
$scripts.= '</script>';

?>

<?php include $config['dirs']['layout'].'/footer.php' ?>