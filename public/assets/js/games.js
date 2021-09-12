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
   * Talkshow Room slider
   */
  // Initialize total slide(s) variable
  var totalSlidesGamesRoom = 0;

  // Swiper function
  var gamesRoomSwiper = new Swiper('.games-room-swiper', {
    speed: 600,
    loop: false,
    centeredSlides: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination-games-room',
      type: 'bullets',
      clickable: true,
      bulletActiveClass: 'active'
    },
    navigation: {
      nextEl: '.games-room-btn-next',
      prevEl: '.games-room-btn-prev'
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
        centeredSlides: false
      },

      1024: {
        slidesPerView: 3,
        spaceBetween: 10 //20
      }
    }
  });

  // Get total slide(s)
  var totalGamesRoomSwiper = $('.swiper-pagination-games-room .swiper-pagination-bullet').length;

  // Get index(es)
  var idx = gamesRoomSwiper.activeIndex;
  if (idx == 0 && totalGamesRoomSwiper > 1){
    $(".games-room-btn-prev").css("visibility", "hidden");
    $(".games-room-btn-next").css("visibility", "visible");
  } else if (totalGamesRoomSwiper == 1){
    $(".games-room-btn-next").css("visibility", "hidden");
    $(".games-room-btn-prev").css("visibility", "hidden");
  } else if (idx+1 == totalGamesRoomSwiper) {
    $(".games-room-btn-next").css("visibility", "hidden");
    $(".games-room-btn-prev").css("visibility", "visible");
  } else {
    $(".games-room-btn-prev").css("visibility", "visible");
    $(".games-room-btn-next").css("visibility", "visible");
  }

  // Get index(es) when transition
  gamesRoomSwiper.on('transitionEnd', function() {
    var idx = gamesRoomSwiper.activeIndex;
    if (idx == 0 && totalGamesRoomSwiper > 1){
      $(".games-room-btn-prev").css("visibility", "hidden");
      $(".games-room-btn-next").css("visibility", "visible");
    } else if (totalGamesRoomSwiper == 1) {
      $(".games-room-btn-next").css("visibility", "hidden");
      $(".games-room-btn-prev").css("visibility", "hidden");
    } else if (idx+1 == totalGamesRoomSwiper) {
      $(".games-room-btn-next").css("visibility", "hidden");
      $(".games-room-btn-prev").css("visibility", "visible");
    } else {
      $(".games-room-btn-prev").css("visibility", "visible");
      $(".games-room-btn-next").css("visibility", "visible");
    }
  });
})()