<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"; ?>
<rss version="2.0">
    <channel>
        <title>Adrian Unger</title>
        <link><?php echo SITE_URL ?></link>
        <description>Adrian Unger is the CTO of Ecquire. He lives in Canada, but prefers México. He also loves farming/gardening.</description>
        <pubDate><?php echo date("Y") ?></pubDate>

        <?php
        $posts = all_entries();
        foreach ($posts as $date => $entry) :
        ?>
        <item>
            <title><?php echo $entry['title'] ?></title>
            <author>Adrian Unger</author>
            <pubDate><?php echo date(DateTime::RSS, $date); ?></pubDate>
            <link><?php echo $entry['url']; ?></link>
            <guid><?php echo $entry['url']; ?></guid>
            <description>
            <?php echo htmlspecialchars($entry['body'], ENT_QUOTES) ?>
            </description>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>