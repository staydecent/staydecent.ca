(function () {
  const photos = document.querySelectorAll('.photo > img')
  const imgs = document.querySelectorAll('img')

  // Wait to fade in content until after first image or so is loaded
  if (imgs.length > 0) {
    const limit = imgs.length > 2 ? 2 : imgs.limit
    let loaded = 0
    const onPhotoLoaded = function () {
      loaded++
      if (loaded >= limit) {
        const grids = document.querySelectorAll('.grid')
        for (let x = 0; x < grids.length; x++) {
          grids[x].classList.add('ready')
        }
      }
    }
    for (let x = 0; x < limit; x++) {
      imgs[x].addEventListener('load', onPhotoLoaded)
    }
  }

  // Focus on photo when clicked
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
    } else {
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
