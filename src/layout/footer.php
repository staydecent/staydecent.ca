<footer>
  <section>
    <div>&copy; 2009—<?php echo date("Y"); ?></div>

    <section>
      <nav>
        <div><time is="pretty-date" datetime="<?php echo $mod_date ?>"><?php echo $mod_date ?></time></div>
        <a target=_blank rel=noopener href="https://github.com/staydecent/staydecent.ca/commit/<?php echo $git_hash ?>">(<?php echo $git_hash ?>)</a>
      </nav>
      <div>Have a lovely day :)</div> 
    </section>
  </section>
</footer>

<?php if (isset($in_viewport) && $in_viewport === TRUE): ?></main><?php endif; ?>

<script src="<?php echo SITE_URL ?>assets/enhance.js"></script>

</body>
</html>
