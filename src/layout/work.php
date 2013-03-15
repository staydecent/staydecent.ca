<?php include 'header.php' ?>

<div role="main" id="main" class="container-fluid">

        <article>
            <header>
                <h1><?php echo $entry['title'] ?></h1>  
                <p class="meta centre"><a href="<?php echo SITE_URL ?>about" title="About Adrian Unger">Adrian Unger</a>, <?php echo date("F j, Y", $entry['date']) ?></p>
            </header>

            <?php 
            $images = explode(', ', $entry['images']);
            ?>

            <?php if (is_array($images)) : ?>
                <?php foreach ($images as $img): ?>
                    <img src="<?php echo $img ?>" alt="Screenshot for <?php $entry['title'] ?>">
                <?php endforeach; ?>
            <?php else: ?>
                <img src="<?php echo $images ?>" alt="Screenshot for <?php $entry['title'] ?>">
            <?php endif; ?>
            
            <?php echo $entry['body'] ?>
        </article>  


</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>