---
category: bits
layout: bit
title: jQuery Random Each() Function
---

<p class="big">Fading in elements incrementally in order of the dom tree is cool, but so is fading in elements in random order.</p>

The former is pretty simple, you iterate through each element while setting a timeout for fading in:

    $("div").each(function(i) {
        var e = $(this);
        e.fadeTo(0, 0.05);
        setTimeout(function(){
            e.fadeTo(250, 1);
        }, i*25);
    });

`i` is the index of each found element in order of the dom tree. As we get further down the tree the timeout is longer and longer—since the animation lasts longer than a couple timeouts the animations will overlap.

To make it random, we still follow the dom tree in order, but we set the timeouts at differentiating lengths(randomly). Say we have 10 elements total, we can assume the indices are `0,1,2,3,4,5,6,7,8,9`, We just need to sort those numbers randomly. Enter `randsort()`:


    function randsort(c) {
        var o = new Array();
        for (var i = 0; i < c; i++) {
            var n = Math.floor(Math.random()*c);
            if( jQuery.inArray(n, o) > 0 ) --i;
            else o.push(n);
        }
        return o;
    }

We pass the function the number of found elements and it loops through them creating new numbers(within the range of `c`). To avoid duplicated numbers we use jQuery's `inArray` and “skip” it if true. In the end, you have those indices in a random order. Moving along:

    var e = $('div') // The elements we're searching
    var c = e.size() // Total number of those elements
    var r = randsort(c) // an array of the element indices in random order

Now an ever so slight variance on that original each function:

    // the jQuery selector could be replaced with e
    $("div").each(function(i) {
        var e = $(this);
        e.fadeTo(0, 0.05);
        setTimeout(function(){
            e.fadeTo(250, 1);
        }, r[i]*10);
    });

So what's different? `r[i]*10`. We are using the `i` index to call the `r` array in order, but since the values are a random representation of the element indices the timeouts differentiate. Boom!

Check out a <a href="http://staydecent.nfshost.com/demos/js/randomeach.htm">demo here.</a>