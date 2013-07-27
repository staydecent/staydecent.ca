<article>
    <div class="container-fluid">
        <p>
	<span class="pull-left"><small><a href="<?php echo SITE_URL ?>archives">Archives</a></small></span>
        <span class="post-navigation pull-right">
        <?php $next_entry = next_entry($entry); if ($next_entry): ?>
            <strong>Next up </strong>
            <a href="<?php echo $next_entry['url']; ?>"><?php echo $next_entry['title'] ?></a>
        <?php else: ?>
            <strong>You&rsquo;ve reached the end </strong>
            <em>View the <a href="<?php echo SITE_URL ?>archives">archives</a> for all posts.</em>
        <?php endif; ?>
        </span>
        </p>
    </div>
</div>
