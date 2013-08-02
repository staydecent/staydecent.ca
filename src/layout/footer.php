
<footer id="foot">

    <article class="container-fluid">
        <p class="centre"><img src="<?php echo SITE_URL ?>favicon.ico" alt="Trees are pretty great."></p>
        <p>I&rsquo;m Adrian Unger. I build <a href="http://ecquire.com" target="_blank">Ecquire</a> and advocate for biodiversity. Generally, I spend more time among trees than people.</p>
        <?php if ($title === 'About'): ?>
        <p><small><a href="<?php echo SITE_URL ?>archives" title="view all posts">Archives</a></small></p>
        <?php else: ?>
        <p><small><a href="<?php echo SITE_URL ?>about" title="about adrian unger">Say hello</a></small></p>
        <?php endif; ?>
    </article>

</footer>


<script src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.0rc1/zepto.min.js"></script>
<?php echo (isset($scripts)) ? $scripts : ''; ?>
<script src="<?php echo SITE_URL ?>assets/js/plugins.min.js"></script>
<script src="<?php echo SITE_URL ?>assets/js/main-012.js"></script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.staydecent.ca"]);
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.staydecent.ca/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "2"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->

</body>
</html>
