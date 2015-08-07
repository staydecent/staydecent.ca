I've been using Facebook's React for most new UI components in recent months at Ecquire. And, only more recently, using Mithril.

They are both awesome for one very simple reason: No templates. Especially with how small I break out my UI components. I don't like having a file with 3 lines of HTML with Mustaches thrown in.

Both, Mithril and React, use Virtual DOMs to avoid the need for separate template files. Other than that, they really are not that similar.

Lately, I have been enjoying rigidness over flexibility in my coding. I have found it forces specific functionality over generalizing. Which I have found easier to test and maintain. Because of this, I am biased towards choosing Mithril instead of React.

React is quite flexible. It has about twice as many API methods as Mithril. This is necessary since React rather you not reference the DOM directly. Instead, you rely on Lifecycle Methods, which inform on the state of the DOM and when to perform operations at the *correct time*.

Mithril is not flexible. You render a Virtual DOM and you assign event handlers. Mithril offers a few nice methods for common patterns (HTTP Requests, Promises, Getter-Setters etc.).

If you were to migrate React components to Mithril, your main entry point for converting React's Lifecycle methods is the non-HTML-standard attribute called config: <em>"This special parameter allows you to call methods on the DOM element after it gets created."</em>

If you process data that should affect the UI/DOM you need to rely on Mithril's built-in helpers, or you will have to <a href="https://lhorie.github.io/mithril/mithril.computation.html" target="_blank">manually tell Mithril to compute changes</a>. Because Mithril does less to abstract away how it computes changes and renders a Virtual DOM you are forced to learn a bit more of the Mithril source and how it actually works.

Good thing the source is tiny. About 5kb gzipped. This is a stark contrast to React. The logic is really not that hard to follow, and stack traces (in my anecdotal experience) were tiny and easy to follow compared with monstrous and dense with React.

There are pros and cons to either. For me, debugging and maintenance are the worst part of programming and with Mithril I was able to reduce friction for both.