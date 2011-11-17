---
category: bits
layout: bit
---

<p class="big">WordPress 3 is out: And it makes developing feature rich, user maintainable websites possible with the just the core.</p>

WordPress is already known for its ease of development, deployment & maintainability. Well, maybe not always the last one due to unmaintained plugins. This is addressed in WordPress 3.0 by [adding](http://codex.wordpress.org/Version_3.0) to the expansive core. Anyway, here's an example of how to build a common blog feature with just core functions and some jQuery.

### Featured Image Slider

<div class="aside">Note: Featured Image—as it's called within the admin UI—is synonymous with Post Thumbnail—as it's called in the function references.</div>

What is it? It's a way of showcasing all of the posts with a [featured image](http://markjaquith.wordpress.com/2009/12/23/new-in-wordpress-2-9-post-thumbnail-images/) in a simple slider (or other jQuery animation). All we have to do, is add support for post thumbnails and display them within the loop, and jQuery will handle the animation.

### The WordPress Code

For a deeper explanation of post thumbnails, read [Mark Jaquith's Post](http://markjaquith.wordpress.com/2009/12/23/new-in-wordpress-2-9-post-thumbnail-images/). For now, here is the code to add support and define the sizes of our post thumbnails:

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 100, true ); // Normal thumb size
    add_image_size( 'featured-image', 900, 300, true ); // Slider size

I displayed the slider on the homepage only, but pick a theme file and add the following within the loop:

    <?php if (in_category('10') && has_post_thumbnail()) : // Category 10 is my 'Featured' category ?>
    <a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>" rel="bookmark">
        <?php the_post_thumbnail('featured-image'); // Make sure you call the image size you defined in functions.php ?>
    </a>
    <?php endif; ?>

### The jQuery Code

This is covered everywhere. You can use [jCarousel](http://sorgalla.com/projects/jcarousel/) or any other jQuery(or other framework) plugin. Otherwise, check out my live [implementation](http://highfivecamp.com) and feel free to view the source.