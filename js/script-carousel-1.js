var swiper = new Swiper('.swiper-container', {
      effect: 'cube',    /* estilo cube, cards y flips se ven bien */
      grabCursor: true,
      loop: 'true',
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
     },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: 'true',
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true,
      },
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
  }
    });