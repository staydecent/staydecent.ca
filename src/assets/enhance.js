(function () {
  if (document.readyState !== "loading") {
    init();
  } else {
    document.addEventListener("DOMContentLoaded", init);
  }

  function init() {
    lazyload();

    // custom elements
    customElements.define("pretty-date", PrettyDate, { extends: "time" });

    // click events
    document.addEventListener('click', (ev) => {
      
      // Bind centering of photos 
      const img = getTag("IMG", ev.target);
      if (img != null) {
        // img.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
        scrollToTargetAdjusted(img);
      }

      // easier photo click targets
      const datalinkEl = getDataLink(ev.target);
      if (datalinkEl != null) {
        window.location = datalinkEl.dataset.link;
      }
    }, true);
  }

  function lazyload() {
    const imgs = document.querySelectorAll('img');
    const isInViewport = function (element) {
      const rect = element.getBoundingClientRect();
      const html = document.documentElement;
      if ((rect.top + 100) <= (window.innerHeight || html.clientHeight)) {
        element.classList.add('fadein');
        element.classList.remove('notinview');
      }
    };
    imgs.forEach(img => img.classList.add('notinview'));
    document.addEventListener('scroll', () => {
      if (!imgs.length) return;
      imgs.forEach(isInViewport);
    }, true);
    Array.from(imgs).slice(0, 2).forEach(isInViewport);
  }

  function getTag(tagName, el) {
    if (el.tagName === tagName) {
      return el;
    }
    while (el.parentNode) {
      el = el.parentNode
      if (el.tagName === tagName) {
        return el;
      }
    }
    return null;
  }

  function getDataLink(el) {
    if (el.dataset != null && el.dataset.link != null) {
      return el;
    }
    while (el.parentNode) {
      el = el.parentNode
      if (el.dataset != null && el.dataset.link != null) {
        return el;
      }
    }
    return null;
  }

  function scrollToTargetAdjusted(target) {
    const isSmall = target.clientHeight < window.innerHeight / 2;
    const offset = isSmall
      ? (target.clientHeight / 1.5)
      : 29;
    const targetPos = target.getBoundingClientRect().top;
    const offsetPosition = targetPos + window.pageYOffset - offset;
    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth"
    });
  }

  class PrettyDate extends HTMLTimeElement {
    constructor() {
      super();
    }

    connectedCallback() {
      this._date = new Date(this.dateTime);
      try {
        let date = new Date(this.dateTime);
        let pp = new Intl.DateTimeFormat('en-US', { dateStyle: 'medium', timeStyle: 'medium' }).format(date);
        this.textContent = pp;
      } catch (e) {
        console.error(e);
      }
    }
  }

})();
