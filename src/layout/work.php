<?php include 'header.php' ?>

<div role="main" id="main" class="container-fluid">

        <article>
            <header>
                <h1><?php echo $entry['title'] ?></h1>  
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

            <footer class="meta">
                <i class="icon-calendar"></i> Published <a href="<?php echo $entry['url']; ?>"><?php echo date("F j, Y", $entry['date']) ?></a>
                <i class="icon-align-left"></i> <?php echo str_word_count($entry['body']) ?> words
            </footer>
        </article>  


</div>

<?php 
$next = array();

$next['url'] = 'blog';
$next['text'] = 'All posts';
?> 

<?php include 'footer.php' ?>