var sw = $(window).width();
var sh = $(window).height();
onloadCallback = function () {};

function setResponse(response) {
  document.getElementById("captcha-response-banner").value = response;
  $("#servicesHeroForm").submit();
  return true;
}

function setResponseQuote(response) {
  document.getElementById("captcha-response-quote").value = response;
  $("#getquoteform").submit();
  return true;
}
const loadDynamicScript = (e) => {
  let s = document.getElementById("scriptID");
  if (!s) {
    let i = document.createElement("script");
    (i.src = "https://www.google.com/recaptcha/api.js"),
      (i.id = "scriptID"),
      document.body.appendChild(i),
      (i.onload = () => {
        onloadCallback(), e && e();
      });
  }
  s && e && e();
};

function mobSliderheight() {
  var slideWidth = $(".servicesBrandsSlider .swiper-slide").outerWidth();
  $(".servicesBrandsSlider .mob-frame").css("width", slideWidth);
}
$(document).ready(function () {
  $("#toggle").click(function () {
    $(this).toggleClass("active");
    $(".mobNav").toggleClass("open");
    $("html").toggleClass("overflow-hidden");
  });

  /*1st Slider Begin*/
  if (sw > 767) {
    if ($(document).find("div").hasClass("Custom-slider-01")) {
      var services_thumb_slider = new Swiper(".Custom-slider-01", {
        slidesPerView: 5,
        speed: 400,
        direction: "vertical",
        centeredSlides: true,
        mousewheel: true,
        initialSlide: "2",
      });
      $(".Custom-slider-01 .swiper-slide").click(function () {
        services_thumb_slider.slideTo($(this).index());
      });
    }
  }
  if (sw > 767) {
    if ($(document).find("div").hasClass("Custom-service-slider")) {
      var services_slider = new Swiper(".Custom-service-slider", {
        slidesPerView: 1,
        initialSlide: "2",
        speed: 400,
        centeredSlides: true,
        effect: "fade",
        fadeEffect: {
          crossFade: false,
        },
      });
      services_slider.controller.control = services_thumb_slider;
      services_thumb_slider.controller.control = services_slider;
    }
  }
  /*1st Slider End*/

  /*2nd Slider Begin*/
  if (sw > 767) {
    if ($(document).find("div").hasClass("services-thumb-slider-02")) {
      var services_thumb_slider_02 = new Swiper(".services-thumb-slider-02", {
        slidesPerView: 5,
        speed: 400,
        direction: "vertical",
        centeredSlides: true,
        mousewheel: true,
        initialSlide: "2",
      });
      $(".services-thumb-slider-02 .swiper-slide").click(function () {
        services_thumb_slider_02.slideTo($(this).index());
      });
    }
  }
  if (sw > 767) {
    if ($(document).find("div").hasClass("services-slider-02")) {
      var services_slider_02 = new Swiper(".services-slider-02", {
        slidesPerView: 1,
        initialSlide: "2",
        speed: 400,
        centeredSlides: true,
        effect: "fade",
        fadeEffect: {
          crossFade: false,
        },
      });
      services_slider_02.controller.control = services_thumb_slider_02;
      services_thumb_slider_02.controller.control = services_slider_02;
    }
  }
  /*2nd Slider End*/

  if ($(document).find("div").hasClass("ourWork__Slider")) {
    var ourWork_Slider = new Swiper(".ourWork__Slider", {
      slidesPerView: 1.1,
      spaceBetween: 10,
      speed: 2000,
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 25,
        },
        1024: {
          slidesPerView: 4.5,
          spaceBetween: 25,
        },
      },
    });
  }
  if ($(document).find("div").hasClass("collabCompanies__Slider")) {
    var collabCompanies_Slider = new Swiper(".collabCompanies__Slider", {
      slidesPerView: 2,
      speed: 2000,
      grid: {
        rows: 1,
      },
      scrollbar: {
        el: ".collabCompanies__Slider .swiper-scrollbar",
        draggable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 3,
          grid: {
            rows: 2,
          },
        },
        768: {
          slidesPerView: 4,
          grid: {
            rows: 2,
          },
        },
        1024: {
          slidesPerView: 7,
          grid: {
            rows: 2,
          },
        },
      },
    });
  }
  if ($(document).find("div").hasClass("faq__Slider")) {
    var faq_Slider = new Swiper(".faq__Slider", {
      slidesPerView: 1.1,
      spaceBetween: 10,
      speed: 2000,
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1025: {
          slidesPerView: 5,
          spaceBetween: 30,
        },
      },
    });
  }
  if ($(document).find("div").hasClass("worth-read__Slider")) {
    var worth_read_slider = new Swiper(".worth-read__Slider", {
      slidesPerView: 1.25,
      spaceBetween: 30,
      centeredSlides: false,
      speed: 2000,
      loop: true,
      loopedSlides: 10,
      scrollbar: {
        el: ".worth-read__Slider .swiper-scrollbar",
        draggable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 80,
          centeredSlides: true,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 80,
          centeredSlides: false,
        },
        1025: {
          slidesPerView: 4.5,
        },
      },
    });
  }
  if ($(document).find("div").hasClass("our-services__services-slider")) {
    var ourServices = new Swiper(".our-services__services-slider", {
      freeMode: true,
      slidesPerView: "auto",
      speed: 12000,
      autoplay: {
        delay: 1,
        enable: true,
      },
      loop: true,
      grabCursor: false,
      shortSwipes: false,
      longSwipes: false,
      allowTouchMove: false,
      watchSlidesProgress: true,
    });
  }
  if (sw < 576) {
    if ($(document).find("div").hasClass("serviceHelp__slider")) {
      var serviceHelp__slider = new Swiper(".serviceHelp__slider", {
        slidesPerView: 1,
        spaceBetween: 5,
        loop: false,
        speed: 2000,
      });
    }
  }
  if ($(document).find("div").hasClass("serviceDevelopment__thumb")) {
    var serviceDevelopment__thumb = new Swiper(".serviceDevelopment__thumb", {
      slidesPerView: 1,
      loop: false,
      speed: 1200,
      spaceBetween: 30,
      breakpoints: {
        576: {
          slidesPerView: 1.5,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  }
  // if ($(document).find("div").hasClass("serviceDevelopment__gallery")) {
  //   var serviceDevelopment__gallery = new Swiper(".serviceDevelopment__gallery", {
  //     slidesPerView: 1,
  //     loop: false,
  //     speed: 1200,
  //     effect: "fade",
  //     fadeEffect: {
  //       crossFade: true,
  //     },
  //     thumbs: {
  //       swiper: serviceDevelopment__thumb,
  //     },
  //     navigation: {
  //       nextEl: ".serviceDevelopment__galleryWrapper .swiper-button-next",
  //       prevEl: ".serviceDevelopment__galleryWrapper .swiper-button-prev",
  //     },
  //   });
  // }

  // if ($(document).find("div").hasClass("happyEmplyees__slider")) {
  //   var happyEmplyees__slider = new Swiper(".happyEmplyees__slider", {
  //     slidesPerView: 1,
  //     loop: false,
  //     speed: 800,
  //     effect: "fade",
  //     fadeEffect: {
  //       crossFade: true,
  //     },
  //     navigation: {
  //       nextEl: ".happyEmplyees__rightsec .swiper-button-next",
  //       prevEl: ".happyEmplyees__rightsec .swiper-button-prev",
  //     },
  //   });
  // }
  // if ($(document).find("div").hasClass("servicesBrandsSlider")) {
  //   var servicesBrandsSlider = new Swiper(".servicesBrandsSlider", {
  //     slidesPerView: 1.85,
  //     spaceBetween: 0,
  //     loop: true,
  //     speed: 1000,
  //     centeredSlides: true,
  //     slideToClickedSlide: true,
  //     autoplay: {
  //       delay: 3000,
  //       disableOnInteraction: true,
  //     },
  //     breakpoints: {
  //       576: {
  //         spaceBetween: 0,
  //         slidesPerView: 3,
  //       },
  //       768: {
  //         slidesPerView: 4,
  //       },
  //       1100: {
  //         slidesPerView: 5,
  //         spaceBetween: 0,
  //       },
  //     },
  //   });
  // }
  // if ($(document).find("div").hasClass("uiPortfolio__slider")) {
  //   var uiPortfolio__slider = new Swiper(".uiPortfolio__slider", {
  //     slidesPerView: 1,
  //     spaceBetween: 0,
  //     loop: false,
  //     speed: 500,
  //     effect: "fade",
  //     fadeEffect: {
  //       crossFade: true,
  //     },
  //     navigation: {
  //       nextEl: ".uiPortfolio .swiper-button-next",
  //       prevEl: ".uiPortfolio .swiper-button-prev",
  //     },
  //   });
  // }
  if ($(document).find("div").hasClass("research-design__slider")) {
    var researchDesign__slider = new Swiper(".research-design__slider", {
      slidesPerView: 2,
      spaceBetween: 0,
      loop: false,
      speed: 500,
      autoplay: {
        delay: 3000,
        disableOnInteraction: true,
      },
      breakpoints: {
        576: {
          spaceBetween: 0,
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 3,
        },
        1100: {
          slidesPerView: 5,
          spaceBetween: 0,
        },
      },
    });
  }
  setTimeout(function () {
    mobSliderheight();
  }, 1500);
  $(".experties__tabs-wrapper--small-cards").on("click", function () {
    var target = $(this).attr("data-rel");
    $(".experties__tabs-wrapper--small-cards").removeClass("active");
    $(this).addClass("active");
    $("#" + target)
      .fadeIn("slow")
      .siblings(".experties__tabs-wrapper--detail-tab")
      .hide();
    return false;
  });
  $(".experties__tabs-wrapper--small-cards:first").addClass("active");
});
$(".toggle-btn > p").on("click", function () {
  if (sw < 992) {
    var tag = $(this).parent().find("ul");
    if ($(this).hasClass("opened")) {
      $(this).removeClass("opened");
      $(".toggle-btn > .qlinks-menu").slideUp();
    } else {
      $(".toggle-btn > p").removeClass("opened");
      $(".toggle-btn > .qlinks-menu").slideUp();
      $(this).addClass("opened");
      tag.slideDown();
    }
  }
});
// $(".menu-toggleBtn").on("click", function() {
//   var tag2 = $(this).siblings(".inner-menu");
//   var taglink = $(this).siblings(".menu-link");
//   if ($(this).hasClass("active")) {
//     $(this).removeClass("active");
//     $(".menu-link").removeClass("active");
//     $(".inner-menu").slideUp();
//   } else {
//     $(".menu-toggleBtn").removeClass("active");
//     $(".menu-link").removeClass("active");
//     $(".inner-menu").slideUp();
//     $(this).addClass("active");
//     tag2.slideDown();
//     taglink.addClass("active");
//   }
// });
// $(".inner-menu-toggleBtn").on("click", function() {
//   var tag3 = $(this).siblings(".sub-inner-menu");
//   var taglink2 = $(this).siblings(".inner-menu__item--link");
//   if ($(this).hasClass("active")) {
//     $(this).removeClass("active");
//     $(".inner-menu__item--link").removeClass("active");
//     $(".sub-inner-menu").slideUp();
//   } else {
//     $(".inner-menu-toggleBtn").removeClass("active");
//     $(".inner-menu__item--link").removeClass("active");
//     $(".sub-inner-menu").slideUp();
//     $(this).addClass("active");
//     tag3.slideDown();
//     taglink2.addClass("active");
//   }
// });
// $(window).on("resize orientation", function() {
//   sw = $(window).width();
//   sh = $(window).height();
//   if (sh < 450 && sw > 480 && sw < 820) {
//     $("#portrait-warnning").css("display", "flex");
//   } else {
//     $("#portrait-warnning").css("display", "none");
//   }
//   setTimeout(function() {
//     if (sw > 1025) {
//       if (sw < 1400 && sw > 1300 && sh > 900) {} else {
//         fontResizer();
//       }
//     }
//     var slideWidth = $(".servicesBrandsSlider .swiper-slide").outerWidth();
//     $(".servicesBrandsSlider .mob-frame").css("width", slideWidth);
//   }, 1000);
// });
// $(window).scroll(function() {
//   var header1 = $(".header");
//   var sticky1 = 0;
//   if (window.pageYOffset > sticky1) {
//     header1.addClass("sticky");
//   } else {
//     header1.removeClass("sticky");
//   }
// });
// if (sw > 991) {
//   $(".menu__menuitem").hover(function() {
//     var isHovered = $(this).is(":hover");
//     if (isHovered) {
//       $(this).children(".dropdown-js").stop().slideToggle();
//       $(this).closest(".menu__menuitem").addClass("dropdown-open");
//     } else {
//       $(this).children(".dropdown-js").stop().slideToggle();
//       $(this).closest(".menu__menuitem").removeClass("dropdown-open");
//     }
//   });
// }
if (sw < 992) {
  $(".menu__menuitem--menulink").click(function () {
    var tag2 = $(this).siblings(".dropdown-js");
    if ($(this).parent(".menu__menuitem").hasClass("dropdown-open")) {
      $(this).parent(".menu__menuitem").removeClass("dropdown-open");
      $(this).siblings(".dropdown-js").slideUp(600);
    } else {
      $(".menu > .menu__menuitem ").removeClass("dropdown-open");
      $(".menu__menuitem > .dropdown-js").slideUp(600);
      $(this).parent().addClass("dropdown-open");
      tag2.slideDown();
    }
  });
}
$(".menu-slider-thumb li:first-child").addClass("active");
$(".menu-slider-gallery-slide").hide();
$(".menu-slider-gallery-slide:first-child").show();
$(".menu-slider-thumb li").mouseenter(function () {
  var $mainmenu = $(this).attr("data-menu");
  $(this).addClass("active").siblings().removeClass("active");
  if ($mainmenu == "all") {
  } else {
    $(".menu-slider-gallery-slide").css("display", "none");
    $(".menu-slider-gallery-slide[data-menu=" + $mainmenu + "]")
      .css("display", "block")
      .fadeIn(10);
  }
});
$(".serviceBrands__menu li:first-child a").addClass("active");
$(".serviceBrands__tabBoxWrapper .serviceBrands__tabBox").hide();
$(".serviceBrands__tabBoxWrapper .serviceBrands__tabBox:first-child").show();
$(".serviceBrands__menu li a").on("click", function () {
  var target = $(this).attr("data-rel");
  $(".serviceBrands__menu li a").removeClass("active");
  $(this).addClass("active");
  $("#" + target)
    .fadeIn(1000)
    .siblings(".serviceBrands__tabBox")
    .hide();
});
$(".moreless-button").click(function () {
  $(".moretext").toggleClass("active");
  if ($(this).children("span").text() == "Read more") {
    $(this).children("span").text("Read less");
  } else {
    $(this).children("span").text("Read more");
  }
});
