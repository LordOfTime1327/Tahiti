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

  $(".discover__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    easing: "ease",
    arrows: false,
    mobileFirst: true,

    responsive: [
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });
});
