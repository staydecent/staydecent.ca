<?php include $config['dirs']['layout'].'/header.php' ?>

<div id="main" class="grid">
  <h1>Colophon</h1>
  <div>&nbsp;</div>
</div>

<div class="page grid">
  <ul class="grossly-massive">
    <li>Designed in-browser</li>
    <li>Type set in Verdana</li>
    <li>Flexbox for basic grid</li>
    <li>Written with <a target="_blank" href="http://www.sublimetext.com/3">Sublime Text 3</a></li>
    <li>Powered by my <a target="_blank" href="https://github.com/staydecent/staydecent.ca">ridiculous build script</a></li>
    <li>Hosted by <a target="_blank" href="http://surge.sh/">Surge</a></li>
  </ul>

  <p><a href="http://github.com/staydecent/staydecent.ca" target="_blank"><i class="icon-bookmark"></i>View source on Github</a></p>
</div>

<?php 
$next = array();

$next['url'] = 'work';
$next['text'] = 'Selected work';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>
