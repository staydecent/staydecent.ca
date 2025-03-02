<?php if ( ! defined('SITE_URL')) exit('No direct script access allowed');

$CACHE = array();

/**
 * ------------------------------------------------------------------------
 * Utility and helper functions
 * ------------------------------------------------------------------------
 */

function all_entries($desc = TRUE) {
  global $CACHE;
  if (array_key_exists('all_entries', $CACHE)) {
    $entries = $CACHE['all_entries'];
  }
  else {
    $entries = array();
    $cats = get_cats();

    foreach ($cats as $cat) {
      if ($cat !== 'drafts') {
        $entries = $entries + get_entries($cat);
      }
    }
  }

  if ($desc) {
    krsort($entries);
  }

  return $entries;
}

function get_entries($cat, $desc = TRUE) {
  // exposes title, date, slug, url for entries
  global $config;

  $files = scandir($config['dirs']['entries'].DS.$cat);
  $entries = array();

  foreach ($files as $filename) {
    if ( ! preg_match($config['date_re'], $filename, $date_match)) {
      unset($files[array_search($filename, $files)]);
      continue;
    }

    $date = strtotime(substr($date_match[0], 0, -1));

    $entries[$date]['slug']  = preg_replace($config['date_re'], '', $filename);
    $entries[$date]['title'] = ucwords(str_replace('-', ' ', $entries[$date]['slug']));
    $entries[$date]['url']   = SITE_URL . $cat . DS . $entries[$date]['slug'];

    $content_file = $config['dirs']['entries'].DS.$cat.DS.$filename.DS. $config['content_file'];
    $parsed = Parse::contents(file_get_contents($content_file));

    if (array_key_exists('excerpt', $parsed))
      $entries[$date]['excerpt'] = $parsed['excerpt'];

    if (array_key_exists('body', $parsed))
      $entries[$date]['body'] = $parsed['body'];

    if (array_key_exists('title', $parsed))
      $entries[$date]['title'] = $parsed['title'];
  }

  if ($desc) krsort($entries);

  return $entries;
}

function next_entry($entry) {
  if (isset($entry['category'])) {
    $entries = get_entries($entry['category']);
  } else {
    $entries = all_entries();
  }
  $current = $entry['date'];
  $keys = array_keys($entries);
  $ordinal = (array_search($current, $keys)+1) % count($keys);

  if ($ordinal === 0) {
    return FALSE;
  }

  if (array_key_exists($ordinal, $keys)) {
    $next = $keys[$ordinal];
    return $entries[$next];
  }

  return FALSE;
}

function entry_image($entry) {
  if (! array_key_exists('image', $entry)) {
    return '';
  }
  $url = SITE_URL . 'assets/media/' . $entry['image'];
  $alt = (array_key_exists('image_alt', $entry)) ? $entry['image_alt'] : $entry['title'];
  return "<img src='{$url}' alt='{$alt}' title='{$alt}'>";
}

function get_cats() {
  global $config;

  $cats = array();
  $path = $config['dirs']['entries'];

  foreach (new DirectoryIterator($path) as $file) {
    if ($file->isDot()) continue;

    if ($file->isDir()) {
      array_push($cats, $file->getFilename());
    }
  }

  return $cats;
}

function get_title($filename) {
  if (stristr($filename, 'index')) {
    return 'Adrian Unger &middot; Design, nature, technology, etc.';
  }

  return ucwords(substr($filename, 0, -4));
}

function current_class($str) {
  global $title;
  echo (stripos($title, $str) !== FALSE) ? ' class="current"' : ' data-title="' . $title . '"'; 
}

function render($layout) {
  global $title, $entry, $entries, $config, $page_id, $mod_date, $git_hash;
  ob_start();
  include $layout;
  $out = ob_get_contents();
  ob_end_clean();

  return $out;
}

function ignore($path, $config)  {
  foreach ($config['ignore'] as $ignore) {
    if (strpos($path, $ignore) !== false) {
      return TRUE;
    }
  }

  return FALSE;
}

/**
 * Returns "s" unless $num is "1". Used by `relative_date`.]
 */
