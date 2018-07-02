title: How To Keep API Calls Decoupled From React Components
---

Keeping API calls decoupled from React components keeps your views pure and without side-effects! This makes it easier to test your views without having to worry about API calls. Your API and views can be tested separately.

<div class="note">I no longer agree with any of this! It was a nice thought experiment but, it's downfall is that Components become less encapsulated. I'd advocate that if you want to test a Component without worrying about API data, then break the Component in two: 1. Getting API data, and the child 2. Rendering some data. July 2, 2018</div>

## Some Assumptions

Before I dive any deeper, here are some assumptions: You are using React to render your views (HTML). You are using Redux, or something similar to handle state. Myself, I actually use Preact and Atom instead of React and Redux -- They are both smaller and their source codes are easier (for me) to understand, which I favour. That said, the APIs are basically the same. And, I'm also assuming you rely heavily on Redux/Atom and not on React's `setState` method.

## Moving Request Logic Outside Of Your Views

If you're coming from MVC, then you know your views should be simple and without complex logic. Instead, you would use the Controller to load remote data and do any normalization. But where is the Controller when using React and Redux? There isn't *really* a controller, but that logic can be moved into *subscribers*.

### What's a 'subscriber'?

With Redux (or Atom), your store reference has a `subscribe` method. See [Redux docs](http://redux.js.org/docs/api/Store.html#subscribe) and [Atom](https://github.com/staydecent/atom#subscribelistener). I lack any experience with MobX, but it looks like you can get a similar result with just an Observable or a Spy, [see doc](https://mobx.js.org/refguide/spy.html) (Anyone with more experience, please chime in!). *This* is where we can write our Controller-*esque* logic.

## A Blog Example

So, let's say you have a blog page, and it loads a Parent or Page Component like `<BlogPage ... />`, and you need to load some featured posts. Usually, this is where I would add a `componentDidMount` call to `BlogPage` and make an API request for some featured posts. But, like I said, this couples request logic with the view, which we don't want to do.

Thankfully, we [store the current URL](https://github.com/inputlogic/with-preact/blob/master/app/components/elements/link/actions.js) in our Atom store. If you don't, then you should!

Now, `subscribe` is fired when any part of your state tree has changed. And, it does not tell you which part changed! So, we can use the following utility function to watch a specific path on our state tree and only invoke our callback if the value at that path has changed. (*Note: the next version of Atom will include this `watchStore` type API*)

```javascript
import check from 'check-arg-types'
import pathOr from 'ramda/src/pathOr'
import merge from 'ramda/src/merge'

import {subscribe, getState} from './store' // this is your local store file

const toType = check.prototype.toType

// Cache previous value for given path to allow easy diffing in the listener.
const cache = {}

// Small wrapper around adding a subscriber to your store, that only calls the
// given cb if the value at the given path has changed since the last time
// the cb was invoked.
export default function watchStore (path, cb) {
  const key = path.join(',')
  const getPathVal = pathOr(undefined, path)
  const diff = () => {
    const newVal = getPathVal(getState())
    if (newVal === undefined) {
      return
    }
    const oldVal = cache[key]
    if (oldVal === undefined || oldVal !== newVal) {
      if (toType(newVal) === 'object') {
        cache[key] = merge({}, newVal)
      } else {
        cache[key] = newVal
      }
      cb(newVal, oldVal)
    }
  }

  // Let's invoke diff right away as we may want to react to
  // our initialState set in our store.
  diff()
  subscribe(diff)
}
```

Ok, now we have the helpful wrapper around our store's `subscribe` method. It let's us target a specific path on our state tree, and only invoke our given callback function when the value at that path actually changes.

Again, with the assumption that we keep the current URL up-to-date in our state tree, we can subscribe to changes like so:

```javascript
watchStore(['url'], function loadData (url) {
  switch (url) {
    case '/blog':
      // Load blog posts from our API
      loadBlogPosts().then(...)
      break
  }
})
```

I'm not going to cover the actual API request here. But, let's assume we get some array back from the API server and we're ready to store that in our state tree, we can fill in that `loadBlogPosts` promise callback with something like:

```javascript
import {set} from 'atom-lens-reducer'
...
loadBlogPosts.then((posts) => dispatch(set('blogPosts', posts)))
```

Now when we update our state tree (and we already have a component connected to our Redux/Atom store) then we can pass that `blogPosts` value down to our `<BlogPage posts={props.blogPosts} />` Component!

## Another Example

Maybe your app as an API-backed autocomplete/type-ahead input field. You want to load and present results *as the user types*. Well, first you need to make sure you are storing your form values in your state tree. At this point, let's assume you are already syncing the input value of your autocomplete form in your Redux/Atom store.

```javascript
<Form name='globalSearch'>
  <MySyncedInput
    name='input'
    ...
  />
</Form>
```

And this input field is synced to your state tree as:

```javascript
{
  forms: {
    globalSearch: {
      input: '<User Input Here!>'
    }
  }
}
```

Then all we have to do is use that `watchStore` utility above to listen for when this input value changes and perform our API logic then:

```javascript
watchStore(['forms', 'globalSearch', 'input'], (input) => {
  // only perform request if input is 3 or more characters
  if (input && input.length > 2) {
    // Make API request
  }
  // You could also debounce or throttle this call to reduce hits on your API
})
```

No we don't have any of that logic in our hypothetical `<GlobalSearchForm />` Component! It's just a simple function that accepts props and returns HTML! This should help with complexity by keeping your view (Components) simple, and your *"Controller"* logic separate. This makes writing tests much easier as you don't have to mock or intercept the API calls. Instead, you can directly pass in mocked API response data as props on a given Component.

This is part of an evolving pattern of how I write React applications. I aim to write a document about the organization and libraries used. But, I felt this pattern (of keeping API calls separate from Components) was worthy of a more in-depth explanation -- I hope it helps reduce complexity in your React apps!
