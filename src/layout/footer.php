
    <footer class="grid">
      <div>
        <a href="/" id="site-title" <?php echo current_class('adrian') ?>>Photography</a><br>
        <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?>>Software</a><br>
        <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?>>Etc.</a>
      </div>
      <div>
        <a href="mailto:hello@staydecent.ca">hello&#64;staydecent.ca</a><br>
        <a href="http://instagram.com/staydecent" target="_blank">Instagram</a><br>
        <a href="http://mobile.twitter.com/staydecent" target="_blank">Twitter</a><br>
        <a href="http://github.com/staydecent" target="_blank">Github</a>
      </div>
      <div><a href="http://staydecent.ca/now/">See what I’m doing right now.</a></div>
      <div><a href="#top">⬆</a></div>
    </footer>
    
  </div>

  <script>hljs.initHighlightingOnLoad();</script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document
        .getElementById('topbar')
        .addEventListener('click', function (ev) {
          window.location = '<?php echo SITE_URL ?>'
        })
    })
  </script>

</body>
</html>
