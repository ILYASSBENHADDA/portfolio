
/* Navbar Scripts */
	// JS to collapse the navbar on scroll
  navbar = document.getElementById("navbar");
    function scrollFunction() {
      "use strict";
      if (document.documentElement.scrollTop > 20) {
        navbar.classList.add('nav-collapse');
      } else {
        navbar.classList.remove('nav-collapse');
      }
    }
  // To Execute function
  window.onscroll = function() {scrollFunction()};


/* WOW.JS Animation */
new WOW().init();


/* Card Slider - Swiper */
var cardSlider = new Swiper('.card-slider', {
  autoplay: {
          delay: 4000,
          disableOnInteraction: false
  },
      loop: true,
      navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  slidesPerView: 3,
  spaceBetween: 20,
      breakpoints: {
          // when window is <= 992px
          992: {
              slidesPerView: 2
          },
          // when window is <= 768px
          768: {
              slidesPerView: 1
          } 
      }
  });
