/**
* Template Name: LB3labs One - v1.0.0
* Template URL: 
* Author: LB3Labs Developer
* License: 
*/

(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }  
  
  /**
   * Merchandise Room slider
   */
  // Initialize total slide(s) variable
  var totalSlidesMerchandiseRoom = 0;

  // Swiper function
  var merchandiseRoomSwiper = new Swiper('.merchandise-room-swiper', {
    speed: 600,
    loop: false,
    centeredSlides: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination-merchandise-room',
      type: 'bullets',
      clickable: true,
      bulletActiveClass: 'active'
    },
    navigation: {
      nextEl: '.merchandise-room-btn-next',
      prevEl: '.merchandise-room-btn-prev'
    },  
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },  
    breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 50 //20
      },

      768: {
        slidesPerView: 2,
        spaceBetween: 10, //20
        centeredSlides: false,
      },

      1024: {
        slidesPerView: 2,
        spaceBetween: 10 //20
      }
    }
  });

  // Get total slide(s)
  var totalMerchandiseRoomSwiper = $('.swiper-pagination-merchandise-room .swiper-pagination-bullet').length;

  // Get index(es)
  var idx = merchandiseRoomSwiper.activeIndex;
  if (idx == 0 && totalMerchandiseRoomSwiper > 1){
    $(".merchandise-room-btn-prev").css("visibility", "hidden");
    $(".merchandise-room-btn-next").css("visibility", "visible");
  } else if (totalMerchandiseRoomSwiper == 1){
    $(".merchandise-room-btn-next").css("visibility", "hidden");
    $(".merchandise-room-btn-prev").css("visibility", "hidden");
  } else if (idx+1 == totalMerchandiseRoomSwiper) {
    $(".merchandise-room-btn-next").css("visibility", "hidden");
    $(".merchandise-room-btn-prev").css("visibility", "visible");
  } else {
    $(".merchandise-room-btn-prev").css("visibility", "visible");
    $(".merchandise-room-btn-next").css("visibility", "visible");
  }

  // Get index(es) when transition
  merchandiseRoomSwiper.on('transitionEnd', function() {
    var idx = merchandiseRoomSwiper.activeIndex;
    if (idx == 0 && totalMerchandiseRoomSwiper > 1){
      $(".merchandise-room-btn-prev").css("visibility", "hidden");
      $(".merchandise-room-btn-next").css("visibility", "visible");
    } else if (totalMerchandiseRoomSwiper == 1) {
      $(".merchandise-room-btn-next").css("visibility", "hidden");
      $(".merchandise-room-btn-prev").css("visibility", "hidden");
    } else if (idx+1 == totalMerchandiseRoomSwiper) {
      $(".merchandise-room-btn-next").css("visibility", "hidden");
      $(".merchandise-room-btn-prev").css("visibility", "visible");
    } else {
      $(".merchandise-room-btn-prev").css("visibility", "visible");
      $(".merchandise-room-btn-next").css("visibility", "visible");
    }
  });
})()