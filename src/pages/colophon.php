<?php include $config['dirs']['layout'].'/header.php' ?>

<grid id="main">
  <column span=row>
    <h1>Colophon</h1>
    <div>&nbsp;</div>
  </column>
</grid>

<grid columns=12 class="page">
  <column span=6>
    <ul class="grossly-massive">
      <li>Designed in-browser</li>
      <li>Type set in Verdana</li>
      <li><a target=_blank href="https://rsms.me/raster/">Raster</a> for the grid</li>
      <li>Written with <a target="_blank" href="http://www.sublimetext.com/3">Sublime Text 3</a></li>
      <li>Powered by my <a target="_blank" href="https://github.com/staydecent/staydecent.ca">ridiculous build script</a></li>
      <li>Hosted by <a target="_blank" href="http://surge.sh/">Surge</a></li>
    </ul>
  </column>
  
  <column span=6>
    <p><a href="http://github.com/staydecent/staydecent.ca" target="_blank"><i class="icon-bookmark"></i>View source on Github</a></p>
  </column>
</grid>

<?php 
$next = array();

$next['url'] = 'work';
$next['text'] = 'Selected work';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>
