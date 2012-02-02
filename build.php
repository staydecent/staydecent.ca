<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);


/**
 * ------------------------------------------------------------------------
 * Configuration options
 * ------------------------------------------------------------------------
 */
$config = array(
      'date_re' => '/[\d]+-[\d]+-[\d]+-/'
    , 'content_file' => 'content.txt'
    , 'dirs' => array(
          'entries' => ROOT . 'entries'   // Posts go in here
        , 'pages' => ROOT . 'pages'       // Pages go in here
        , 'layout' => ROOT . 'layout'     // layout files (header.php, footer.php etc.)
        , 'build' => ROOT . 'public'      // output dir
    )
    , 'ignore' => array(
          ROOT . 'functions.php'
        , ROOT . 'markdown.php'
        , ROOT . 'build.php'
        , ROOT . '.git'
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
}

define('SITE_URL', $site_url);

$config['ignore'] = array_merge($config['ignore'], array_values($config['dirs']));
$entries = array();
$pages = array();
$title = 'Adrian Unger, Web Designer';


/**
 * ------------------------------------------------------------------------
 * Dependencies
 * ------------------------------------------------------------------------
 */
require 'functions.php';
require 'markdown.php';


/**
 * ------------------------------------------------------------------------
 * Begin build, by iterating Entries
 * ------------------------------------------------------------------------
 */
$entryIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($config['dirs']['entries']));

while ($entryIterator->valid())
{
    if ($entry = Parse::entry($entryIterator, $config))
    {
        if (substr($entry['category'], -1, 1) === 's') 
        {
            $layout = substr($entry['category'], 0, -1);
        }
        else 
        {
            $layout = $entry['category'];
        }

        $title = $entry['title'];

        // save entry for template data
        $entries['all'][$entry['date']] = $entry;
        $entries[$entry['category']][$entry['date']] = $entry;

        // save static file
        $layout = $config['dirs']['layout'] . DS . $layout . '.php';
        $out = render($layout);
        $new_dir = $config['dirs']['build'] . DS . $entry['category'] . DS . $entry['slug'];

        Parse::new_file($new_dir, $out);
    }
    else 
    {
        echo 'Invalid entry: ', $entryIterator->getBasename(), "\n";
    }

    $entryIterator->next();
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

        // leave index.php in root
        $new_dir = $config['dirs']['build'] . DS;
        
        if ($fileinfo->getBasename() !== 'index.php') 
        {
            $new_dir = $new_dir . str_replace('.php', '', $fileinfo->getBasename());
        }

        Parse::new_file($new_dir, $out);
    }
}


/**
 * ------------------------------------------------------------------------
 * Copy everything else (Assets, static files, etc.)
 * ------------------------------------------------------------------------
 */
$staticIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(ROOT));

while ($staticIterator->valid())
{
    if (!$staticIterator->isDot()
        && ! ignore($staticIterator->getPathname(), $config)
        && substr($staticIterator->getBasename(), '0', 1) !== '.') 
    {
        $new_file = $config['dirs']['build'] . DS . str_replace(ROOT, '', $staticIterator->getPathname());

        if (strstr($staticIterator->getBasename(), '.php')) 
        {
            $out = render($layout);
            Parse::new_file($new_file, $out, $staticIterator->getBasename());
        }
        else 
        {
            Parse::copy_file($staticIterator->getPathname(), $new_file, $staticIterator->getBasename());
        }
    }

    $staticIterator->next();
}