<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="padding container-fluid">

    <div class="row-fluid">
    <?php
    $limit = 0;
    foreach ($entries['work'] as $date => $entry)
    {
        if (++$limit > 4) break;

        $images = explode(', ', $entry['images']);
        ?>
        <div class="thumb span6">
            <a href="<?php echo $entry['url']; ?>">
                <?php foreach ($images as $src) : ?>
                <div class="browser_frame invisible"><img src="<?php echo $src ?>" alt="Screenshot of <?php echo $entry['title'] ?>"></div>
                <?php endforeach; ?>

                <header><h1 class="scale centre"><?php echo $entry['title'] ?></h1></header>
            </a>
        </div>
        <?php echo ($limit % 2 === 0) ? '</div><div class="row-fluid">' : ''; ?>
        <?php
    }
    ?>
    </div>

    <p class="span6 offset2 big">I&rsquo;ve worked on nearly fifty websites since 2008&mdash;two dozen of them completed in 2011 alone. My complete work history is available upon request.</p>
</div>

<?php 
$next = array();

$next['url'] = 'contact';
$next['text'] = 'Get in touch';
?>

<?php include $config['dirs']['layout'].'/footer.php' ?>