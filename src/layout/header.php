<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adrian Unger">
    <meta name="description" content="Adrian Unger is the CTO of Ecquire. He lives in Canada, but prefers México. He also loves farming/gardening.">

    <title><?php 
        if (stristr($title, 'adrian'))
            echo $title;
        else
            echo $title.' &middot; Adrian Unger';
    ?></title>

    <link rel="stylesheet" href="<?php echo SITE_URL ?>assets/css/bootstrap.css">
</head>
<body>
