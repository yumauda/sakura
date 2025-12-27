"use strict";

const slider2 = new Swiper(".slider-main", {
  slidesPerView: 1.2,
  centeredSlides: true,
  loop: true,
  spaceBetween: 10,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 2.2,
      slidesPerGroup: 1,
      spaceBetween: 40,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const slider3 = new Swiper(".slider3", {
  slidesPerView: 1.2,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
const sliderSidebar = new Swiper(".slider-sidebar", {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 1,
      centeredSlides: false,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});