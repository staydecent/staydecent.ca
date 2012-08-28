title: Browser Testing as a Chrome Extension
---

<p class="big">Running Jasmine tests against a webpage? Forget headless-browser testing. Why not inject your tests right into the actual web page?</p>

At [Ecquire](//ecquire.com), we integrate with a bunch of services to move your data where it needs to be. Testing our code, to assert that we can properly identify data from different websites (Gmail, LinkedIn, Twitter, Facebook etc.), is something we'd like to do easily and frequently.

I spent a day researching (re: playing) with different JavaScript testing libraries and Headless Browsers. I ended up trying [Zombie.js](zombie.labnotes.org) and [Casper.js](casperjs.org) (ontop of [Phantom.js](phantomjs.org)). I found Zombie to be the most pleasant, mainly because of it's documentation&mdash;it's organized as a linear storyline of a zombie attack! 

Sigh, but headless browsers were a dead-end, as our code needs to run on pages only accesible after logging in (I found captcha's hard to automate against) and JavaScript wasn't being executed as expected. 

**Duh!**

*Ecquire is a chrome extension*. Webkit based headless-browsers would render *close* at best. Oh, right. And we already have a Jasmine Test suite in a Chrome Extension (though, those ones didn't inject themselves into the active tab).

## Cool, let's inject some tests!

The following will assume you are familiar with [Jasmine](http://pivotal.github.com/jasmine/) and JavaScript in general. If anything is unclear, let me know, and I'll try to clarify.

The biggest barrier for this to work, was the <em title="the output of our test results">reporting</em>. I didn't want to spend much more time on this, so I did some [DDGing](//duckduckgo.com) and found this awesome [Console Reporter](https://github.com/larrymyers/jasmine-reporters).

<div class="note">Note: turns out Jasmine comes with its own Console Reporter inspired by Larry Myers. I prefer Larry's output style, so I stuck with it.</div>

Great. The unfamiliar territory is taken care of. Now, to write the Chrome Extension code that actually runs the Jasmine specs inside an active tab, outputting the test results to console!

### The Chrome Extension

I wrote a boilerplate Chrome Extension, for [Browser Testing with Jasmine](https://github.com/staydecent/jasmine-chrome-extension). Here's an explanation of what it does:

#### 1. Whitelist some domains, where we want our tests to run. For Ecquire, that meant mail.google.com, twitter.com, etc.
Google is cracking down on security when it comes the Chrome Web Store. Which means we have to whitelist *everything* in our <dfn title="Every chrome extension needs one, it declares unique attributes about the app or extension.">manifest.json</dfn> file. Since our test extension won't be public-facing, we can be overly zealous in our whitelisting:

    "permissions": [
        "https://*/",
        "http://*/",
        "tabs"
    ],

#### 2. Declare some [content scripts](https://code.google.com/chrome/extensions/content_scripts.html) that will be executed within active tabs on those domains.
In *manifest.json* again:

    "content_scripts" : [
        {
            "matches" : [
                // Again, overly zealous in our whitelisting ;)
                "http://*/*",
                "https://*/*"
            ],
            "js" : [
                // The JS libraries we want available in an active tab
                "jasmine/lib/jasmine.js",
                "jasmine/lib/jasmine.console_reporter.js",
                "plugins/jquery-1.7.2.min.js",
                "myapp/some_dir/code_that_needs_testing.js"
            ],
            "run_at" : "document_idle",
            "all_frames" : false
        }
    ],

#### 3. Check if we're on a good domain, to show our [page action](http://code.google.com/chrome/extensions/pageAction.html) button
First up, we'll need to declare a script file to run in the background, in *manifest.json*:

    "background": {
        "scripts": ["background.js"]
    },

In *background.js* we'll listen for any changes to the URL of any tab.

    chrome.tabs.onUpdated.addListener(function(tabId, changeInfo, tab) {
        if (tab.url.indexOf('google') > -1) {
            // ... show the page action.
            chrome.pageAction.show(tabId);
        }
    });

#### 4. When are page action is clicked, run some Jasmine specs! 
We'll also need an event listener for when the page action is clicked. Check out the full [background.js](https://github.com/staydecent/jasmine-chrome-extension/blob/master/background.js) file to see that (it's the same idea as jQuery click events). When clicked, we'll inject our Jasmine specs and run them via Chrome's Extension APIs:

    // load our spec file
    chrome.tabs.executeScript(tab.id, { file: 'my_spec_file.js' }, function() {
        // once loaded, run jasmine
        chrome.tabs.executeScript(thisTab.id, { file: 'path_to/JasmineSpecRunner.js' });
    });

*That's it!*

With this, you can now test your JavaScript against *real* webpages, and actually see the output. It's not as automated as using headless browsers, but it's pretty much 1-click. And, I'm guessing the same idea can be brought to Safari and FireFox extensions.

Though the use-case for this is pretty specific to Ecquire, I thought it was pretty neat&mdash;and worth sharing. Would love to hear any reactions or thoughts on this!
