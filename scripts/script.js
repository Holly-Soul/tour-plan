$(document).ready(function () {
  $(".slider").slick({
    fade: true,
    cssEase: "linear",
    autoplay: true,
    adaptiveHeight: true,
    infinite: true,
  });
});
$(document).ready(function () {
  $(".reviews-slider").slick({
    autoplay: true,
  });
});

let menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click", function () {
  document
    .querySelector(".navbar-bottom")
    .classList.toggle("navbar-bottom_visible");
});
