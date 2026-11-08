(function () {
  if (document.readyState !== "loading") {
    init();
  } else {
    document.addEventListener("DOMContentLoaded", init);
  }

  function init() {
    lazyload();
    prettydates();

    // click events
    document.addEventListener('click', (ev) => {
      
      // Bind centering of photos 
      const img = getTag("IMG", ev.target);
      if (img != null) {
        // img.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
        scrollToTargetAdjusted(img);
      }
    }, true);
  }

  function lazyload() {
    const imagesToLoad = document.querySelectorAll("img[data-src]");
    imagesToLoad.forEach((img) => {
      img.setAttribute("src", img.getAttribute("data-src"));
      img.onload = () => {
        img.removeAttribute("data-src");
      };
    });
  }

  function prettydates() {
    const els = document.querySelectorAll("time[datetime]");
    els.forEach((el) => {
      try {
        let date = new Date(el.dateTime);
        let pp = new Intl.DateTimeFormat('en-US', { dateStyle: 'medium', timeStyle: 'medium' }).format(date);
        el.textContent = pp;
        el.setAttribute("title", el.getAttribute("title") + " " + pp);
      } catch (e) {
        console.error(e);
      }
    });
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

  function scrollToTargetAdjusted(target) {
    console.log('scrollToTargetAdjusted', target)
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
})();
