<footer>
  <section class="cols">
    <div>
      <nav>
        <div><time title="Last updated" datetime="<?php echo $mod_date ?>"><?php echo $mod_date ?></time></div>
        <a target=_blank rel=noopener href="https://github.com/staydecent/staydecent.ca/commit/<?php echo $git_hash ?>">(<?php echo $git_hash ?>)</a>
      </nav>
    </div>
    <div>
      &copy; 2009—<?php echo date("Y"); ?> Adrian Unger
    </div>
  </section>
</footer>

<?php if (isset($in_viewport) && $in_viewport === TRUE): ?></main><?php endif; ?>

<script src="<?php echo SITE_URL ?>assets/enhance.js"></script>
  
</main>

</body>
</html>
