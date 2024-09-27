import './bootstrap';
import 'bootstrap';
import './main';
import Swiper from 'swiper/bundle';
var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 6,
      freeMode: true,
      watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
      },
      thumbs: {
            swiper: swiper,
      },
});