function plural($num)  {
  if ($num != 1) return "s";
}

/**
 * Returns relative(more human) date string.
 */
function get_relative_date($date) {
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
  public static function findHeaderTerminatorOffset($data) {
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
  public static function findExcerpt($data, $return_data = false) {
    if (($offset = strpos($data, "\n")) !== false) {
      $out = explode("\n", $data);
      return $out[0];
    }

    if (($offset = strpos($data, "\r\n\r\n")) !== false) {
      $out = explode("\r\n\r\n", $data);
      return $out[0];
    }

    return ($return_data) ? $data : false;
  }

  /**
   * Taken from Rasmus Andersson's Gitblog:
   * https://github.com/rsms/gitblog/blob/master/gitblog.php#L1974
   *
   * @param string
   * @return array
   */
  public static function contents($contents) {
    $ret = array();

    # find header terminator
    $bodystart = self::findHeaderTerminatorOffset($contents);
    if ($bodystart === false) {
      $bodystart = 0;
    }

    // get the body content
    $ret['body'] = self::getBody(substr($contents, $bodystart));

    // Get excerpt from body
    $ret['excerpt'] = self::findExcerpt(strip_tags($ret['body']), true);

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
  public static function frontMatter($lines) {
    $lines = explode("\n", $lines);
    $k = null;
    $ret = array();

    foreach ($lines as $line) {
      if (!$line)
        continue;

      if ($line[0] === ' ' || $line[0] === "\t") {
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
  public static function entry($entryIterator, $config) {
    // return $entry array
    $entry = array();

    if (!$entryIterator->isDot()
    && $entryIterator->getBasename() === $config['content_file']
    && !in_array($entryIterator, $config['ignore'])
    && substr($entryIterator->getBasename(), '0', 1) !== '.') {
      $path_parts = explode(DS, $entryIterator->getPath());
      $path_count = count($path_parts);

      $entry['parent'] = $path_parts[$path_count-1];
      $entry['category'] = $path_parts[$path_count-2];

      if ($entry['category'] === 'drafts') {
        return FALSE;
      }

      // make sure parent follow date-slug dir naming
      if (!preg_match($config['date_re'], $entry['parent'], $date_match)) {
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

  public static function new_file($new_dir, $out, $filename = false) {
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

  public static function copy_file($source, $dest, $filename) {
    $dir = str_replace($filename, '', $dest);

    if (!is_dir($dir)) {
      mkdir($dir, 0777, true);
    }

    if (!copy($source, $dest)) {
      printf("Could not copy file: \"%s\"\n", $source);
    }
  }

  public static function getBody($content) {
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', Parsedown::instance()->text($content));
  }
}


/**
 * Image optimizations.
 */

function max_sizes($width, $height) {
  $maxwidth = 860;
  $maxheight = 860;
  $ratio = $width / $height;

  if ($maxwidth / $maxheight > $ratio) {
    $maxwidth = $maxheight * $ratio;
  } else {
    $maxheight = $maxwidth / $ratio;
  }

  return array(round($maxwidth), round($maxheight));
}

function optimize_photo($imagepath) {
  if (!strstr($imagepath, 'photography')) {
    return 'bad file path';
  }

  $finfo = pathinfo($imagepath);
  $filename = str_replace('_dithered', '', $finfo['filename']);
  $newpath = $finfo['dirname'] . DS . $filename . '_dithered.' . $finfo['extension'];
  
  if (file_exists($newpath)) {
    return 'already dithered';
  }

  set_time_limit(0); 

  // Load image resource from filepath
  $image = imagecreatefromjpeg($imagepath);
  imageTrueColorToPalette($image, true, 255);
  $width = imagesx($image);
  $height = imagesy($image);

  // Get new dimensions
  list($maxwidth, $maxheight) = max_sizes($width, $height); 

  // Create a new true color image
  $newimage = imagecreatetruecolor($maxwidth, $maxheight);

  // Dithering and resize
  imagecopyresampled($newimage, $image, 0, 0, 0, 0, $maxwidth, $maxheight, $width, $height);
  // imagetruecolortopalette($newimage, true, 4);

  // Save the image
  imagejpeg($newimage, $newpath, 84);

  // Clean up resources
  imagedestroy($newimage);
  imagedestroy($image);

  return $newpath;
}

/*
Copyright 2007-2008 Brenton Fletcher. http://bloople.net/num2text
You can use this freely and modify it however you want.
*/
function convertNumber($num) {
  @list($num, $dec) = explode(".", $num);

  $output = "";

  if ($num[0] == "-") {
    $output = "negative ";
    $num = ltrim($num, "-");
  }
  else if ($num[0] == "+") {
    $output = "positive ";
    $num = ltrim($num, "+");
  }

  if ($num[0] == "0") {
    $output .= "zero";
  }
  else {
    $num = str_pad($num, 36, "0", STR_PAD_LEFT);
    $group = rtrim(chunk_split($num, 3, " "), " ");
    $groups = explode(" ", $group);

    $groups2 = array();
    foreach ($groups as $g) 
      $groups2[] = convertThreeDigit($g[0], $g[1], $g[2]);

    for ($z = 0; $z < count($groups2); $z++) {
      if ($groups2[$z] != "") {
        $output .= $groups2[$z].convertGroup(11 - $z).($z < 11 && !array_search('', array_slice($groups2, $z + 1, -1))
          && $groups2[11] != '' && $groups[11][0] == '0' ? " and " : ", ");
      }
    }

    $output = rtrim($output, ", ");
  }

  if ($dec > 0) {
    $output .= " point";
    for($i = 0; $i < strlen($dec); $i++) $output .= " ".convertDigit($dec[$i]);
  }

  return $output;
}

function convertGroup($index) {
  switch ($index) {
    case 11: return " decillion";
    case 10: return " nonillion";
    case 9: return " octillion";
    case 8: return " septillion";
    case 7: return " sextillion";
    case 6: return " quintrillion";
    case 5: return " quadrillion";
    case 4: return " trillion";
    case 3: return " billion";
    case 2: return " million";
    case 1: return " thousand";
    case 0: return "";
  }
}

function convertThreeDigit($dig1, $dig2, $dig3) {
  $output = "";

  if ($dig1 == "0" && $dig2 == "0" && $dig3 == "0") return "";

  if ($dig1 != "0") {
    $output .= convertDigit($dig1)." hundred";
    if ($dig2 != "0" || $dig3 != "0") $output .= " and ";
  }

  if ($dig2 != "0") $output .= convertTwoDigit($dig2, $dig3);
  else if ($dig3 != "0") $output .= convertDigit($dig3);

  return $output;
}

function convertTwoDigit($dig1, $dig2) {
  if ($dig2 == "0") {
    switch ($dig1) {
      case "1": return "ten";
      case "2": return "twenty";
      case "3": return "thirty";
      case "4": return "forty";
      case "5": return "fifty";
      case "6": return "sixty";
      case "7": return "seventy";
      case "8": return "eighty";
      case "9": return "ninety";
    }
  }
  else if ($dig1 == "1") {
    switch ($dig2) {
      case "1": return "eleven";
      case "2": return "twelve";
      case "3": return "thirteen";
      case "4": return "fourteen";
      case "5": return "fifteen";
      case "6": return "sixteen";
      case "7": return "seventeen";
      case "8": return "eighteen";
      case "9": return "nineteen";
    }
  }
  else {
    $temp = convertDigit($dig2);
    switch ($dig1) {
      case "2": return "twenty-$temp";
      case "3": return "thirty-$temp";
      case "4": return "forty-$temp";
      case "5": return "fifty-$temp";
      case "6": return "sixty-$temp";
      case "7": return "seventy-$temp";
      case "8": return "eighty-$temp";
      case "9": return "ninety-$temp";
    }
  }
}

function convertDigit($digit) {
  switch ($digit) {
    case "0": return "zero";
    case "1": return "one";
    case "2": return "two";
    case "3": return "three";
    case "4": return "four";
    case "5": return "five";
    case "6": return "six";
    case "7": return "seven";
    case "8": return "eight";
    case "9": return "nine";
  }
}
