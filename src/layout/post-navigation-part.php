<article class="post-navigation">
  <p>
    <span class="pull-right">
    <?php $next_entry = next_entry($entry); if ($next_entry): ?>
        <strong>Next up </strong>
        <a href="<?php echo $next_entry['url']; ?>"><?php echo $next_entry['title'] ?></a>
    <?php else: ?>
        <strong>You&rsquo;ve reached the end </strong>
        <em>View all <a href="<?php echo SITE_URL . $entry['category'] ?>">posts</a>.</em>
    <?php endif; ?>
    </span>
  </p>
</article>
