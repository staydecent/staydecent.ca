<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article class="spaced">
        <header class="container-fluid">
            <h1>What I’m doing now</h1>
            <p class="meta centre">Here are the things I’m currently focused on:</p>
        </header>

        <div class="container-fluid">
          <ul>
            <li>Building web and mobile apps with <a href="http://inputlogic.ca" target="_blank">Input Logic</a></li>
            <li>Taking <a href="https://instagram.com/staydecent/" target="_blank">photos out in nature</a> as much as possible</li>
            <li><del><a href="https://run-log.com/profiles/profile/staydecent/" target="_blank">Running</a></del> <ins title="Commuting by bike has replaced running">Biking</ins> semi-regularly for the first time in my life</li>
            <li>Getting used to owning a house&hellip;</li>
            <li>Really, maybe, possibly starting to blog/write more</li>
          </ul>

          <p>I am currently living on Vancouver Island after spending a year in the South Shore of Nova Scotia.</p>

          <p>This page was inspired by&nbsp;<a href="https://sivers.org/now">Derek Sivers</a>.</p>
          <p><em>Last updated:</em> 26th September, 2016</p>
        </div>
    </article>

</div>

<?php
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>
