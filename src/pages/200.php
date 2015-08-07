<?php
// Client side redirects for '/post-title' => '/cat/post-title'
// Not great, but oh well.
function entries_pluck($toPluck, $posts) {
  $ret = array();
  foreach ($posts as $date => $entry) $ret[] = $entry[$toPluck];
  return $ret;
}

$blog = entries_pluck('slug', get_entries('blog'));
$code = entries_pluck('slug', get_entries('code'));
$photos = entries_pluck('slug', get_entries('photos'));
?>
<p>If you are not redirected automatically, please <a href="/">click here</a>.
<script type="text/javascript">
(function(){
  var slug = window.location.pathname.replace(/\//g, '');
  var blogPosts = <?php echo json_encode($blog); ?>;
  var codePosts = <?php echo json_encode($code); ?>;
  var photoPosts = <?php echo json_encode($photos); ?>;

  var cat;

  if (blogPosts.indexOf(slug) !== -1) {
    cat = 'blog';
  } else if (codePosts.indexOf(slug) !== -1) {
    cat = 'code';
  } else if (photoPosts.indexOf(slug) !== -1) {
    cat = 'photos';
  }

  if (cat) {
    window.location = '<?php echo SITE_URL ?>'+cat+'/'+slug;
  }
})();
</script>