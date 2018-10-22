(function () {
  const photos = document.querySelectorAll('.photo > img')
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
})()
