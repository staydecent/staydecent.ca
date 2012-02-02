<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="container">

    <div class="inner cf">
    <?php
    $limit = 0;
    foreach ($entries['work'] as $date => $entry)
    {
        if (++$limit > 4) break;

        $images = explode(', ', $entry['images']);
        ?>
        <div class="thumb col6<?php echo ($limit % 2 === 0) ? ' last' : ''; ?>">
            <a href="<?php echo $entry['url']; ?>">
                <?php foreach ($images as $src) : ?>
                <div class="browser_frame invisible"><img src="<?php echo $src ?>" alt="Screenshot of <?php echo $entry['title'] ?>"></div>
                <?php endforeach; ?>

                <header><h1 class="scale centre"><?php echo $entry['title'] ?></h1></header>
            </a>
        </div>
        <?php
    }
    ?>

    <p class="col6 skip3 big">I&rsquo;ve worked on nearly fifty websites since 2008&mdash;two dozen of them completed in 2011 alone. If you'd like to see more of my work, please <a href="<?php echo SITE_URL ?>contact">get in touch</a>.</p>
    </div>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>