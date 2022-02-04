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

// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("top-header").style.display = "none";
//   } else {
//     document.getElementById("top-header").style.display = "block";
//   }
//   prevScrollpos = currentScrollPos;
// }

