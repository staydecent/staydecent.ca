<?php if ( ! defined('SITE_URL')) exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------------
 * Utility and helper functions
 * ------------------------------------------------------------------------
 */

function get_entries($cat, $desc = TRUE)
{
    // exposes title, date, slug, url for entries
    global $config;

    $files = scandir($config['dirs']['entries'].DS.$cat);
    $entries = array();

    foreach ($files as $filename) 
    {
        if ( ! preg_match($config['date_re'], $filename, $date_match)) 
        {
            unset($files[array_search($filename, $files)]);
            continue;
        }

        $date = strtotime(substr($date_match[0], 0, -1));

        $entries[$date]['slug']  = preg_replace($config['date_re'], '', $filename);
        $entries[$date]['title'] = ucwords(str_replace('-', ' ', $entries[$date]['slug']));
        $entries[$date]['url']   = SITE_URL . $cat . DS . $entries[$date]['slug'];
    }

    if ($desc) krsort($entries);
    return $entries;
}

function next_entry($entry)
{
    $entries = get_entries('articles') + get_entries('bits');
    ksort($entries);

    $current = $entry['date'];
    $keys = array_keys($entries);
    $ordinal = (array_search($current, $keys)-1) % count($keys);

    if (array_key_exists($ordinal, $keys))
    {
        $next = $keys[$ordinal];
        return $entries[$next];
    }

    return FALSE;
}

function get_title($filename)
{
    if (stristr($filename, 'index'))
    {
        return 'Adrian Unger &middot; Design, nature, technology, etc.';
    }

    return ucwords(substr($filename, 0, -4));
}

function current_class($str)
{
    global $title;
    echo (stripos($title, $str) !== FALSE) ? ' class="current"' : ''; 
}

function render($layout)
{
    global $title, $entry, $entries, $config;
    ob_start();
    include $layout;
    $out = ob_get_contents();
    ob_end_clean();

    return $out;
}

function ignore($path, $config) 
{
    foreach ($config['ignore'] as $ignore) 
    {
        if (strpos($path, $ignore) !== false) 
        {
            return TRUE;
        }
    }

    return FALSE;
}

function plural( $num ) 
{
    /*
    Returns "s" unless $num is "1"
    Used by `relative_date`.
    */
    if ($num != 1)
        return "s";
}

function get_relative_date( $date ) 
{
    /*
    Returns relative(more human) date string.
    Uses: `plural`.

    Usage:
    `get_relative_date(get_the_date())`
    */
    $diff = time() - strtotime($date);
    if ($diff < 60)
        return $diff." second".plural($diff)." ago";

    $diff = round($diff / 60);

    if ($diff < 60)
        return $diff." minute".plural($diff)." ago";

    $diff = round($diff / 60);

    if ($diff < 24)
        return $diff." hour".plural($diff)." ago";

    $diff = round($diff / 24);

    if ($diff == 1)
        return "Today";
    if ($diff < 7)
        return $diff." day".plural($diff)." ago";

    $diff = round($diff / 7);

    if ($diff < 4)
        return $diff." week".plural($diff)." ago";

    return date("F j, Y", strtotime($date));
}

/**
 * ------------------------------------------------------------------------
 * Parse FrontMatter and Markdown
 * ------------------------------------------------------------------------
 */
class Parse {

    /**
    * Taken from Rasmus Andersson's Gitblog:
    * https://github.com/rsms/gitblog/blob/master/gitblog.php#L1958
    *
    * @param string
    * @return int
    */
    public static function findHeaderTerminatorOffset($data) 
    {
        if (($offset = strpos($data, "---\n\n")) !== false)
            return $offset+5;
        if (($offset = strpos($data, "---\r\n\r\n")) !== false)
            return $offset+7;
        return false;
    }

    /**
    * Taken from Rasmus Andersson's Gitblog:
    * https://github.com/rsms/gitblog/blob/master/gitblog.php#L1958
    *
    * @param string
    * @return int
    */
    public static function findExcerpt($data) 
    {
        if (($offset = strpos($data, "\n\n")) !== false){
            $out = explode("\n\n", $data);
            return $out[0];
        }

        if (($offset = strpos($data, "\r\n\r\n")) !== false)
        {
            $out = explode("\r\n\r\n", $data);
            return $out[0];
        }

        return false;
    }

