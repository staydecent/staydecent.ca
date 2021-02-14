(function () {
  const site = document.getElementById('site')
  const imgs = document.querySelectorAll('img')

  window.onpopstate = function (ev) {
    console.log('onpopstate')
  }

  window.onbeforeunload = function (ev) {
    console.log('onbeforeunload')
  }

  const isInViewport = function (element) {
    const rect = element.getBoundingClientRect()
    const html = document.documentElement
    if ((rect.top + 100) <= (window.innerHeight || html.clientHeight)) {
      element.classList.add('fadein')
      element.classList.remove('notinview')
    }
  }
  imgs.forEach(img => img.classList.add('notinview'))
  document.addEventListener('scroll', () => {
    if (!imgs.length) return
    imgs.forEach(isInViewport)
  }, true)
  Array.from(imgs).slice(0, 2).forEach(isInViewport)

  const back = document.querySelector('a.back')
  back && back.addEventListener('click', () => window.history.back())
})()
