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
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }


  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }


  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)


  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }


  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  let selectTopbar = select('#topbar')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.add('topbar-scrolled')
        }
      } else {
        selectHeader.classList.remove('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.remove('topbar-scrolled')
        }
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
  
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }


  /**
   * To bottom button
  */
  let tobottom = select('.to-bottom')
  if (tobottom) {
    const toggleTobottom = () => {
      if (window.scrollY < 100) {
        tobottom.classList.add('active')
      } else {
        tobottom.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleTobottom)
    onscroll(document, toggleTobottom)
  }

  /**
   * Instagram button
  */
  let igbtn = select('.ig-btn')
  if (igbtn) {
    const toggleIGbtn = () => {
      if (window.scrollY < 100) {
        igbtn.classList.add('active')
      } else {
        igbtn.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleIGbtn)
    onscroll(document, toggleIGbtn)
  }


  /**
   * Speakers slider
   */
  // Swiper function
  var speakerSwiper = new Swiper('.speaker-swiper', {
    speed: 600,
    loop: false,
    centeredSlides: false,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination-speaker',
      type: 'bullets',
      clickable: true,
      bulletActiveClass: 'active'
    },
    navigation: {
      nextEl: '.speaker-btn-next',
      prevEl: '.speaker-btn-prev'
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
  var totalSpeakerSwiper = $('.swiper-pagination-bullet').length;

  // Get index(es)
  var idx = speakerSwiper.activeIndex;
  if (idx == 0){
    $(".speaker-btn-prev").css("visibility", "hidden");
    $(".speaker-btn-next").css("visibility", "visible");
  } else if (idx == 0 && totalSpeakerSwiper == 1){
    $(".speaker-btn-next").css("visibility", "hidden");
    $(".speaker-btn-prev").css("visibility", "hidden");
  } else if(idx+1 == totalSpeakerSwiper) {
    $(".speaker-btn-next").css("visibility", "hidden");
    $(".speaker-btn-prev").css("visibility", "visible");
  } else {
    $(".speaker-btn-prev").css("visibility", "visible");
    $(".speaker-btn-next").css("visibility", "visible");
  }

  // Get index(es) when transition
  speakerSwiper.on('transitionEnd', function() {
    var idx = speakerSwiper.activeIndex;
    if (idx == 0){
      $(".speaker-btn-prev").css("visibility", "hidden");
      $(".speaker-btn-next").css("visibility", "visible");
    } else if(idx+1 == totalSpeakerSwiper) {
      $(".speaker-btn-next").css("visibility", "hidden");
      $(".speaker-btn-prev").css("visibility", "visible");
    } else {
      $(".speaker-btn-prev").css("visibility", "visible");
      $(".speaker-btn-next").css("visibility", "visible");
    }
  });


  /**
   * Schedule slider
   */
  // var totalSlidesSchedule = 0;
  // Swiper function
  var scheduleSwiper = new Swiper('.schedule-swiper', {
    speed: 600,
    loop: false,
    centeredSlides: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination-schedule',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.schedule-btn-next',
      prevEl: '.schedule-btn-prev',
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
        slidesPerView: 1,
        spaceBetween: 10, //20
        // centeredSlides: false
      },

      1024: {
        slidesPerView: 1,
        spaceBetween: 40 //20
      }
    }
  });

  // Get total slide(s)
  var totalScheduleSwiper = $('.swiper-pagination-schedule .swiper-pagination-bullet').length;

  // Get index(es)
  var idx_schedule = scheduleSwiper.realIndex;
  console.log('*** scheduleSwiper.realIndex', idx);
  if (idx_schedule == 0){
    $(".schedule-btn-prev").css("visibility", "hidden");
    $(".schedule-btn-next").css("visibility", "visible");
  }  else if (idx_schedule == 0 && totalScheduleSwiper == 1){
    $(".schedule-btn-next").css("visibility", "hidden");
    $(".schedule-btn-prev").css("visibility", "hidden");
  } else if(idx_schedule+1 == totalScheduleSwiper) {
    $(".schedule-btn-next").css("visibility", "hidden");
    $(".schedule-btn-prev").css("visibility", "visible");
  } else {
    $(".schedule-btn-prev").css("visibility", "visible");
    $(".schedule-btn-next").css("visibility", "visible");
  }

  // Get index(es) when transition
  scheduleSwiper.on('transitionEnd', function() {
    var idx_schedule = scheduleSwiper.realIndex;
    if (idx_schedule == 0){
      $(".schedule-btn-prev").css("visibility", "hidden");
      $(".schedule-btn-next").css("visibility", "visible");
    } else if(idx_schedule+1 == totalScheduleSwiper) {
      $(".schedule-btn-next").css("visibility", "hidden");
      $(".schedule-btn-prev").css("visibility", "visible");
    } else {
      $(".schedule-btn-prev").css("visibility", "visible");
      $(".schedule-btn-next").css("visibility", "visible");
    }
  });
  








  


  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  /*
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }
  */

  /**
   * Initiate glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Gallery Lightbox 
   */
  const galelryLightbox = GLightbox({
    selector: '.galelry-lightbox'
  });
  

  /**
   * Clients slider
   */
  // new Swiper('.swiper-container', {
  //   speed: 600,
  //   loop: false,
  //   centeredSlides: false,
  //   // autoplay: {
  //   //   delay: 5000,
  //   //   disableOnInteraction: false
  //   // },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   navigation: {
  //     nextEl: '.btn-next',
  //     prevEl: '.btn-prev',
  //   },  
  //   // navigation: {
  //   //   nextEl: '.swiper-button-next',
  //   //   prevEl: '.swiper-button-prev',
  //   // },  
  //   breakpoints: {
  //     480: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     },

  //     1200: {
  //       slidesPerView: 3,
  //       spaceBetween: 15 //20
  //     }
  //   }
  // });

  // var swiper = $('.swiper-container').swiper({
  //   onSlideChangeStart: function(){
  //     // on the first slide
  //     if (swiper.activeIndex==0) {
  //       $('.swiper-button-next-unique').hide()
  //       $('.swiper-button-prev-unique').show()
  //     }
  //     // most right postion
  //     else if (swiper.activeIndex == swiper.slides.length-1) {
  //       $('.swiper-button-next-unique').show()
  //       $('.swiper-button-prev-unique').hide()
  //     }
  //     // middle positions
  //     else {
  //       $('.swiper-button-next-unique').show()
  //       $('.swiper-button-prev-unique').show()
  //     }   
  //   }
  // })


  /**
   * Partners slider
   */
  // new Swiper('.partners-slider', {
  //   speed: 600,
  //   loop: true,
  //   centeredSlides: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   breakpoints: {
  //     480: {
  //       slidesPerView: 3,
  //       spaceBetween: 10 //20
  //     },

  //     1200: {
  //       slidesPerView: 5,
  //       spaceBetween: 20 //20
  //     }
  //   }
  // });


  /**
   * Testimonials slider
   */
  // new Swiper('.testimonials-slider', {
  //   speed: 600,
  //   loop: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   breakpoints: {
  //     320: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     },

  //     1200: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     }
  //   }
  // });


  /**
   * Recent Events slider
   */
  // new Swiper('.recent-events-slider', {
  //   speed: 600,
  //   loop: false,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   breakpoints: {
  //     320: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     },

  //     1200: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     }
  //   }
  // });


  /**
   * BoD slider
   */
  // new Swiper('.bod-slider', {
  //   speed: 800,
  //   loop: true,
  //   autoplay: {
  //     delay: 50000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   breakpoints: {
  //     320: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     },

  //     1200: {
  //       slidesPerView: 1,
  //       spaceBetween: 20 //20
  //     }
  //   }
  // });

})()
