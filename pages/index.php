<?php include $config['dirs']['layout'].'/header.php' ?>

<div role="main" id="main" class="cf">
    
    <h1>Advocate for a <em class="serif">wonderful</em> web</h1>

<?php foreach ($entries['all'] as $e): ?>
    <h3><?php echo $e['title'] ?></h3>
<?php endforeach; ?>
</div>

<?php include $config['dirs']['layout'].'/footer.php' ?>