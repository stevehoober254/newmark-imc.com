window.onscroll = function () {
  myFunction();
};
var navbar = document.getElementById("main-header");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    // navbar.style.backgroundColor = "black";
  }
  // else {
  //   navbar.classList.remove("sticky");
  //   navbar.style.backgroundColor = "transparent";
  // }
}

// var vid = document.getElementById("video");

// function setPlaySpeed() {
//   vid.playbackRate = 0.5;
// }

// setPlaySpeed();

/* on scroll down hide div with class of 'top header' */
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.querySelector(".top-header-contact").style.display = "none";
//   } else {
//     document.querySelector(".top-header-contact").style.display = "block";
//   }
//   prevScrollpos = currentScrollPos;
// };

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    autoplay: true,
    loop: true,
    autoplayHoverPause: true,
    autoplayTimeout: 6000,
  //   nav:true,
  //   navText: [
  //     "<i class='fa fa-chevron-left'></i>",
  //     "<i class='fa fa-chevron-right'></i>"
  //  ],
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

