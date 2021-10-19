$(document).ready(function () {
  $(".intro__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    easing: "ease",
    arrows: false,
  });
});
