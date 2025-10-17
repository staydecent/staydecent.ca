<article class="post-navigation">
  <aside>
    <p>
      <span class="pull-right">
      <?php $next_entry = next_entry($entry); if ($next_entry): ?>
          <h3>Next up </h3>
          <a href="<?php echo $next_entry['url']; ?>"><?php echo $next_entry['title'] ?></a>
      <?php else: ?>
          <h3>You&rsquo;ve reached the end </h3>
          <em>View all <a href="<?php echo SITE_URL . $entry['category'] ?>">posts</a>.</em>
      <?php endif; ?>
      </span>
    </p>
    <div class="block">
      <h4>Subscribe to Hey Bear!</h4>
      <p>Revelations from Nature. Just honest-to-goodness nuggets of joy and delight with the occasional self-reflection.</p>
      <form
        action="https://buttondown.com/api/emails/embed-subscribe/heybear"
        method="post"
        target="popupwindow"
        onsubmit="window.open('https://buttondown.com/heybear', 'popupwindow')"
        class="embeddable-buttondown-form"
      >
        <label for="bd-email"></label>
        <input type="email" name="email" id="bd-email" placeholder="Your email (you@example.com)" />
        <input type="submit" value="Subscribe" />
        <br>
        <small class=fineprint>I'll never spam or share your email with anyone.</small>
      </form>
    </div>
  </aside>
</article>
