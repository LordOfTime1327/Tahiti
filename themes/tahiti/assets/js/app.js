import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.js";

import "./sliders.js";

import { Fancybox } from "@fancyapps/ui";

let html = document.querySelector("html");
// BURGER MENU
let burger = document.querySelector(".header__burger"),
  menu = document.querySelector(".header-menu");
burger.addEventListener("click", function (e) {
  e.preventDefault;
  burger.classList.toggle("close");
  html.classList.toggle("stop-scrolling");
  menu.classList.toggle("active");
});

Fancybox.bind("[data-fancybox]", {
  toolbar: false,
});

$(".discover__select").select2({
  minimumResultsForSearch: Infinity,
});
