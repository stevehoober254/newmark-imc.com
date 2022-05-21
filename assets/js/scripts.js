$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    autoplay: true,
    loop: true,
    autoplayHoverPause: true,
    autoplayTimeout: 6000,
    dots: true,
    nav:true,
    navText: [
      "<i class='fa fa-chevron-left main-color'></i>",
      "<i class='fa fa-chevron-right main-color'></i>"
   ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
    },
  });
});

