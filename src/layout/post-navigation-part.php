<article class="post-navigation">
  <aside>
    <p>
      <span class="pull-right">
      <?php $next_entry = next_entry($entry); if ($next_entry): ?>
          <h3>Next up </h3>
          <a class=btn href="<?php echo $next_entry['url']; ?>">&rarr; <?php echo $next_entry['title'] ?></a>
      <?php else: ?>
          <h3>You&rsquo;ve reached the end </h3>
          <em>View all <a href="<?php echo SITE_URL . $entry['category'] ?>">posts</a>.</em>
      <?php endif; ?>
      </span>
    </p>
    <p>Or, explore the <a href="<?php echo SITE_URL ?>archives">archive</a>, check out my newsletters <a href="https://tednet.org" target=_blank>TEDNET</a> and <a href="https://heybear.staydecent.ca" target=_blank>Hey Bear!</a>, get updates here via <a href="<?php echo SITE_URL ?>feed">RSS</a>, or send me an <a href="mailto:hello&#64;staydecent.ca">email</a>.</p>
  </aside>
</article>
