<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * #START: CONFIG
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$config = array(
    'date_re' => '/[\d]+-[\d]+-[\d]+-/',
    'content_file' => 'content.txt',
    'dirs' => array(
        'entries' => ROOT . 'entries', // Posts go in here
        'pages' => ROOT . 'pages', // Pages go in here
        'layout' => ROOT . 'layout', // layout files (header.php, footer.php etc.)
        'build' => ROOT . 'public' // output dir
    ),
    'ignore' => array(
        ROOT . 'parse.php',
        ROOT . 'markdown.php',
        ROOT . 'build.php',
        ROOT . '.git'
    ),
);
// #END: CONFIG

// check for all required arguments
// first argument is always name of script!
if ($argc === 2) {
    array_shift($argv);
    $config['dirs']['build'] = $argv[0];
}

$config['ignore'] = array_merge($config['ignore'], array_values($config['dirs']));

// dependz
require 'parse.php';
require 'markdown.php';

// content vars
$entries = array();
$pages = array();
$title = 'default';

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Iterate Entries
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$entryIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($config['dirs']['entries']));

while ($entryIterator->valid())
{
    if ($entry = Parse::entry($entryIterator, $config))
    {
        if (substr($entry['category'], -1, 1) === 's') {
            $layout = substr($entry['category'], 0, -1);
        }
        else {
            $layout = $entry['category'];
        }

        // save entry for template data
        $entries['all'][$entry['date']] = $entry;
        $entries[$entry['category']][$entry['date']] = $entry;

        // save static file
        $layout = $config['dirs']['layout'] . DS . $layout . '.php';

        ob_start();
        include $layout;
        $out = ob_get_contents();
        ob_end_clean();

        $new_dir = $config['dirs']['build'] . DS . $entry['category'] . DS . $entry['slug'];
        Parse::new_file($new_dir, $out);
    }
    else {
        echo 'Invalid entry: ', $entryIterator->getBasename(), "\n";
    }

    $entryIterator->next();
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Process Pages
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// sort entries for template data
foreach ($entries as $cat => $array) {
    krsort($entries[$cat]);
}

$dir = new DirectoryIterator($config['dirs']['pages']);

foreach ($dir as $fileinfo)
{
    if (!$fileinfo->isDot()
    && !in_array($fileinfo->getPathname(), $config['ignore'])
    && substr($fileinfo->getBasename(), '0', 1) !== '.') 
    {
        ob_start();
        include $fileinfo->getPathname();
        $out = ob_get_contents();
        ob_end_clean();

        // leave index.php in root
        $new_dir = $config['dirs']['build'] . DS;
        
        if ($fileinfo->getBasename() !== 'index.php') {
            $new_dir = $new_dir . str_replace('.php', '', $fileinfo->getBasename());
        }

        Parse::new_file($new_dir, $out);
    }
}

// Copy everything else
$staticIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(ROOT));

function ignore($path, $config) {
    foreach ($config['ignore'] as $ignore) {
        if (strpos($path, $ignore) !== false) 
            return true;
    }
}

while ($staticIterator->valid())
{
    if (!$staticIterator->isDot()
    && !ignore($staticIterator->getPathname(), $config)
    && substr($staticIterator->getBasename(), '0', 1) !== '.') 
    {
        $new_file = $config['dirs']['build'] . DS . str_replace(ROOT, '', $staticIterator->getPathname());

        if (strstr($staticIterator->getBasename(), '.php')) {
            ob_start();
            include $staticIterator->getPathname();
            $out = ob_get_contents();
            ob_end_clean();

            Parse::new_file($new_file, $out, $staticIterator->getBasename());
        }
        else {
            Parse::copy_file($staticIterator->getPathname(), $new_file, $staticIterator->getBasename());
        }


    }

    $staticIterator->next();
}