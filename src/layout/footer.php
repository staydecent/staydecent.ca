
    <footer class="page">
      <grid columns=4 columns-s=1>
        <column>
          <a href="/" id="site-title" <?php echo current_class('adrian') ?>>Photography</a><br>
          <a href="<?php echo SITE_URL ?>code" <?php echo current_class('code') ?>>Software</a><br>
          <a href="<?php echo SITE_URL ?>blog" <?php echo current_class('blog') ?>>Etc.</a>
        </column>
        <column>
          <a href="mailto:hello@staydecent.ca">hello&#64;staydecent.ca</a><br>
          <a href="http://vsco.co/staydecent" target="_blank">VSCO</a><br>
          <a href="http://chaosboogie.tumblr.com" target="_blank">Tumblr</a><br>
          <a href="http://github.com/staydecent" target="_blank">Github</a>
        </column>
        <column>
          <a href="/now">See what I’m doing right now.</a>
          <p id="copy"><small>All photos are © Adrian Unger and cannot be used without written permission.</small></p>
          <p>
            <a 
              rel='alternate'
              type='application/rss+xml'
              href='<?php echo SITE_URL ?>/feed'
            >
              <img 
                class='rss'
                style='width: 25px; height: 25px;'
                src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzQ1MScgd2lkdGg9JzQ1MScgIGZpbGw9IiMwMDAwMDAiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6Y2M9Imh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL25zIyIgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIiB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNvZGlwb2RpPSJodHRwOi8vc29kaXBvZGkuc291cmNlZm9yZ2UubmV0L0RURC9zb2RpcG9kaS0wLmR0ZCIgeG1sbnM6aW5rc2NhcGU9Imh0dHA6Ly93d3cuaW5rc2NhcGUub3JnL25hbWVzcGFjZXMvaW5rc2NhcGUiIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLC05NTIuMzYyMTgpIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjY0MC4wMDAyLC0xMTgyLjk5OTkpIj48cGF0aCBzdHlsZT0idGV4dC1pbmRlbnQ6MDt0ZXh0LXRyYW5zZm9ybTpub25lO2RpcmVjdGlvbjpsdHI7YmxvY2stcHJvZ3Jlc3Npb246dGI7YmFzZWxpbmUtc2hpZnQ6YmFzZWxpbmU7Y29sb3I6IzAwMDAwMDtlbmFibGUtYmFja2dyb3VuZDphY2N1bXVsYXRlOyIgZD0ibSAyNjU3Ljk5OTksMjE0Mi4zNjIyIGMgLTAuNjYyNCwwIC0wLjk5NjQsMC41NTI3IC0xLDEgbCAwLDg0IGMgMCwwLjUyMzYgMC40NzY0LDAuOTk5OSAxLDEgbCA2NCwwIGMgMC41MjM2LC0xZS00IDAuOTk5OSwtMC40NzY0IDEsLTEgbCAwLC02MiBjIDAuMDEsLTAuMjY0MSAtMC4wOTcsLTAuNTI4OSAtMC4yODEzLC0wLjcxODggbCAtMjIsLTIyIGMgLTAuMTg5OCwtMC4xODM3IC0wLjQ1NDcsLTAuMjg3MyAtMC43MTg3LC0wLjI4MTIgbCAtNDIsMCB6IG0gMSwyIDQwLDAgMCwyMSBhIDEuMDAwMSwxLjAwMDEgMCAwIDAgMSwxIGwgMjEsMCAwLDYwIC02MiwwIDAsLTgyIHogbSA0MiwxLjQwNjIgMTguNTkzNywxOC41OTM4IC0xOC41OTM3LDAgMCwtMTguNTkzOCB6IiBmaWxsPSIjMDAwMDAwIiBmaWxsLW9wYWNpdHk9IjEiIHN0cm9rZT0ibm9uZSIgbWFya2VyPSJub25lIiB2aXNpYmlsaXR5PSJ2aXNpYmxlIiBkaXNwbGF5PSJpbmxpbmUiIG92ZXJmbG93PSJ2aXNpYmxlIj48L3BhdGg+PHBhdGggZD0ibSAyNjcyLjg1OTQsMjE3Ny40OTk5IGMgMC4wNzQsMC41MjM2IDAuNjE3LDAuOTMzIDEuMTQwNiwwLjg1OTQgMTkuMzQxOCwwIDM1LDE1LjY1ODIgMzUsMzUgMCwwLjQ4NDQgMC4zOTQ0LDAuOTM5NCAwLjg3NSwxIDAuNTYzNSwwLjA3MSAxLjEyOTQsLTAuNDMyIDEuMTI1LC0xIDAsLTIwLjQyMjcgLTE2LjU3NzMsLTM3IC0zNywtMzcgLTAuODIyNSwtMC4wMjcgLTEuMTg0NCwwLjU2MTkgLTEuMTQwNiwxLjE0MDYgeiBtIDAuMDYyLDguOTM3NSBjIDAuMDQxLDAuNTIzNiAwLjU1NDUsMC45NjI4IDEuMDc4MSwwLjkyMTkgMTQuMzcxMywwIDI2LDExLjYyODcgMjYsMjYgMWUtNCwwLjUyMzYgMC40NzY0LDAuOTk5OSAxLDEgMC41MjM2LC0xZS00IDAuOTk5OSwtMC40NzY0IDEsLTEgMCwtMTUuNDUyMSAtMTIuNTQ3OCwtMjggLTI4LC0yOCAtMC43NTAyLDAuMDUgLTEuMTIwOCwwLjU2ODUgLTEuMDc4MSwxLjA3ODEgeiBtIDAuMDkxLDguOTA1OCBjIDAuMDEsMC41MTQxIDAuNDcyNywwLjk3NzggMC45ODY4LDAuOTg0OCA5LjQwMDcsMCAxNyw3LjYzMDYgMTcsMTcuMDMxMyAxMGUtNSwwLjUyMzYgMC40NzY0LDAuOTk5OSAxLDEgMC41MjM2LC0xZS00IDAuOTk5OSwtMC40NzY0IDEsLTEgMCwtMTAuNDgxNSAtOC41MTg0LC0xOS4wMzEzIC0xOSwtMTkuMDMxMyAtMC42Nzg0LDAuMTEyNCAtMC45NjA1LDAuNDY2IC0wLjk4NjgsMS4wMTUyIHogTSAyNjc3LDIyMDYuMzI4IGMgLTIuMTk3MywwIC00LDEuODM0IC00LDQuMDMxMyAwLDIuMTk3MyAxLjgwMjcsNCA0LDQgMi4xOTczLDAgNCwtMS44MDI3IDQsLTQgMCwtMi4xOTczIC0xLjgwMjcsLTQuMDMxMyAtNCwtNC4wMzEzIHogbSAwLDIuMDMxMyBjIDEuMTE2NCwwIDIsMC44ODM2IDIsMiAwLDEuMTE2NCAtMC44ODM2LDEuOTY4NyAtMiwxLjk2ODcgLTEuMTE2NCwwIC0yLC0wLjg1MjMgLTIsLTEuOTY4NyAwLC0xLjExNjQgMC44ODM2LC0yIDIsLTIgeiIgc3R5bGU9InRleHQtaW5kZW50OjA7dGV4dC10cmFuc2Zvcm06bm9uZTtkaXJlY3Rpb246bHRyO2Jsb2NrLXByb2dyZXNzaW9uOnRiO2Jhc2VsaW5lLXNoaWZ0OmJhc2VsaW5lO2NvbG9yOiMwMDAwMDA7ZW5hYmxlLWJhY2tncm91bmQ6YWNjdW11bGF0ZTsiIGZpbGw9IiMwMDAwMDAiIGZpbGwtb3BhY2l0eT0iMSIgc3Ryb2tlPSJub25lIiBtYXJrZXI9Im5vbmUiIHZpc2liaWxpdHk9InZpc2libGUiIGRpc3BsYXk9ImlubGluZSIgb3ZlcmZsb3c9InZpc2libGUiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg=="
                alt='RSS feed icon by Aybige'
                title='Subscribe to my RSS feed'
              >
            </a>
          </p>
        </column>
        <column><a href="#top">⬆</a></column>
      </grid>
    </footer>
    
  </div>

  <script>hljs.initHighlightingOnLoad();</script>
  <script src="<?php echo SITE_URL ?>assets/enhance.js"></script>

</body>
</html>