    /**
    * Taken from Rasmus Andersson's Gitblog:
    * https://github.com/rsms/gitblog/blob/master/gitblog.php#L1974
    *
    * @param string
    * @return array
    */
    public static function contents($contents)
    {
        $ret = array();
        # find header terminator
        $bodystart = self::findHeaderTerminatorOffset($contents);

        // get the body content
        if ($bodystart === false) {
            $bodystart = 0;
            $ret['body'] = markdown(substr($contents, $bodystart));
            $ret['excerpt'] = self::findExcerpt(strip_tags($ret['body']));
            // \Log::debug('Missing front matter and/or body.');
        }
        else {
            $ret['body'] = markdown(substr($contents, $bodystart));
            $ret['excerpt'] = self::findExcerpt(strip_tags($ret['body']));
        }

        // get the frontMatter 
        if ($bodystart !== false && $bodystart > 0) {
            $frontmatter = self::frontMatter(rtrim(substr($contents, 0, $bodystart)));
            $ret = array_merge($ret, $frontmatter);
        }

        return $ret;
    }

    /**
    * Taken from Rasmus Andersson's Gitblog:
    * https://github.com/rsms/gitblog/blob/master/gitblog.php#L1990
    */
    public static function frontMatter($lines) 
    {
        $lines = explode("\n", $lines);
        $k = null;
        $ret = array();

        foreach ($lines as $line) {
            if (!$line)
                continue;

            if ($line{0} === ' ' || $line{0} === "\t") {
                # line continuation
                if ($k !== null) {
                    // var_dump($k);die();   
                    $ret[$k] .= ltrim($line);
                }

                continue;
            }

            $line = explode(':', $line, 2);

            if (isset($line[1])) {
                $k = $line[0];
                $ret[strtolower($k)] = ltrim($line[1]);
            }
        }

        return $ret;
    }

    /**
    * Iterate dir
    */
    public static function entry($entryIterator, $config)
    {
        // return $entry array
        $entry = array();

        if (!$entryIterator->isDot()
        && $entryIterator->getBasename() === $config['content_file']
        && !in_array($entryIterator, $config['ignore'])
        && substr($entryIterator->getBasename(), '0', 1) !== '.')
        {
            $path_parts = explode(DS, $entryIterator->getPath());
            $path_count = count($path_parts);

            $entry['parent'] = $path_parts[$path_count-1];
            $entry['category'] = $path_parts[$path_count-2];

            if ($entry['category'] === 'drafts') 
            {
                return FALSE;
            }

            // make sure parent follow date-slug dir naming
            if (!preg_match($config['date_re'], $entry['parent'], $date_match))
            {
                return false;
            }

            $entry_contents = Parse::contents(file_get_contents($entryIterator->getPathname()));
            $entry = array_merge($entry, $entry_contents);

            // ensure slug
            if (!isset($entry['slug']))
                $entry['slug'] = preg_replace($config['date_re'], '', $entry['parent']);
            // ensure title
            if (!isset($entry['title']))
                $entry['title'] = ucwords(str_replace('-', ' ', $entry['slug']));
            // ensure date
            if (!isset($entry['date'])) {
                $entry['date'] = strtotime(substr($date_match[0], 0, -1));
            }
            // ensure url
            if (!isset($entry['url'])) {
                $entry['url'] = SITE_URL . $entry['category'] . DS . $entry['slug'];
            }
        }
        else {
            return false;
        }

        return $entry;
    }

    public static function new_file($new_dir, $out, $filename = false)
    {
        if (!$filename) {
            $new_file = $new_dir . DS . 'index.html';
            if (!is_dir($new_dir)) {
                mkdir($new_dir, 0777, true);
            }
        }
        else {
            $new_file = $new_dir;
        }

        @$fh = fopen($new_file, 'w');
        if ($fh) {
            fwrite($fh, $out);
            fclose($fh);

            printf("Build: \"%s\"\n", str_replace(ROOT, '', $new_file));
        }
        else {
            printf("Could not open file (check permissions): \"%s\"\n", $new_file);
        }
    }

    public static function copy_file($source, $dest, $filename)
    {
        $dir = str_replace($filename, '', $dest);

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        if (!copy($source, $dest)) {
            printf("Could not copy file: \"%s\"\n", $source);
        }
    }
}