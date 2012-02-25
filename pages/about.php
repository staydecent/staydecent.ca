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

        <div class="row-fluid">
            <div class="span4">
                <h3>Services</h3>
                <p class="meta">
                    <span class="tag">Product &amp; Web design</span> 
                    <span class="tag">Front-end development</span> 
                    <span class="tag">Mobile development</span> 
                    <span class="tag">WordPress development</span> 
                    <span class="tag">Web app development</span>
                    <span class="tag">Rapid prototyping</span>
                </p>
            </div>
            <div class="span3">
                <h3>Tools</h3>
                <ul>
                    <li>Thinkpad T410</li>
                    <li>Sublime Text 2</li>
                    <li>Console2</li>
                    <li>WinLess</li>
                </ul>
            </div>
            <div class="span3">
                <h3>Technologies</h3>
                <ul>
                    <li>CodeIgniter</li>
                    <li>Google App Engine</li>
                    <li>jQuery</li>
                    <li>WordPress</li>
                    <li>MongoDB</li>
                </ul>
            </div>
            <div class="span2">
                <h4>Learning</h4>
                <ul>
                    <li>Backbone.js</li>
                    <li>Node.js</li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php 
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>          

<?php include $config['dirs']['layout'].'/footer.php' ?>