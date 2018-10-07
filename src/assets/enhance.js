(function () {
  const photos = document.querySelectorAll('.photo')
  let focused = null

  const fadeOutPhotos = function (target) {
    for (let x = 0; x < photos.length; x++) {
      if (photos[x] !== target) {
        fadeOut(photos[x])
      } else {
        focused = photos[x]
        document.body.addEventListener('click', fadeInPhotos)
      }
    }
  }

  const fadeInPhotos = function () {
    for (let x = 0; x < photos.length; x++) {
      if (photos[x] !== focused) {
        fadeIn(photos[x])
      }
    }
    focused = null
    document.body.removeEventListener('click', fadeInPhotos)
  }

  const onPhotoClick = function (ev) {
    ev.stopPropagation()
    if (focused) {
      fadeInPhotos()
    } else if (ev.target.nodeName === 'IMG') {
      fadeOutPhotos(this)
    }
  }
  for (let x = 0; x < photos.length; x++) {
    photos[x].addEventListener('click', onPhotoClick)
  }

  function fadeIn (el) {
    el.style.opacity = 0
    let last = +new Date()
    const tick = function () {
      el.style.opacity = +el.style.opacity + (new Date() - last) / 400
      last = +new Date()
      if (+el.style.opacity < 1) window.requestAnimationFrame(tick)
    }
    tick()
  }
  function fadeOut (el) {
    el.style.opacity = 1
    let last = +new Date()
    const tick = function () {
      el.style.opacity = +el.style.opacity - (new Date() - last) / 400
      last = +new Date()
      if (+el.style.opacity > 0) window.requestAnimationFrame(tick)
    }
    tick()
  }
})()
