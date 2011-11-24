<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="cf">
    <div class="inner">

        <div class="cf">
            <p class="intro col2">I'm Adrian Unger, a freelance web designer, developer and consultant living in Vancouver. I founded <a href="http://www.cookitlocal.com">Cook It Local</a>.</p>
        </div>

        <div id="launched" class="section cf">
            <h1>Recently Launched</h1>
            <?php $c=0; foreach ($entries['work'] as $e): ++$c; if ($c>2) break; ?>
            <div class="colhalf">
                <img src="http://placekitten.com/400/300">
            </div>
            <?php endforeach; ?>
        </div>

        <div id="latest" class="section cf">
            <div class="col2">
                <h1>Latest Articles</h1>
            <?php $c=0; foreach ($entries['articles'] as $e): ++$c; if ($c>2) break; ?>
            <div class="colhalf">
                <h2><?php echo $e['title'] ?></h2>

                <p><?php echo $e['excerpt'] ?></p>
            </div>                
            <?php endforeach; ?>
            </div>

            <div class="col1 last">
                <h1>Latest Bits</h1>
                <div class="cf">
                <?php $c=0; foreach ($entries['bits'] as $e): ++$c; if ($c>5) break; ?>
                    <div style="padding:0 0 1em"><a href="<?php echo $e['url'] ?>"><?php echo $e['title'] ?></a></div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>