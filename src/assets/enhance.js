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

  const links = document.querySelectorAll('a[data-color]')
  links.forEach(link => {
    link.addEventListener('click', transition)
  })

  const back = document.querySelector('a.back')
  back && back.addEventListener('click', () => window.history.back())

  function transition (ev) {
    ev.preventDefault()
    console.log({ el: this })
    const color = this.getAttribute('data-color') || 'e6b65a'
    document.body.style.backgroundColor = '#' + color
    site.classList.replace('scale-up', 'scale-down')
    setTimeout(() => {
      window.location = this.getAttribute('href')
    }, 1500)
  }
})()
