const menuToggle = document.querySelector(".toggle");
const showcase = document.querySelector(".showcase");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active");
  showcase.classList.toggle("active");
});

// $(document).ready(function () {
//   // Toggle menu on click
//   $("#menu-toggler").click(function () {
//     toggleBodyClass("menu-active");
//   });

//   function toggleBodyClass(className) {
//     document.body.classList.toggle(className);
//   }
// });
