<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article class="spaced">
        <header class="container-fluid">
            <h1>Hi, nice to meet you.</h1>
            <p class="meta centre">You can reach me via <a href="mailto:hello&#64;staydecent.ca">Email</a> or <a href="http://twitter.com/staydecent" target="_blank">Twitter</a>.</p>
        </header>

        <div class="container-fluid">
            <p class="big">I&rsquo;m a software developer at <a href="http://ecquire.com" target="_blank">Ecquire</a>. Previously, I ran a freelance web development practice under the alias <em>Staydecent</em>.</p>

            <p>I disagree with institutionalized education, offices and economics. That&rsquo;s why I dropped out of college, work remotely and support small-time makers&mdash;and growers! Moreover, I&rsquo;d say I'm an advocate for biodiversity.</p>

            <p>This website is&nbsp;<a href="http://greenqloud.com/">100% carbon neutral</a>. You can <a href="http://github.com/staydecent/staydecent.ca" target="_blank">view the source</a> on Github.</p>
        </div>
    </article>

</div>

<?php
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>
