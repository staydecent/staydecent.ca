(function () {
  const site = document.getElementById('site')
  const imgs = document.querySelectorAll('img')

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
    link.addEventListener('click', (ev) => {
      ev.preventDefault()
      const color = link.getAttribute('data-color')
      if (color) {
        document.body.style.backgroundColor = '#' + color
        site.classList.add('fadeout')
      }
      setTimeout(() => {
        window.location = link.getAttribute('href')
      }, 1500)
    })
  })
  console.log({ links })
})()
