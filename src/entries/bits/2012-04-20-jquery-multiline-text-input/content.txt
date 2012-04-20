title: jQuery Multiline Text Input
---

<p class="big">A jQuery plugin that replaces a textarea with multiple text inputs, automatically appending a new input when the last is filled with content.</p>

I created this plugin as part of a provisionary coding task for an unnamed startup. The idea is to simplify server-side processing while having more control of the user input&mdash;And, hopefully, a better experience for the user. 

![Screenshot of a similar implementation by Google](http://i.imgur.com/ZBxbt.png "Inspired by Google Profiles")

## The Concept

Instead of asking a user to enter each item (Ex. Places lived) on a new line or comma separating them within a textarea, each item is entered in an individual text input. But, we want to allow an indefinite amount of items and asking the user to click a button (to add another input) would be annoying. So, the plugin intelligently appends an empty text input as soon as the user starts typing the last input.

*But, how do you know how many inputs need to be processed on the server-side?*

Good question! This is handled by the plugin on the client-side; the plugin combines all of the single line inputs back into a single textarea, with each item on a newline, before submitting the data.

## Demonstration

Select the "Result" tab in the below JSFiddle frame to test-drive a basic example.

<iframe style="width: 100%; height: 380px" src="http://jsfiddle.net/dQSNP/5/embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

## Usage

`$('textarea.multiline').multilineText();`

Check out the [GitHub Repo](https://github.com/staydecent/jQuery-MultilineText) for more information and to grab the code.