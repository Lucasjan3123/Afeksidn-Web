var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        if (index < 4) {
          return '<span class="' + className + '"></span>';
        }
        return "";
      },
      // dynamicBullets: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      280: {
        slidesPerView: 1,
      },
      300: {
        slidesPerView: 1,
      },
      500: {
        slidesPerView: 1,
      },
      800: {
        slidesPerView: 2,
      },
      1010: {
        slidesPerView: 3,
      },
      1550: {
        slidesPerView:4,
      },
    },
  });