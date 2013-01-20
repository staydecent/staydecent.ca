<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adrian Unger">
    <meta name="description" content="Adrian Unger is a web developer living out of a trailer in beautiful Vancouver, BC. He writes about design, nature, technology, etc.">

    <title><?php 
        if (stristr($title, 'adrian'))
            echo $title;
        else
            echo $title.' &middot; Adrian Unger';
    ?></title>

    <link rel="stylesheet" href="<?php echo SITE_URL ?>assets/css/bootstrap.css">    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo SITE_URL ?>assets/js/respond.min.js"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-4203135-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>
<body>

<header id="head"><div class="container-fluid">
    <div id="intro">
        <a href="<?php echo SITE_URL ?>" rel="home" alt="Home"><img src="<?php echo SITE_URL ?>/favicon.ico" alt="Trees are pretty great."></a>
        <p>
            Hey, I&rsquo;m <a href="<?php echo SITE_URL ?>/about" rel="home">Adrian</a>. I build <a href="//ecquire.com" target="_blank">Ecquire</a> and love <a href="http://vivaoaxaca2013.wordpress.com" target="_blank">Mexico</a>. <br>Why not <a href="mailto:hello&#64;staydecent.ca">say hello!</a>
        </p>
    </div>
</div></header>
