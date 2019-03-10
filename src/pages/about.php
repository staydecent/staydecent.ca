<?php include $config['dirs']['layout'].'/header.php' ?>

  <div class="page">
    <grid columns=12 columns-s=1>
      <column span=12>
        <?php include $config['dirs']['layout'].'/nav.php' ?>
      </column>
      <column span=6-12>
        <h1>About</h1>
      </column>
    </grid>
  </div>
  
  <grid columns=12 columns-s=1 class="page">
    <column span=4>
      <p class="big">Hi there, I’m Adrian Unger, a software developer who prefers to be outdoors. I have a particular fondness for rocky coastlines and mountain meadows.</p>
    </column>

    <column span=9-12>
      <p class="big">I&rsquo;m an enthuisiast for food, nature and exploring new places. I also <em title="🦊🦊🦊">can&rsquo;t stop</em> taking <a href="/photography">photos</a> of those experiences.</p>
    </column>
  </grid>

<?php include $config['dirs']['layout'].'/footer.php' ?>
