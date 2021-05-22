<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"; ?>
<rss version="2.0"
	xmlns:excerpt="http://wordpress.org/export/1.2/excerpt/"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:wp="http://wordpress.org/export/1.2/"
>
  <channel>
    <title>Adrian Unger</title>
    <link><?php echo SITE_URL ?></link>
    <description>Hi there, I’m Adrian Unger, a software developer who prefers to be outdoors.</description>
    <pubDate><?php echo date("Y") ?></pubDate>
    <language>en</language>

    <wp:wxr_version>1.2</wp:wxr_version>
    <wp:base_site_url><?php echo SITE_URL ?></wp:base_site_url>
    <wp:base_blog_url><?php echo SITE_URL ?></wp:base_blog_url>

    <wp:author><wp:author_id>1009280</wp:author_id><wp:author_login><![CDATA[staydecent]]></wp:author_login><wp:author_email><![CDATA[hello@staydecent.ca]]></wp:author_email><wp:author_display_name><![CDATA[staydecent]]></wp:author_display_name><wp:author_first_name><![CDATA[Adrian]]></wp:author_first_name><wp:author_last_name><![CDATA[Unger]]></wp:author_last_name></wp:author>

    <wp:category><wp:term_id>1</wp:term_id><wp:category_nicename>blog</wp:category_nicename><wp:category_parent></wp:category_parent><wp:cat_name><![CDATA[Blog]]></wp:cat_name></wp:category>

    <wp:category><wp:term_id>12</wp:term_id><wp:category_nicename>code</wp:category_nicename><wp:category_parent></wp:category_parent><wp:cat_name><![CDATA[Code]]></wp:cat_name></wp:category>

    <wp:category><wp:term_id>13</wp:term_id><wp:category_nicename>photography</wp:category_nicename><wp:category_parent></wp:category_parent><wp:cat_name><![CDATA[Photography]]></wp:cat_name></wp:category>

    <?php
    $posts = all_entries();
    foreach ($posts as $date => $entry) :
    ?>
    <item>
      <title><?php echo $entry['title'] ?></title>
      <author>Adrian Unger</author>
      <dc:creator>staydecent</dc:creator>
      <link><?php echo $entry['url']; ?></link>
      <guid><?php echo $entry['url']; ?></guid>
      <wp:post_type>post</wp:post_type>
      <wp:post_date><?php echo gmdate('Y-m-d H:i:s', $date); ?></wp:post_date>
      <wp:post_date_gmt><?php echo gmdate('Y-m-d H:i:s', $date); ?></wp:post_date>
      <category domain="category" nicename="<?php echo $entry['category'] ?>"><![CDATA[<?php echo $entry['category'] ?>]]></category>
      <description></description>
      <content:encoded><![CDATA[<?php echo $entry['body'] ?>]]></content:encoded>
    </item>
    <?php endforeach; ?>
  </channel>
</rss>
