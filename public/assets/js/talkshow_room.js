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
  var totalSlidesTalkshowRoom = 0;

  // Swiper function
  var talkshowRoomSwiper = new Swiper('.talkshow-room-swiper', {
    speed: 600,
    loop: false,
    centeredSlides: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination-talkshow-room',
      type: 'bullets',
      clickable: true,
      bulletActiveClass: 'active'
    },
    navigation: {
      nextEl: '.talkshow-room-btn-next',
      prevEl: '.talkshow-room-btn-prev'
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
  var totalTalkshowRoomSwiper = $('.swiper-pagination-talkshow-room .swiper-pagination-bullet').length;

  // Get index(es)
  var idx = talkshowRoomSwiper.activeIndex;
  console.log('Ini adalah idx: ', idx);
  console.log('Ini adalah total: ', totalTalkshowRoomSwiper);
  if (idx == 0){
    $(".talkshow-room-btn-prev").css("visibility", "hidden");
    $(".talkshow-room-btn-next").css("visibility", "visible");
  } else if (idx == 0 && totalTalkshowRoomSwiper == 1){
    console.log('masuk sini');
    $(".talkshow-room-btn-next").css("visibility", "hidden");
    $(".talkshow-room-btn-prev").css("visibility", "hidden");
  } else if(idx+1 == totalTalkshowRoomSwiper) {
    $(".talkshow-room-btn-next").css("visibility", "hidden");
    $(".talkshow-room-btn-prev").css("visibility", "visible");
  } else {
    $(".talkshow-room-btn-prev").css("visibility", "visible");
    $(".talkshow-room-btn-next").css("visibility", "visible");
  }

  // Get index(es) when transition
  talkshowRoomSwiper.on('transitionEnd', function() {
    var idx = talkshowRoomSwiper.activeIndex;
    if (idx == 0){
      $(".talkshow-room-btn-prev").css("visibility", "hidden");
      $(".talkshow-room-btn-next").css("visibility", "visible");
    } else if(idx+1 == totalTalkshowRoomSwiper) {
      $(".talkshow-room-btn-next").css("visibility", "hidden");
      $(".talkshow-room-btn-prev").css("visibility", "visible");
    } else {
      $(".talkshow-room-btn-prev").css("visibility", "visible");
      $(".talkshow-room-btn-next").css("visibility", "visible");
    }
  });
})()