// Swiper 8.4.7
import "./vendor/swiper";
import "./vendor/focus-visible-polyfill";

const swiper = new Swiper(".swiper", {
  // Default parameters
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  // breakpoints: {
  //   // when window width is >= 480px
  //   768: {
  //     slidesPerView: 2,
  //     spaceBetween: 20,
  //   },
  //   // when window width is >= 640px
  //   1024: {
  //     slidesPerView: 3,
  //     spaceBetween: 30,
  //   },
  // },

  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
