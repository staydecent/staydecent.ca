
<footer id="foot">

    <article class="container-fluid">
        <p class="centre"><img src="<?php echo SITE_URL ?>favicon.ico" alt="Trees are pretty great."></p>
        <p>I&rsquo;m Adrian Unger. I build <a href="http://ecquire.com" target="_blank">Ecquire</a> and advocate for biodiversity. Currently, I am interested in farming and México.</p>
        <?php if ($title === 'About'): ?>
        <p><small><a href="<?php echo SITE_URL ?>archives" title="view all posts">Archives</a></small></p>
        <?php else: ?>
        <p><small><a href="<?php echo SITE_URL ?>about" title="about adrian unger">More about me</a></small></p>
        <?php endif; ?>
    </article>

</footer>


<script src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.0rc1/zepto.min.js"></script>
<?php echo (isset($scripts)) ? $scripts : ''; ?>
<script src="<?php echo SITE_URL ?>assets/js/plugins.min.js"></script>
<script src="<?php echo SITE_URL ?>assets/js/main-012.js"></script>

</body>
</html>
