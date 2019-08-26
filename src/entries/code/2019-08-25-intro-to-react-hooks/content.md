title: Migrating to React Hooks
---

If you haven't heard, React has [introduced](https://reactjs.org/docs/hooks-intro.html) Hooks as an alternative to writing Components without the JavaScript `class` syntax. This is wonderful, as I find the `class` syntax confusing, and I'm happy to recommend foregoing it entirely!

I eventually [got past](https://github.com/staydecent/classless-component) abstracting away the `class` syntax, but I never felt great about it. Moreover, Hooks are quite powerful, readable, and an easy way to break away shared functionality.

## `class` is Confusing

I don't want to get too far into this (since we can just leave `class` behind now!) so I'll try to be brief. JavaScript is, of course, a language with [prototypal inheritance](https://medium.com/javascript-scene/common-misconceptions-about-inheritance-in-javascript-d5d9bab29b0a). This is different than classical inheritance. `class` is syntactical sugar that abstracts the protypal inheritance, making it appear more familiar to those coming from languages with classical inheritance, but does not actually introduce a classical object-oriented inheritance model.

I don't recall the precise history, but React and Babel go hand-in-hand, and one of those communities was ready to push `class`. This meant Babel introduced the class syntax before most (any?) browsers had native support. Abtracted code can [have surprises](http://staydecent.ca/code/difference-between-static-and-bound-methods/), and the [React devs don't recommend](https://reactjs.org/docs/composition-vs-inheritance.html#so-what-about-inheritance) using inheritance anyway! So, `class` is syntactic sugar to make prototypal inheritence feel more familiar for devs coming from classical inheritance, React adopted the syntax rather early, yet doesn't recommend actually taking advantage of inheritance! Seeing `class` in a codebase where you wish to avoid inheritance definitely feels confusing. Ok, enough `class` bashing. 

## Getting to Know Hooks

The React team did a fantastic job with the [Hooks documentation](https://reactjs.org/docs/hooks-intro.html). Make sure you read that. The goal for the rest of the post is to provide quick comparisons of how you (generally) used to solve certain problems with class based Components, and how you might approach the same problems with Hooks.

## From `class` based Components to Functional Components with Hooks

To rid yourself of the lie that is class, you'll need to know how to write functional React Components and how to utilize Hooks. Previously, you may have had *dumb* and *smart* components. *Dumb* just meant a function that returned JSX without any coupled lifecycle and state logic. So, you'd have a mix of functional Components and class-based Components. With hooks, all your Components can be functional!

### Forget `setState` and Embrace `useState`

The goal of state in React Components is to "remember" things like user interaction (clicks, typing, etc.) or API requests.


### Goodbye "lifecycle" Methods... Hello, `useEffect`?

With lifecycle methods (`shouldComponentUpdate`, `componentDidUpdate`, etc.) you are managing when your Component should render. But, managing your component's rendering lifecycle is usually an abstraction from what you're really trying to manage: when your state should change, and with what state-changes should a side-effect run?

This is such an improvement in concept. When working with side-effects, instead of thinking about the Component Lifecycle, you can more directly think about syncronising state changes based on your side-effects. Or more generally: think about your data not your component rendering lifecycle.

> The question is not "when does this effect run" the question is "with which state does this effect synchronize with"
> 
> useEffect(fn) // all state
> useEffect(fn, []) // no state
> useEffect(fn, [these, states])
> 
> — Ryan Florence (@ryanflorence) [May 5, 2019](https://twitter.com/ryanflorence/status/1125041041063665666)

### Okay, But What Wbout "mount" Events?

```javascript
  // We'll need to track if the component is mounted. We'll use
  // useRef which acts as instance variables without the class syntax.
  // And a useEffect call with no inputs, so it's only called once on mount.
  const mountedRef = useRef(false)
  useEffect(() => {
    mountedRef.current = true
    return () => (mountedRef.current = true)
  }, [])
```


### Optimize with `useMemo` not `shouldComponentUpdate`!

