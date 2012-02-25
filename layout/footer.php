

<footer id="foot" class="container-fluid">

    <nav id="menu" role="navigation" class="row-fluid">
        <i class="icon-list"></i>
        <ul class="pull-left">
            <li<?php current_class('Adrian', $title) ?>><a href="<?php echo SITE_URL ?>" title="Freelance Super Designer">Home</a></li>
            <li<?php current_class('blog', $title) ?>><a href="<?php echo SITE_URL ?>blog" title="Words on design, food and life">Blog</a></li>
            <li<?php current_class('about', $title) ?>><a href="<?php echo SITE_URL ?>about" title="About Adrian Unger">About</a></li>
            <li<?php current_class('contact', $title) ?>><a href="<?php echo SITE_URL ?>contact" title="Say hello">Contact</a></li>
        </ul>

        <?php if (isset($next)) : ?>
        <p class="pull-right next-link"><a href="<?php echo SITE_URL . $next['url'] ?>"><?php echo $next['text'] ?> <i class="icon-chevron-right"></i></a></p>
        <?php endif; ?>
    </nav>

    <div class="row-fluid">
        <div class="span3">
            <p>I&rsquo;m Adrian Unger, a freelance designer and web developer working with passionate people on progressive ideas.</p>
        </div>

        <div class="span5">
            <h6>Get updated</h6>
            <nav><a target="_blank" href="http://feeds.feedburner.com/staydecent"><i class="icon-fire"></i> RSS Feed</a><br><a target="_blank" href="http://eepurl.com/jwlsT"><i class="icon-envelope"></i> Mailing List</a></nav>
        </div>

        <div class="span4 pull-right">
            <p class="meta">
                <strong class="extra">&copy;</strong> <a href="<?php echo SITE_URL ?>contact">Adrian Unger</a> 
                <i class="icon-map-marker"></i><a href="http://g.co/maps/c6khp" rel="map" target="_blank">Made in BC</a> 
                <i class="icon-cog"></i><a href="<?php echo SITE_URL ?>colophon">Colophon</a> 
            </p>
        </div>
    </div>

</footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php echo (isset($scripts)) ? $scripts : ''; ?>
<script src="<?php echo SITE_URL ?>assets/js/main-011.js"></script>

</body>
</html>