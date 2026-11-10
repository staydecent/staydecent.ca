(function () {
  if (document.readyState !== "loading") {
    init();
  } else {
    document.addEventListener("DOMContentLoaded", init);
  }

  function init() {
    lazyload();
    prettydates();
    theme();

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

  function theme() {
    const toggleThemeBtn = document.getElementById("toggle-theme-btn");
    const savedPref = window.localStorage.getItem("prefers-color-scheme");
    const systemThemeDark = window.matchMedia("(prefers-color-scheme: dark)");

    const theme = savedPref != null ? savedPref : systemThemeDark ? "dark" : "light";

    if (theme === "light") {
      document.body.classList.add("user-selected-light");
    } else if (theme === "dark") {
      document.body.classList.add("user-selected-dark");
    }

    toggleThemeBtn.addEventListener("click", () => {
      document.body.classList.toggle("user-selected-light");
      document.body.classList.toggle("user-selected-dark");
      if (document.body.classList.contains("user-selected-dark")) {
        window.localStorage.setItem("prefers-color-scheme", "dark");
      } else {
        window.localStorage.setItem("prefers-color-scheme", "light");
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
