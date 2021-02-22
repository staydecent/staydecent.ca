<?php

date_default_timezone_set('America/Vancouver');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);
define('SOURCE', ROOT . 'src' . DS . 'photography' . DS);

// image functions

function max_sizes($width, $height) {
  $maxwidth = 1600;
  $maxheight = 1600;
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

  $resized = imagecreatetruecolor($maxwidth, $maxheight);
  imagecopyresampled($resized, $image, 0, 0, 0, 0, $maxwidth, $maxheight, $width, $height);
  imagejpeg($resized, $newpath);

  imagedestroy($resized);
  imageDestroy($image);
}

// iterate photos to resize in `src/`

$staticIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(SOURCE));

while ($staticIterator->valid()) {
  if (!$staticIterator->isDot() && substr($staticIterator->getBasename(), '0', 1) !== '.') {
    $ext = $staticIterator->getExtension();

    if ($ext === 'jpeg' || $ext === 'jpg') {
      resize($staticIterator->getPathname());
    }
  }
  $staticIterator->next();
}
