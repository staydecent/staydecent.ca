<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article class="spaced">
        <div class="container-fluid">
            <img src="http://i.imgur.com/IemFV8v.jpg" alt="Me, doing crow position in minus 10 degrees." />

            <p>Hey, I'm Adrian. I enjoy food, nature, am probably a neophile, and I make web and mobile apps <a href="http://inputlogic.ca" title="Input Logic Inc." target="_blank">for a living</a>.</p>

            <p>This site is powered by <a href="http://www.hydroquebec.com/about-hydro-quebec/our-energy/" target="_blank" title="Hydro-Québec">99% renewables</a> and is <a href="http://github.com/staydecent/staydecent.ca" target="_blank">open sourced</a>.</p>

            <p class="centre">You can reach me via <a href="mailto:hello&#64;staydecent.ca">Email</a> or <a href="http://twitter.com/staydecent" target="_blank">Twitter</a>.</p>
        </div>
    </article>

</div>

<?php
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>
