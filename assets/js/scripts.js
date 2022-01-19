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
