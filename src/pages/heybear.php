<?php
$page_id = 'heybear';
$body_class = 'text';
$title = 'Hey Bear! Newsletter written by Adrian Unger';
?>
<?php include $config['dirs']['layout'].'/header.php' ?>

<article id="heybear">
  <div class="article-intro">
    <h2 class=big>Hey Bear!</h2>
  </div>

  <section class=cols>
    <div>
      <p><strong>Where I hope to convey the joy, delight and awe that I experience from nature.</strong> It’s remarkable we have a liveable planet at all—ya know, considering how <em>unlivable</em> the rest of the known universe is—let alone a planet with such abundance and majesty! I know of no greater glee than when I am privy to animals simply living their lives. </p>

      <p>It’s also a bit of a selfish project as I enjoy writing and taking photos and this will give me somewhere to house those, rather than letting them rot in some dark corner of Apple's cloud storage.</p>

      <p>I also—a bit presumptuously I might add—feel that, more than ever, we humans could benefit from greater connection to this planet which is an inexorable part of our existence. Even, simply, to bring more attention to the cyclical nature of—<em>ahem</em>—Nature. </p>

      <p>Uncertainty is part of reality just as much as this Earth is. And, we seem to be living in especially uncertain times. Yet, the rhythm of the seasons remains somewhat constant. The sun rises every morning and the moon every night. Opinions and politics don’t change that. Revelling in these rhythms grounds me into actual reality. </p>

      <p>So that’s my goal: to share my delight from the natural world and to revel in the unavoidable rhythms of our reality. It should be fun!</p>

      <p>👋🐻</p>

      <p><small><em>Curious about the name? Read the first issue ;) </em></small></p>
    </div>
    <div class=mobile-first>
      <div class="block">
        <h3>Subscribe to Hey Bear!</h3>
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
          <p><small>I'll never spam or share your email with anyone.</small></p>
          <p>
            <small>
            <a href="https://buttondown.com/refer/heybear" target="_blank">
              Powered by Buttondown.
            </a>
            </small>
          </p>
        </form>
      </div>
    </div>
  </section>  
</article>

<?php include $config['dirs']['layout'].'/footer.php' ?>