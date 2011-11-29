<?php 

/**
* Parse Frontmatter and Markdown!
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
                $entry['url'] = SITE_URL . DS . $entry['category'] . DS . $entry['slug'];
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