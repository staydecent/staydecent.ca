<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="cf">
    <div class="inner">

<!--         <div class="cf">
            <p class="intro col2">I'm Adrian Unger, a freelance web designer and developer living in Vancouver. I founded <a href="http://www.cookitlocal.com">Cook It Local</a>.</p>
        </div> -->

        <div id="launched" class="cf">
            <?php $c=0; foreach ($entries['work'] as $e): ++$c; if ($c>2) break; ?>
                <div class="browser_frame left scale"><img src="http://placekitten.com/800/600"></div>
            <?php endforeach; ?>
        </div>

        <div class="section"><p class="intro">I&rsquo;m Adrian Unger, a freelance web designer, developer and consultant living in Vancouver. I founded <a href="//www.cookitlocal.com">Cook It Local</a>.</p></div>

        <div id="latest" class="section cf">
            <div class="col2">
                <h1>Latest Articles</h1>
                <?php $c=0; foreach ($entries['articles'] as $e): ++$c; if ($c>2) break; ?>
                    <article class="colhalf">
                        <h2><a class="black" href="<?php echo $e['url'] ?>"><?php echo $e['title'] ?></a></h2>
                        <p><?php echo $e['excerpt'] ?> <a href="<?php echo $e['url'] ?>">Continue reading &rarr;</a></p>
                    </article>                
                <?php endforeach; ?>
                <a class="button" href="<?php echo SITE_URL ?>/articles">View all articles &rarr;</a>
            </div>
        </div>

        <div id="latest" class="section cf">
            <div class="col1 last">
                <h1>Latest Bits</h1>
                <ol class="cf">
                <?php $c=0; foreach ($entries['bits'] as $e): ++$c; if ($c>8) break; ?>
                    <li><a class="black" href="<?php echo $e['url'] ?>"><?php echo $e['title'] ?></a></li>
                <?php endforeach; ?>
                </ol>
                <a class="button" href="<?php echo SITE_URL ?>/bits">View all bits &rarr;</a>
            </div>
        </div>

    </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>