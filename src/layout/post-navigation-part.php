<div class="post-navigation">
<?php $next_entry = next_entry($entry); if ($next_entry): ?>
    <h4>Next up</h4>
    <a href="<?php echo $next_entry['url']; ?>"><?php echo $next_entry['title'] ?></a>
<?php else: ?>
    <h4>You&rsquo;ve reached the end</h4>
    <em>View the <a href="<?php echo SITE_URL ?>archives">archives</a> for all posts.</em>
<?php endif; ?>
</div>