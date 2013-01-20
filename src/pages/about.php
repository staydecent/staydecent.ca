<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main">

    <article>
        <header class="container-fluid">
            <h1>Hello, nice to meet you.</h1>  
        </header>

        <div class="container-fluid">            
            <p class="big">I&rsquo;m a software developer at <a href="http://ecquire.com" target="_blank">Ecquire</a>. Previously, I ran a freelance web development practice under the alias <em>Staydecent</em>. Currently, I&rsquo;m hanging out in <a href="http://vivaoaxaca2013.wordpress.com" target="_blank">Mexico</a>.</p>
        </div>
    </article>  

</div>

<?php 
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Say hello!';
?>          

<?php include $config['dirs']['layout'].'/footer.php' ?>