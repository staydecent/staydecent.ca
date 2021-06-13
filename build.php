<?php 

date_default_timezone_set('America/Vancouver');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);
define('SOURCE', ROOT . 'src' . DS);


/**
 * ------------------------------------------------------------------------
 * Configuration options
 * ------------------------------------------------------------------------
 */
$config = array(
      'date_re' => '/[\d]+-[\d]+-[\d]+-/'
    , 'content_file' => 'content.md'
    , 'dirs' => array(
          'entries' => SOURCE . 'entries'   // Posts go in here
        , 'pages'   => SOURCE . 'pages'     // Pages go in here
        , 'layout'  => SOURCE . 'layout'    // layout files (header.php, footer.php etc.)
        , 'build'   => ROOT   . 'public'    // output dir
    )
    , 'ignore' => array(
          ROOT . 'functions.php'
        , ROOT . 'markdown.php'
        , ROOT . 'build.php'
        , ROOT . '.git'
        , 'less'
    )
);


/**
 * ------------------------------------------------------------------------
 * CLI, setup
 * ------------------------------------------------------------------------
 */
if ($argc >= 2) 
{
    array_shift($argv);
    // first arg is build dir
    $config['dirs']['build'] = $argv[0];
    // set SITE_URL
    $site_url = (isset($argv[1])) ? $argv[1] : '';
    $site_url = (substr($site_url,-1) === '/') ? $site_url : $site_url.'/';
    // api URL
    $api_url = (isset($argv[2])) ? $argv[2] : '';
    $api_url = (substr($api_url,-1) === '/') ? $api_url : $api_url.'/';
}

define('SITE_URL', $site_url);
define('API_URL', $api_url);

$config['ignore'] = array_merge($config['ignore'], array_values($config['dirs']));
$entries = array();
$pages = array();


/**
 * ------------------------------------------------------------------------
 * Dependencies
 * ------------------------------------------------------------------------
 */
require __DIR__ . '/vendor/autoload.php';
require 'functions.php';
require 'markdown.php';


/**
 * ------------------------------------------------------------------------
 * Begin build, by iterating Entries
 * ------------------------------------------------------------------------
 */
$page = 1;
$per_page = 100;
$has_next_page = true;
$all_entries = array(); // flat array from API
$entries = array(); // nested by category slug, date
$cat_map = array(
  1 => 'blog',
  12 => 'code'
);

while ($has_next_page) {
  $headers = array('Accept' => 'application/json');
  $request = Requests::get(API_URL.'wp-json/wp/v2/posts?per_page='.$per_page.'&page='.$page, $headers);

  $response = json_decode($request->body, true);
  
  $total_pages = number_format($request->headers["X-WP-TotalPages"]);
  $has_next_page = $total_pages > $page;
  $page = $page + 1;

  $all_entries = array_merge($all_entries, $response);
}

foreach ($all_entries as $entry) {
  $cat = $cat_map[$entry['categories'][0]];
  if (!isset($cat)) {
    continue;
  }

  $entry['cat'] = $cat;

  if (substr($cat, -1, 1) === 's') {
    $layout = substr($cat, 0, -1);
  } else {
    $layout = $cat;
  }

  // override layout for "Link" posts
  if ($entry['format'] === 'link') {
    $layout = 'link';
  }

  $title = $entry['title']['rendered'];

  // save entry for template data
  $entries['all'][$entry['date']] = $entry;
  $entries[$cat][$entry['date']] = $entry;

  // save static file
  $layout = $config['dirs']['layout'] . DS . $layout . '.php';
  $out = render($layout);
  $new_dir = $config['dirs']['build'] . DS . $cat . DS . $entry['slug'];

  Parse::new_file($new_dir, $out);
}


/**
 * ------------------------------------------------------------------------
 * Process Pages
 * ------------------------------------------------------------------------
 */
foreach ($entries as $cat => $array) 
{
    krsort($entries[$cat]);
}

$dir = new DirectoryIterator($config['dirs']['pages']);

foreach ($dir as $fileinfo)
{
    if ( ! $fileinfo->isDot()
        && ! in_array($fileinfo->getPathname(), $config['ignore'])
        && substr($fileinfo->getBasename(), '0', 1) !== '.') 
    {
        $title = get_title($fileinfo->getFilename());
        $out = render($fileinfo->getPathname());
        $is_filename = FALSE;

        // leave index.php in root
        $new_dir = $config['dirs']['build'] . DS;

        // 200.html should not be a dir
        if ($fileinfo->getBasename() === '200.php') {
            $new_dir = $new_dir . str_replace('.php', '.html', $fileinfo->getBasename());
            $is_filename = TRUE;
        }
        elseif ($fileinfo->getBasename() !== 'index.php') 
        {
            $new_dir = $new_dir . str_replace('.php', '', $fileinfo->getBasename());
        }

        Parse::new_file($new_dir, $out, $is_filename);
    }
}


/**
 * ------------------------------------------------------------------------
 * Copy everything else (Assets, static files, etc.)
 * ------------------------------------------------------------------------
 */
$staticIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(SOURCE));

while ($staticIterator->valid())
{
    if (!$staticIterator->isDot()
        && ! ignore($staticIterator->getPathname(), $config)
        && substr($staticIterator->getBasename(), '0', 1) !== '.') 
    {
        $new_file = $config['dirs']['build'] . DS . str_replace(SOURCE, '', $staticIterator->getPathname());
        $ext = $staticIterator->getExtension();

        if ($ext === 'php') 
        {
            $out = render($staticIterator->getPathname());
            Parse::new_file(str_replace('index.php', '', $new_file), $out);
        }
        elseif ($ext === 'jpeg' || $ext === 'jpg')
        {
            Parse::copy_file($staticIterator->getPathname(), $new_file, $staticIterator->getBasename());
            dither($new_file);
        }
        else 
        {
            Parse::copy_file($staticIterator->getPathname(), $new_file, $staticIterator->getBasename());
        }
    }

    $staticIterator->next();
}
