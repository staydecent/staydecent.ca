title: The Difference Between Static and Bound Methods
---

Recently, at [work](http://inputlogic.ca), we were coming up with our [React Style Guide](https://github.com/inputlogic/styleguides/blob/master/react.md) (based on [AirBnBs](https://github.com/airbnb/javascript/tree/master/react)). One of the "rules" is to avoid binding methods within the render method (as this creates a new function each render), and a teammate mentioned, "why not just use static arrow functions?"

While both solutions were practically equivalent, I worried about the technical differences. Static methods are defined on the Class *not* on each prototype instance. 

## Wait, so how is the arrow function properly binding the correct `this` to the static?!

This magic had me worried. So I pulled up a [Babel REPL](https://babeljs.io/repl) and wrote two classes:

```jsx
class Static extends React.Component {
  onClickDiv = () => {
    // do stuff
  }

  render () {
    return <div onClick={this.onClickDiv} />
  }
}

class Bound extends React.Component {
  constructor (props) {
  super(props)
    this.onClickDiv = this.onClickDiv.bind(this)
  }
  
  onClickDiv () {
    // do stuff
  }

  render () {
    return <div onClick={this.onClickDiv} />
  }
}
```

The transpiled Bound class was as you would expect, but the Static class resulted in: 

```jsx
class Static extends React.Component {
  constructor(...args) {
    var _temp;

    return _temp = super(...args), this.onClickDiv = () => {
      // do stuff
    }, _temp;
  }

  render() {
    return React.createElement("div", { onClick: this.onClickDiv });
  }
}
```

Oh! So maybe these are technically equivilant! But defining a Class method is still a different syntax than defining a function on a `this` reference. So I dropped the transpiled code into a [FireFox scratchpad](https://developer.mozilla.org/en-US/docs/Tools/Scratchpad).

<img src="/assets/media/class-prototypes.png" alt="Screenshot of the Firefox Console showing the Static and Bound prototypes." />

The only difference seems to be a bound class method exists on the prototype whereas the static arrow function does not.

But, how or why would this matter? In my experience, it usually doesn't, unless you want to mock a class method in your tests (by overriding the definition on the prototype), or — [god forbid!](https://reactjs.org/docs/composition-vs-inheritance.html) — you plan on extending the class.

In the end, because of the techincal difference, we aren't enforcing static methods over bound methods in our style guide, rather both are fine, as long as you're aware of the implications.

Have I missed any other differences between the two? I'd love to know if there's other details to consider.
