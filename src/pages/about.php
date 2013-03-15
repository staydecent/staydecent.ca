<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article class="spaced">
        <header class="container-fluid">
            <h1>Hi, nice to meet you.</h1>
            <p class="meta centre">You can reach me via <a href="mailto:hello&364;staydecent.ca">Email</a> or <a href="http://twitter.com/staydecent" target="_blank">Twitter</a>.</p>
        </header>

        <div class="container-fluid">            
            <p class="big">I&rsquo;m a software developer at <a href="http://ecquire.com" target="_blank">Ecquire</a>. Previously, I ran a freelance web development practice under the alias <em>Staydecent</em>. Currently, I&rsquo;m hanging out in <a href="http://vivaoaxaca2013.wordpress.com" target="_blank">Mexico</a>.</p>

            <p>I disagree with institutionalized education, offices and economics. That&rsquo;s why I dropped out of college, work remotely and support small-time makers&mdash;and growers! Moreover, I&rsquo;d say I'm an advocate for biodiversity.</p>

            <h2>This site</h2>

            <p>Is designed in-browser, with the type set in <a target="_blank" href="http://www.google.com/webfonts/specimen/Source+Sans+Pro">Source Sans Pro</a> and <a href="https://en.wikipedia.org/wiki/Helvetica" target="_blank">Helvetica</a>. It's coded and written with <a target="_blank" href="http://www.sublimetext.com/2">Sublime Text 2</a> while powered by my <a target="_blank" href="https://github.com/staydecent/staydecent.ca">ridiculous build script</a> on <a target="_blank" href="http://www.webfaction.com?affiliate=staydecent">Web Faction</a>.</p>

            <p>You can <a href="http://github.com/staydecent/staydecent.ca" target="_blank">view the source</a> on Github.</p>
        </div>
    </article>  

</div>

<?php 
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>          

<?php include $config['dirs']['layout'].'/footer.php' ?>