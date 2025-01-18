<?php

date_default_timezone_set('America/Vancouver');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);
define('SOURCE', ROOT . 'src' . DS);
define('PHOTOS', ROOT . 'src' . DS . 'photography' . DS);

if ($argc >= 2) {
  array_shift($argv);
  $dir = $argv[0]; 
} else {
  exit(1);
}

// image functions

function max_sizes($width, $height) {
  $maxwidth = 1008;
  $maxheight = 1008;
  $ratio = $width / $height;

  if ($maxwidth / $maxheight > $ratio) {
    $maxwidth = $maxheight * $ratio;
  } else {
    $maxheight = $maxwidth / $ratio;
  }

  return array($maxwidth, $maxheight);
}

function resize($imagepath) {
  $finfo = pathinfo($imagepath);
  $newpath = $finfo['dirname'] . DS . $finfo['filename'] . '.' . $finfo['extension'];

  set_time_limit(0); 

  $image = imagecreatefromjpeg($imagepath);
  $width = imagesx($image);
  $height = imagesy($image);

  list($maxwidth, $maxheight) = max_sizes($width, $height);

  $sharpen = array([0, -1, 0], [-1, 10, -1], [0, -1, 0]);
  $divisor = array_sum(array_map('array_sum', $sharpen));
  $offset = 0;
  imageconvolution($image, $sharpen, $divisor, $offset); 

  $resized = imagecreatetruecolor($maxwidth, $maxheight);
  imagecopyresampled($resized, $image, 0, 0, 0, 0, $maxwidth, $maxheight, $width, $height);

  imagejpeg($resized, $newpath, 84);
}

// iterate photos to resize in `src/`

$staticIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(SOURCE . $dir));

while ($staticIterator->valid()) {
  if (!$staticIterator->isDot() && substr($staticIterator->getBasename(), '0', 1) !== '.') {
    $ext = $staticIterator->getExtension();

    if ($ext === 'jpeg' || $ext === 'jpg') {
      resize($staticIterator->getPathname());
    }
  }
  $staticIterator->next();
}
